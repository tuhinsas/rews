<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class DashboardController extends Controller
{
    public function index()
    {

    	$users = $this->totalUser();

    	$articles = $this->totalArticles();

    	$sources = $this->totalSources();

    	$categories = $this->totalCategories();

    	return view('admin.dashboard',compact('users','articles','sources','categories'));
    }

    protected function totalUser()
    {
    	$users = DB::table('users')->count();

    	return $users;
    }

    protected function totalSources()
    {
    	$sources = DB::table('sources')->count();

    	return $sources;
    }

    protected function totalArticles()
    {
    	$articles = DB::table('articles')->count();

    	return $articles;
    }

    protected function totalCategories()
    {
    	$categories = DB::table('categories')->count();

    	return $categories;
    }
}
