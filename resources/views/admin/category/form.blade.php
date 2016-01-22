@extends('layouts.admin')
@section('title','Create New Category')
@section('content')
	<h1>{{$category->exists ? 'Edit Category -' .$category->title : 'Create New Category'}}</h1>
	<hr>
	{!! Form::model($category,[
		'method' => $category->exists ? 'put' : 'post',
		'route' => $category->exists ? ['admin.category.update', $category->id] : ['admin.category.store'],
		'class' => 'uk-form uk-form-stacked uk-form-horizontal'
	]) !!}
	    <div class="uk-form-row">
	        <label for="title" class="uk-form-label">Title</label>
	        <div class="uk-form-controls">
	        	{!! Form::text('title', null, ['class' => 'uk-width-1-1 uk-form-large']) !!}
	        </div>
	    </div>
	    <div class="uk-form-row">
	        <label for="Description" class="uk-form-label">Description</label>
	        <div class="uk-form-controls">
	        	{!! Form::textarea('description', null, ['class' => 'uk-width-1-1 uk-form-large','rows' => '5']) !!}
	        </div>
	    </div>
	    <div class="uk-form-row">
	        <label for="icon" class="uk-form-label">Icon Class</label>
	        <div class="uk-form-controls">
	            {!! Form::text('icon', null, ['class' => 'uk-width-1-1 uk-form-large']) !!}
	        </div>
	    </div>
	    <div class="uk-form-row">
	        <div class="uk-form-controls uk-width-3-4">
	            <button class="uk-button uk-button-primary" type="submit"><i class="uk-icon-save"></i> Save</button>
	        </div>
	    </div>
	{!! Form::close() !!}
@endsection