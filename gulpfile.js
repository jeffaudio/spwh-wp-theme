var gulp = require('gulp');
var pkg = require("./package.json");

var plug = require('gulp-load-plugins')();

var gutil = plug.loadUtils(['colors', 'env', 'log', 'date']);

var type = gutil.env.production ? 'production' : 'development';
gutil.log('Building for', gutil.colors.magenta(type));
gutil.beep();

gulp.task('clean', function() {
	return gulp.src(pkg.paths.dest.base)
		.pipe(plug.clean({read: false}));
});

gulp.task('minify-css', ['compile-sass'], function() {
	return gulp.src(pkg.paths.dest.css + "/*.css")
		.pipe(plug.minifyCss({ 
			keepSpecialComments: "*"
		}))
		.pipe(gulp.dest(pkg.paths.dest.css));
})

gulp.task('compile-sass', ['clean'], function() {
	return gulp.src(pkg.paths.src.scss)
		.pipe(plug.sass({
			includePaths: pkg.paths.lib.scss
		}))
		.pipe(gulp.dest(pkg.paths.dest.css));
});

gulp.task('images', ['clean'], function() {
	return gulp.src(pkg.paths.src.images)
		.pipe(gulp.dest(pkg.paths.dest.images));
});

gulp.task('base-files', ['clean'], function() {
	return gulp.src(pkg.paths.src.misc)
		.pipe(gulp.dest(pkg.paths.dest.base))

		.pipe(gulp.src(pkg.paths.src.php))
		.pipe(gulp.dest(pkg.paths.dest.base))

		.pipe(gulp.src(pkg.paths.src.fonts))
		.pipe(gulp.dest(pkg.paths.dest.fonts))

		.pipe(gulp.src(pkg.paths.src.js))
		.pipe(gulp.dest(pkg.paths.dest.js))
		;
})


gulp.task('default', ['compile-sass', 'images', 'base-files'], function() {

	return gulp.src(pkg.paths.dest.base + "**/*")
		.pipe(gulp.dest(pkg.paths.production))

		.pipe(plug.notify({
			onLast: true,
			message: "Compiled and copied to production directory!"
      }));

});

gulp.task('deploy', ['compile-sass', 'minify-css', 'images', 'base-files'], function() {
	return gulp.src(pkg.paths.dest.base + "/**/*")
		.pipe(plug.zip(pkg.name + '-' + pkg.version + '.zip'))
		.pipe(gulp.dest(pkg.paths.zip))

		.pipe(plug.notify({
			onLast: true,
			message: "SPWH Theme Zipped and ready for production!"
		}));
});

gulp.task('watch-src', function() {
	var watcher = gulp.watch(pkg.paths.src.base + "**/*", ['default']);

	watcher.on('change', function(evt) {
		plug.notify({message: "SPWH Updated."});
	});
});