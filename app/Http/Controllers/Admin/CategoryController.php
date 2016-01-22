<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    protected $categories;

    public function __construct(Category $categories){

        $this->categories = $categories;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = $this->categories->paginate(10);

        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
        return view('admin.category.form',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\StoreCategoryRequest $request)
    {

        $this->categories->create($request->all());

        return redirect(route('admin.category.index'))->with(['success' => 'New Category Created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->categories->findOrFail($id);

        return view('admin.category.form',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\StoreCategoryRequest $request, $id)
    {
        $category = $this->categories->findOrFail($id);

        $category->fill($request->only('title','description','icon'))->save();

        return redirect(route('admin.category.edit', $category->id))->with('info','The Category has been updated');
    }

    public function confirm($id)
    {
        $category = $this->categories->findOrFail($id);

        return view('admin.category.confirm', compact('category'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $category = $this->categories->findOrFail($id);

        $category->delete();

        return redirect(route('admin.category.index'))->with(['info','The category has been deleted']);
    }
}
