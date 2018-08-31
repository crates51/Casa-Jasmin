var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');

var plumber     = require('gulp-plumber');
// var coffee      = require('gulp-coffee');

// function swallowError (error) {

//   // If you want details of the error in the console
//   console.log(error.toString())

//   this.emit('end')
// }
// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src(['node_modules/bootstrap/scss/bootstrap.scss', 'src/scss/*.scss'])
        .pipe(plumber())
        .pipe(sass())
        .pipe(gulp.dest("src/css"))
        // .on('error', swallowError)
        .pipe(browserSync.stream());
});

// Move the javascript files into our /src/js folder
gulp.task('js', function() {
    return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js', 'node_modules/popper.js/dist/umd/popper.min.js'])
        .pipe(plumber())
        .pipe(gulp.dest("src/js"))
        // .on('error', swallowError)
        .pipe(browserSync.stream());
});

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

    browserSync.init({
        server: "./src"  
    });

    gulp.watch(['node_modules/bootstrap/scss/bootstrap.scss', 'src/scss/*.scss'], ['sass']);
    gulp.watch("src/*.html").on('change', browserSync.reload);
    gulp.watch("src/css/styles.css").on('change', browserSync.reload);
    gulp.watch("src/js/costum.js").on('change', browserSync.reload);

});

gulp.task('default', ['js','serve']);