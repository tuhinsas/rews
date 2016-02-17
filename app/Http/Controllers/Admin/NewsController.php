<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Log;

use App\Models\Article;
use App\Models\Source;
use App\Models\Media;

use Storage;
use Image;
use Crypt;

use Aggregator;
use OpenGraph;

class NewsController extends Controller
{
    protected $source_id;

    public function OpenGraph($url)
    {
        return $opengraph = OpenGraph::fetch($url);
    }

    public function getArticles($id)
    {
        $this->source_id = $id;

        $source = Source::findOrFail($id);

        $url = $source->url;
        
        $feed = Aggregator::make($url, 1 ,true);

        $articles = $feed->get_items();

        foreach ($articles as $article) {

            $this->store($article);
        }
        
    }

    public function store($article)
    {
        $source_id = $this->source_id;

        $title = $article->get_title();

        $url = $article->get_link();

        $opengraph = $this->OpenGraph($url);

        $published_at = $article->get_date('Y-m-d H:i:s');

        $description = $opengraph->description;

        $image = $opengraph->image_src;

        if ($image == null) {
            $image = $opengraph->image;
        }
        $create = Article::firstOrNew([

            'title' => $title

        ]);

        $create->fill([
            'source_id' => $source_id,
            'title' => $title,
            'published_at' => $published_at,
            'description' => $description,
            'url' => $opengraph->url,
            'image_url' => $image,

        ])->save();

        $this->storeImage($image,$create->id);
    }

    private function storeImage($image,$id)
    {
        if (!$image == null) {

            $filename = basename($image);

            $image = file_get_contents($image);

            $path = Storage::put(
                'images/'.$filename, 
                Image::make($image)->encode('jpg',90)
            );

            $create = Media::firstOrNew([
                'object_id' => $id
            ]);

            $create->fill([
                'obejct_id' => $id,
                'path' => $filename,
            ])->save();
        }
        else {

            Log::error('Could not able to find image: '.$id);
        } 
    }
}