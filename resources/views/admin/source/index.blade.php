@extends('layouts.admin')
@section('title','Create New Source')
@section('content')
	<h1>All Sources</h1>
	<table class="uk-table">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Type</th>
				<th>Category</th>
				<th>Autograb</th>
				<th>Last Updated</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($sources as $source)
			<tr>
				<td>{{ $source->id }}</td>
				<td>{{ $source->name }}</td>
				<td>{{ $source->type }}</td>
				<td>{{ $source->category }}</td>
				<td>{{ $source->autograb }}</td>
				<td>{{ $source->updated_at }}</td>
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