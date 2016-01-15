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
				<td><button class="uk-button">Edit</button></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{!! $sources->render() !!}
@endsection