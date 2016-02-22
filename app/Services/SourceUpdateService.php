<?php

namespace App\Services;

use Log;

use App\Models\Article;
use App\Models\Source;
use App\Models\Media;

use Storage;
use Image;
use Crypt;

use Aggregator;
use OpenGraph;

/**
* 
*/
class SourceUpdateService
{
	
	/**
	 * This Function updates new items for a source by it's id.
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function updateSource($id)
	{
		$source = Source::findOrFail($id);

		$source_id = $id;

		$url = $source->url;

		$limit = $source->limit;

		$feed = Aggregator::make($url, $limit ,true);

        $articles = $feed->get_items(1,$limit);

        foreach ($articles as $article) {

            $this->store($article,$source_id);
        }
	}

	public function OpenGraph($url)
    {
        return $opengraph = OpenGraph::fetch($url);
    }

	public function store($article,$source_id)
    {
        $source_id = $source_id;

        $title = $article->get_title();

        $url = $article->get_link();

        $opengraph = $this->OpenGraph($url);

        $published_at = $article->get_date('Y-m-d H:i:s');

        $description = htmlspecialchars_decode($opengraph->description);

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

            if( !$image == null )
            {
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

            else Log::error('Could not save local image: '.$id);
            
        }
        else {

            Log::error('Could not able to find image: '.$id);
        } 
    }
}

