process.env.DISABLE_NOTIFIER = true;
var elixir = require('laravel-elixir');
var gulp = require('gulp');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

gulp.task("copyfiles",function(){

	gulp.src("vendor/bower_components/jquery/dist/jquery.js")
		.pipe(gulp.dest("resources/assets/js/vendor/"));

	gulp.src("vendor/bower_components/uikit/less/**")
		.pipe(gulp.dest("resources/assets/less/uikit/"));

	gulp.src("vendor/bower_components/uikit/js/**")
		.pipe(gulp.dest("resources/assets/js/uikit"));

	gulp.src("vendor/bower_components/uikit/fonts/**")
		.pipe(gulp.dest("public/fonts/"));
	
});
elixir(function(mix) {
    mix.copy('vendor/bower_components/Chart.js/Chart.js', 'resources/assets/js/vendor/');
});
elixir(function(mix) {
    mix.less([
    	'admin.less'
    	],
    	'public/css/admin.css'
    );

    mix.less('app.less');

    mix.scripts([
    	'vendor/jquery.js',
    	'vendor/uikit/uikit.js',
    	'vendor/uikit/components/**',
    	'vendor/Chart.js'
    	],
    	'public/js/main.js'
    );

    mix.scripts([
    	'admin/dashboard.js'
    	],
    	'public/js/admin.js'
    );
});

elixir(function(mix) {
	mix.browserSync({
		proxy: {
			target: "http://rews.dev",
		},
	    files: ["public/css/app.css", "public/css/admin.css", "public/js/main.js", "public/js/admin.js", "resources/views/**/*.php"],
	    notify: false
	});
});