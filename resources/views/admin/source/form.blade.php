@extends('layouts.admin')
@section('title','Create New Source')
@section('content')
	<h1>{{$source->exists ? 'Edit Source - ' .$source->name : 'Create New Source'}}</h1>
	<hr>
	{!! Form::model($source,[
		'method' => $source->exists ? 'put' : 'post',
		'route' => $source->exists ? ['admin.source.update', $source->id] : ['admin.source.store'],
		'class' => 'uk-form uk-form-stacked uk-form-horizontal'
	]) !!}
	    <div class="uk-form-row">
	        <label for="name" class="uk-form-label">Source Name</label>
	        <div class="uk-form-controls">
	            {!! Form::text('name', null, ['class' => 'uk-width-1-1 uk-form-large']) !!}
	        </div>
	    </div>
	    <div class="uk-form-row">
	        <label for="type" class="uk-form-label">Type</label>
	        <div class="uk-form-controls">
	            {!! Form::text('type', null, ['class' => 'uk-width-1-1 uk-form-large']) !!}
	        </div>
	    </div>
	    <div class="uk-form-row">
	        <label for="url" class="uk-form-label">URL</label>
	        <div class="uk-form-controls">
	            {!! Form::text('url', null, ['class' => 'uk-width-1-1 uk-form-large']) !!}
	        </div>
	    </div>
	    <div class="uk-form-row">
	        <label for="category_id" class="uk-form-label">Category</label>
	        <div class="uk-form-controls">
	            {!! Form::text('category_id', null, ['class' => 'uk-width-1-1 uk-form-large']) !!}
	        </div>
	    </div>
	    <div class="uk-form-row">
	        <label for="autograb" class="uk-form-label">Autograb</label>
	        <div class="uk-form-controls">
	            <select name="autograb" id="active">
	            	<option value="1">Yes</option>
	            	<option value="0">No</opton>
	            </select>
	        </div>
	    </div>
	    <div class="uk-form-row">
	        <label for="start" class="uk-form-label">Start Time</label>
	        <div class="uk-form-controls">
	        	{!! Form::text('start', null, ['class' => 'uk-width-1-1 uk-form-large', 'data-uk-timepicker']) !!}
	        </div>
	    </div>
	    <div class="uk-form-row">
	        <label for="duration" class="uk-form-label">Duration</label>
	        <div class="uk-form-controls">
	            {!! Form::text('duration', null, ['class' => 'uk-width-1-1 uk-form-large', 'data-uk-timepicker']) !!}
	        </div>
	    </div>
	    <div class="uk-form-row">
	        <label for="name" class="uk-form-label">Active</label>
	        <div class="uk-form-controls">
	            <select name="active" id="active">
	            	<option value="1">Yes</option>
	            	<option value="0">No</opton>
	            </select>
	        </div>
	    </div>
	    <div class="uk-form-row">
	        <div class="uk-form-controls uk-width-3-4">
	            <button class="uk-button uk-button-primary" type="submit"><i class="uk-icon-user"></i> Save</button>
	        </div>
	    </div>
	{!! Form::close() !!}
@endsection