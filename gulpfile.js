var gulp = require('gulp');
var stripDebug = require('gulp-strip-debug');
var uglify = require('gulp-uglify');
var autoprefix = require('gulp-autoprefixer');

gulp.task('scripts', function() {
  gulp.src(['./js/dev/*.js'])
    .pipe(stripDebug())
    .pipe(uglify())
    .pipe(gulp.dest('./js/src/'))
  ;
});

gulp.task('styles', function() {
  gulp.src(['style.less', 'tiny-mce-style.less'])
    .pipe(autoprefix())
    .pipe(less())
  ;
});

gulp.task('default', ['scripts'], function(){
  gulp.watch('./js/dev/*.js', function9) {
    gulp.run('jshint', 'scripts');
  });

  gulp.watch('./less/*.less', function() {
    gulp.run('styles');
  });
});
