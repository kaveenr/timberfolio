var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');

gulp.task('styles', function() {
    gulp.src(['./sass/style.scss'])
        .pipe(sass({
            includePaths: ['node_modules/bootstrap/scss/']
        }).on('error', sass.logError))
        .pipe(gulp.dest('./'))
});

gulp.task('watch',function() {
    gulp.watch('./sass/style.scss',['styles']);
});

gulp.task('scripts', function() {
    gulp.src(['node_modules/jquery/dist/jquery.min.js'])
      .pipe(gulp.dest('./static/'));
    
    gulp.src(['node_modules/bootstrap/dist/js/bootstrap.bundle.js'])
      .pipe(gulp.dest('./static/'))
  });