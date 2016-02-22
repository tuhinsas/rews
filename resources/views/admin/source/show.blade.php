@extends('layouts.admin')
@section('title','Create New Source')
@section('content')
<div id="source">
	<h1>{{ $source->name}}
		<span class="uk-align-right"><a href="{{ route('admin.source.refresh', $source->id) }}" class="uk-button uk-button-primary">Refresh</a></span>
	</h1>
	<div class="uk-overflow-container">
		<table class="uk-table">
			<thead>
				<tr>
					<th>Title</th>
					<th>Created</th>
					<th>Published</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($articles as $article)
				<tr>
					<td><a href="{{$article->url }}">{{$article->title}}</a></td>
					<td>{{ $article->created_at->diffForHumans() }}</td>
					<td>{{ $article->published_at->diffForHumans() }}</td>
					<td>
						<div class="uk-button-group">
							<a href="#" class="uk-button uk-button-primary"><i class="uk-icon-edit"></i></a>
							<a href="#" class="uk-button uk-button-danger"><i class="uk-icon-trash"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	{!! $articles->render() !!}
</div>
<!-- 	@section('scripts')
	<script>

		var Update = new Vue({

			el: '#source-controll',

			data: {
				submitted: false,
			},


			methods: {


				refreshSource: function(id){
					var ConfirmBox = confirm("Are You Sure, you want to refresh this source?");
					if(ConfirmBox){
						this.$http.delete('/admin/api/answer/delete/'+id);
					}
					this.fetchAnswers();
				},
			}
		});
	</script>
	@endsection -->
@endsection