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

gulp.task('watch-src', function() {
	var watcher = gulp.watch(pkg.paths.src.base + "**/*", ['default']);

	watcher.on('change', function(evt) {
		plug.notify({message: "SPWH Updated."});
	});
});