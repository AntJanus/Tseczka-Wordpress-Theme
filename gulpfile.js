var gulp = require('gulp');
var stripDebug = require('gulp-strip-debug');
var uglify = require('gulp-uglify');
var autoprefix = require('gulp-autoprefixer');
var less = require('gulp-less');

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
    .pipe(gulp.dest('./'))
  ;
});

gulp.task('default', ['scripts'], function(){
  gulp.watch('./js/dev/*.js', ['jshint', 'scripts']);
  gulp.watch('./less/*.less', ['styles']);
});
