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
		.pipe(gulp.dest("resources/assets/js/"));

	gulp.src("vendor/bower_components/uikit/less/**")
		.pipe(gulp.dest("resources/assets/less/uikit/"));

	gulp.src("vendor/bower_components/uikit/js/**")
		.pipe(gulp.dest("resources/assets/js/uikit"));

	gulp.src("vendor/bower_components/uikit/fonts/**")
		.pipe(gulp.dest("public/fonts/"));
	
});

elixir(function(mix) {
    mix.less('app.less');

    mix.scripts([
    	'jquery.js',
    	'uikit/uikit.js',
    	'uikit/components/**'
    	],
    	'public/js/main.js'
    );
});

elixir(function(mix) {
	mix.browserSync({
		proxy: {
			target: "http://rews.dev",
		},
	    files: ["public/css/app.css", "public/js/*.js", "resources/views/**/*.php"],
	    notify: false
	});
});