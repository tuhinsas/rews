<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Article;

class ArticleController extends Controller
{
    protected $articles;

    public function __construct(Article $articles)
    {

        $this->articles = $articles;
    }

    public function show($id)
    {
    	$article = $this->articles->findOrFail($id);

    	return view('frontend.article.details',compact('article'));
    }
}
