<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Article;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        if (Auth::user()->type == 'admin') {

            return redirect()->route('admin.dashboard');
        }

        $articles = Article::orderBy('published_at','desc')->get();
        
        return view('frontend.home',compact('articles'));
    }

    public function details()
    {
        return view('frontend.article.details');
    }
}
