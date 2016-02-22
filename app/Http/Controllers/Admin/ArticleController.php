<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    protected $articles;

    public function __construct(Article $articles)
    {

        $this->articles = $articles;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $articles = $this->articles->paginate(10);

        return view('admin.article.index',compact('articles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = $this->articles->findOrFail($id);

        return view('admin.article.form',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\StoreArticleRequest $request, $id)
    {
        $article = $this->articles->findOrFail($id);

        $article->fill($request->only('title','description','icon'))->save();

        return redirect(route('admin.article.edit', $article->id))->with('info','The article has been updated');
    }

    public function confirm($id)
    {
        $article = $this->articles->findOrFail($id);

        return view('admin.article.confirm', compact('article'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $article = $this->articles->findOrFail($id);

        $article->delete();

        return redirect(route('admin.article.index'))->with(['info','The article has been deleted']);
    }
}