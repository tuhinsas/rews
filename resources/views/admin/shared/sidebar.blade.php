<ul class="uk-nav uk-nav-side uk-hidden-small" id="admin-sidebar" data-uk-nav>
	<li><a href="{{ URL::route('admin.dashboard') }}">Dashboard</a></li>

	<li class="uk-nav-header">Content</li>
	<li><a href="{{ URL::route('admin.article.index' )}}">All News</a></li>
	<li><a href="{{ URL::route('admin.source.index' )}}">All Sources</a></li>
	<li><a href="{{ URL::route('admin.source.create' )}}">New Source</a></li>
	<hr>
	<li class="uk-nav-header">Category</li>
	<li><a href="{{ URL::route('admin.category.index') }}">All Categories</a></li>
	<li><a href="{{ URL::route('admin.category.create') }}">New Category</a></li>
	<hr>
	<li class="uk-nav-header">Users</li>
	<li><a href="{{ URL::route('admin.user.index') }}">View All</a></li>
	<hr>
	<li class="uk-nav-header">Pages</li>
	<li><a href="#">New Page</a></li>
	<li><a href="">All Pages</a></li>
	<hr>
	<li class="uk-nav-header">Settings</li>
	<li><a href="#">General</a></li>
	<li><a href="#">Site Settings</a></li>
</ul>