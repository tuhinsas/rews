@extends('layouts.admin')
@section('title','Create New Source')
@section('content')
	<h1>All Sources 
		<span class="uk-align-right"><a href="{{route('admin.source.create')}}" class="uk-button uk-button-primary">Add New Source</a></span>
	</h1>
	<div class="uk-overflow-container">
		<table class="uk-table">
			<thead>
				<tr>
					<th>Name</th>
					<th>URL</th>
					<th>Autograb</th>
					<th>Status</th>
					<th>Created</th>
					<th>Updated</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($sources as $source)
				<tr>
					<td><a href="{{ route('admin.source.show', $source->id) }}">{{ $source->name }}</a></td>
					<td class="uk-text-small uk-text-bold">{{ $source->url }}</td>
					<td>{{ $source->autograb }}</td>
					<td>{{ $source->status}}</td>
					<td>{{ $source->created_at->diffForHumans() }}</td>
					<td></td>
					<td>
						<div class="uk-button-group">
						
							<a href="{{ route('admin.source.edit',$source->id) }}" class="uk-button uk-button-primary"><i class="uk-icon-edit"></i></a>
							<a href="{{ route('admin.source.confirm',$source->id) }}" class="uk-button uk-button-danger"><i class="uk-icon-trash"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	{!! $sources->render() !!}
@endsection