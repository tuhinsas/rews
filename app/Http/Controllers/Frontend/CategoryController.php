<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    protected $categories;

    public function __construct(Category $categories)
    {
    	$this->categories = $categories;
    }

    public function show($id)
    {
    	$category = $this->categories->findOrFail($id);

    	$articles = $category->articles()->paginate(10);

    	return view('frontend.category.index',compact('category','articles'));
    }
}
