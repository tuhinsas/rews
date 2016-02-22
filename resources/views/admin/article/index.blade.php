@extends('layouts.admin')
@section('title','All News')
@section('content')
	<h1>All News</h1>
	<div class="uk-overflow-container">
		<table class="uk-table">
			<thead>
				<tr>
					<th>Title</th>
					<th>Category</th>
					<th>Published At</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($articles as $article)
				<tr>
					<td style="width:45%; "><a href="{{ $article->url }}" target="_blank">{{ $article->title }}</a></td>
					<td></td>
					<td>{{ $article->published_at->diffForHumans() }}</td>
					<td>
						<div class="uk-button-group">
							<a href="{{ route('admin.article.edit',$article->id) }}" class="uk-button uk-button-primary"><i class="uk-icon-edit"></i></a>
							<a href="{{ route('admin.article.confirm',$article->id) }}" class="uk-button uk-button-danger"><i class="uk-icon-trash"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	{!! $articles->render() !!}
@endsection