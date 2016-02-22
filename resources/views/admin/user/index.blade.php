@extends('layouts.admin')
@section('title', 'All Users')
@section('content')
	<h1>All users</h1>
	<hr>
	<table class="uk-table">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $index => $user)
			<tr>
				<td>{{ $index+1 }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>
					<div class="uk-button-group">
						<a href="{{ route('admin.user.edit', $user->id) }}" class="uk-button uk-button-primary">
							<i class="uk-icon-edit"></i> Edit
						</a>
						<a href="{{ route('admin.user.confirm', $user->id) }}" class="uk-button uk-button-danger">
							<i class="uk-icon-trash"></i> Delete
						</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{!! $users->render() !!}
@endsection