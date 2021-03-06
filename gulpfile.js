let {series} = require('gulp')

var gulp = require('gulp');
let uglify = require('gulp-uglify')
let rename = require('gulp-rename')
var sass = require('gulp-sass');
let csso = require('gulp-csso')
let concat = require('gulp-concat');
let minify = require('gulp-minify');
let del = require('del')
sass.compiler = require('node-sass');

function Styles(){
    return gulp.src('src/sass/**.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(csso())
        .pipe(concat('index.css')
            .pipe(gulp.dest('dist')));
}

function MinJS(){
    return gulp.src(['src/js/**.js'])
    .pipe(concat('index.js'))
    .pipe(uglify())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('dist'));
}

gulp.task('styles', Styles);
gulp.task('min-js', MinJS);

gulp.watch('src/sass/**.scss', Styles)
gulp.watch('src/js/**.js', MinJS)

gulp.task('default', gulp.series(['styles', 'min-js']));