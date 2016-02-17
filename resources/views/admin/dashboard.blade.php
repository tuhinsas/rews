@extends('layouts.admin')
@section('title','Dashboard')

@section('content')
	<div class="uk-grid" data-uk-grid-margin>
		<div class="uk-width-medium-1-4 uk-text-center" >
			<div class="uk-panel uk-panel-box">
				<h1>91</h1>
				<p>Users</p>
			</div>
		</div>
		<div class="uk-width-medium-1-4 uk-text-center">
			<div class="uk-panel uk-panel-box">
				<h1>50</h1>
				<p>Source</p>
			</div>
		</div>
		<div class="uk-width-medium-1-4 uk-text-center">
			<div class="uk-panel uk-panel-box">
				<h1>300</h1>
				<p>Topics</p>
			</div>
		</div>
		<div class="uk-width-medium-1-4 uk-text-center">
			<div class="uk-panel uk-panel-box">
				<h1>1500</h1>
				<p>News</p>
			</div>
		</div>
	</div>
	<div class="uk-grid uk-margin-top" data-uk-grid-match="{target:'.uk-panel'}">
		<div class="uk-width-2-3">
			<div class="uk-panel uk-panel-box">
				<h3 class="uk-panel-title">Users</h3>
				<hr>
				<div id="user-statistics">
					<canvas id="user-chart" width="500" height="300"></canvas>
				</div>
			</div>
		</div>
		<div class="uk-width-1-3">
			<div class="uk-panel uk-panel-box">
				<h3 class="uk-panel-title">Top Categories</h3>
				<hr>
				<div id="category-statistic" class="uk-text-center uk-margin-large-top">
					<canvas id="category-pie" width="200" height="200"></canvas>
				</div>
				<h4 class="uk-text-center">Top 3</h4>
			</div>
		</div>
	</div>
@endsection