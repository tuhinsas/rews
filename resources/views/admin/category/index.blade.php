@extends('layouts.admin')
@section('title','Categories')
@section('content')
	<h1>All Categories</h1>
	<hr>
	<table class="uk-table">
		<thead>
			<tr>
				<th>Title</th>
				<th>Icon Class</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($categories as $category)
			<tr>
				<td><a href="{{ route('admin.category.edit',$category->id)}}">{{ $category->title }}</a></td>
				<td><i class="{{ $category->icon }}"></i></td>
				<td>
					<div class="uk-button-group">
					    <a class="uk-button uk-button-primary" href="{{ route('admin.category.edit',$category->id)}}">
					    	<i class="uk-icon-edit"></i> Edit
					    </a>
					    <a class="uk-button uk-button-danger" href="{{ route('admin.category.confirm',$category->id)}}">
					    	<i class="uk-icon-edit"></i> Delete
					    </a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{!! $categories->render() !!}
@endsection