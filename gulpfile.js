var gulp = require('gulp');
var connectSSI = require('connect-ssi');
var browserSync = require('browser-sync');
gulp.task('browser-sync', function(done) {
  browserSync.init({
    server: {
      baseDir: "./dst",
    },
    startPath: "/",
    middleware: [
		connectSSI({
			baseDir: './dst',
			ext: '.html'
		})
	]
  });
  done();
});
gulp.task('bs-reload', function(done) {
  browserSync.reload();
  done();
});
 
gulp.task('watch', function(done) {
  gulp.watch(['/html**/*.scss'], gulp.task('bs-reload'));
  gulp.watch(['/html**/*.css'], gulp.task('bs-reload'));
  gulp.watch(['/html**/*.html'], gulp.task('bs-reload'));
  gulp.watch(['/html**/*.{png,jpg,gif,webp,svg,ics,css,pdf,js}'], gulp.task('bs-reload'));
  done()
});

gulp.task('default', gulp.series(gulp.parallel('browser-sync', 'watch')));


 