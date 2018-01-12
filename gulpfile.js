var elixir = require('laravel-elixir');
var gulp = require('gulp');
var sass = require('gulp-sass');
var srcFiles = 'resources/assets/sass/*.scss';
var destFiles = 'public/css';
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

elixir(function(mix) {
    mix.sass('app.scss');
});

gulp.task('sass', function()
{
    return gulp.src(srcFiles)
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest(destFiles))
});

gulp.task('watch', function()
{
    gulp.watch(srcFiles,['sass'])
});
