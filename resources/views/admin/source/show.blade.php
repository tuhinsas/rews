@extends('layouts.admin')
@section('title','Create New Source')
@section('content')
	<h1>{{ $source->name}}</h1>
	<div class="uk-overflow-container">
		<table class="uk-table">
			<thead>
				<tr>
					<th>Title</th>
					<th>URL</th>
					<th>Created</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($source->articles as $article)
				<tr>
					<td><a href="{{$article->url }}">{{$article->title}}</a></td>
					<td>{{ $article->created_at->diffForHumans() }}</td>
					<td></td>
					<td>
						<div class="uk-button-group">
							<a href="#" class="uk-button uk-button-primary"><i class="uk-icon-refresh"></i></a>
							<a href="#" class="uk-button uk-button-primary"><i class="uk-icon-edit"></i></a>
							<a href="#" class="uk-button uk-button-danger"><i class="uk-icon-trash"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection