//gulp requires
var gulp = require('gulp'),
sass = require('gulp-ruby-sass'),
autoprefixer = require('gulp-autoprefixer'),
minifycss = require('gulp-minify-css'),
uglify = require('gulp-uglify'),
concat = require('gulp-concat'),
rename = require("gulp-rename"),
livereload = require('gulp-livereload');

//source variables
var jsSources = ['components/js/*.js'];
var sassSources = ['components/sass/styles.scss'];


//gulp javascript tasks
gulp.task('js', function() {
    return gulp.src(jsSources)
    .pipe(concat('script.js'))
    .pipe(gulp.dest('js'))
    .pipe(uglify())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('js'))
});

//gulp sass tasks
gulp.task('sass', function() {
    return gulp.src(sassSources)
    .pipe(sass({ style: 'expanded' }))
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
    .pipe(gulp.dest('css'))
    .pipe(rename({suffix: '.min'}))
    .pipe(minifycss())
    .pipe(gulp.dest('css'));
});

//gulp watch tasks
gulp.task('watch', function() {
  gulp.watch(jsSources, ['js']);
  gulp.watch('components/sass/*.scss', ['sass']);
});


//runs all tasks through one command of 'gulp'
gulp.task('default', ['js', 'sass', 'watch']);
