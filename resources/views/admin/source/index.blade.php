@extends('layouts.admin')
@section('title','Create New Source')
@section('content')
	<h1>All Sources</h1>
	<table class="uk-table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Type</th>
				<th>Autograb</th>
				<th>Status</th>
				<th>Last Updated</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($sources as $source)
			<tr>
				<td>{{ $source->name }}</td>
				<td>{{ $source->type }}</td>
				<td>{{ $source->autograb }}</td>
				<td>{{ $source->status}}</td>
				<td>{{ $source->updated_at->diffForHumans() }}</td>
				<td>
					<div class="uk-button-group">
						<a href="{{ route('admin.source.edit',$source->id) }}" class="uk-button uk-button-primary"><i class="uk-icon-edit"></i> Edit</a>
						<a href="{{ route('admin.source.confirm',$source->id) }}" class="uk-button uk-button-danger"><i class="uk-icon-trash"></i> Delete</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{!! $sources->render() !!}
@endsection