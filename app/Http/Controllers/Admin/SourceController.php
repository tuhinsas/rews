<?php

namespace App\Http\Controllers\Admin;

use App\Models\Source;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\SourceUpdateService;

class SourceController extends Controller
{
    protected $sources;

    public function __construct(Source $sources)
    {
        $this->sources = $sources;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $sources = $this->sources->paginate(10);

        return view('admin.source.index', compact('sources'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Source $source)
    {
        $categories = \App\Models\Category::lists('title','id');

        return view('admin.source.form', compact('source','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\StoreSourceRequest $request)
    {
        $source = $this->sources->create($request->all());

        $categoryId = $request->input('category');

        $source->category()->attach($categoryId);

        return redirect(route('admin.source.index'))->with(['success' => 'New Source has been created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $source = $this->sources->findOrFail($id);
        
        $articles = $source->articles()->orderBy('created_at','desc')->paginate(10);

        return view('admin.source.show',compact('source','articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $source = $this->sources->findOrFail($id);

        return view('admin.source.form',compact('source'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\UpdateSourceRequest $request, $id)
    {
        $source = $this->sources->findOrFail($id);

        $source->fill($request->all())->save();

        return redirect(route('admin.source.edit', $source->id))->with('info','The Source has been updated.');
    }

    public function confirm($id)
    {   
        $source = $this->sources->findOrFail($id);

        return view('admin.source.confirm',compact('source'));
    }


    public function refresh($id)
    {
        $update = new SourceUpdateService;

        $update->updateSource($id);

        return redirect(route('admin.source.show',$id))->with('info', 'The source has been refreshed');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $source = $this->sources->findOrFail($id);

        $source->delete();

        return redirect(route('admin.source.index'))->with(['info','The source has been deleted']);
    }
}
