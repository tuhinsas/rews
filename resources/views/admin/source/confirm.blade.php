@extends('layouts.admin')
@section('title', 'Confirm Delete')
@section('content')
{!! Form::open(['method'=>'delete', 'route' => ['admin.source.destroy', $source->id ]]) !!}
	<div class="uk-alert uk-alert-danger">
		<p><strong>Warning!</strong> You are about to delete a source. This action cannot be undone. Are you sure you want to continue?</p>
	</div>

	{!! Form::submit('Yes, delete this source!', ['class' => 'uk-button uk-button-danger']) !!}

	<a href="{{ route('admin.source.index') }}" class="uk-button uk-button-primary">No, get me out of here.</a>
{!! Form::close() !!}
@endsection