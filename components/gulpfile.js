var gulp = require('gulp'),
    watch = require('gulp-watch'),
    less = require('gulp-less'),
    path = require('path'),
    coffee = require('gulp-coffee'),
    plumber = require('gulp-plumber'),
    concat = require('gulp-concat');
    notifier = require('node-notifier');
    cleanCSS = require('gulp-clean-css');

gulp.task('watch', function (cb) {
    watch('less_custom/**/*.less', function () {
        gulp.src('less_custom/**/*.less')
            .pipe(plumber())
            .pipe(less({
                paths: [ path.join(__dirname, 'less', 'includes') ]
            }))
            .pipe(concat('style.css'))
            .pipe(gulp.dest('../'));

        gulp.src('../style.css')
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest('../'));    

        notifier.notify({
            'title': 'LESS',
            'message': 'LESS COMPILE'
        });
    });

    watch('coffee/**/*.coffee', function () {
        gulp.src('coffee/**/*.coffee')
            .pipe(plumber())
            .pipe(coffee())
            .pipe(concat('all.js'))
            .pipe(gulp.dest('./js'));

        notifier.notify({
            'title': 'COFFEE',
            'message': 'COFFEE COMPILE'
        });
    });
});

gulp.task('minify-css', function() {
  return gulp.src('../style.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('../'));
});