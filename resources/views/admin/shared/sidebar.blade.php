<ul class="uk-nav uk-nav-side uk-hidden-small" id="admin-sidebar" data-uk-nav>
	<li><a href="{{ URL::route('admin.dashboard') }}">Dashboard</a></li>

	<li class="uk-nav-header">Content</li>
	<li><a href="#">All News</a></li>
	<li><a href="#">New News</a></li>
	<li><a href="{{ URL::route('admin.source.index' )}}">All Sources</a></li>
	<li><a href="#">New Source</a></li>

	<li class="uk-nav-header">Category</li>
	<li><a href="#">All Categories</a></li>
	<li><a href="">New Category</a></li>

	<li class="uk-nav-header">Users</li>
	<li><a href="#">View All</a></li>

	<li class="uk-nav-header">Pages</li>
	<li><a href="#">New Page</a></li>
	<li><a href="">All Pages</a></li>

	<li class="uk-nav-header">Settings</li>
	<li><a href="#">General</a></li>
	<li><a href="#">Site Settings</a></li>
</ul>