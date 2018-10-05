var gulp        = require('gulp'),
    uglify      = require('gulp-uglify'),        
    browserSync = require('browser-sync'),
    sass        = require('gulp-sass'),
    connect     = require('gulp-connect-php'),
    plumber     = require('gulp-plumber'),
    imagemin    = require('gulp-imagemin'),
    prefix      = require('gulp-autoprefixer');

//Styles Task *Uglified*

gulp.task('styles', function() {
    return gulp.src(['node_modules/bootstrap/scss/bootstrap.scss', 'src/scss/*.scss'])
        .pipe(plumber())
        .pipe(sass({
           outputStyle:'compressed'
         }))
        .pipe(prefix('last 2 versions'))
        .pipe(gulp.dest("src/css"))
        .pipe(browserSync.stream());
});

//Image task *Compressed*

gulp.task('image',function(){
   gulp.src(['src/assets/imgs/**/*'])
    .pipe(imagemin())
    .pipe(gulp.dest('src/assets/build/img'))
})

//Scripts Task *Uglified*

gulp.task('scripts', function() {
     gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js', 'node_modules/popper.js/dist/umd/popper.min.js','src/js/*.js'])
         .pipe(plumber())
         .pipe(uglify())
         .pipe(gulp.dest("src/js"))
         .pipe(browserSync.stream());
});

gulp.task('compressedCostumsJs',function(){
  gulp.src(['src/js/costum/*.js'])
  .pipe(plumber())
  .pipe(uglify())
  .pipe(gulp.dest('src/assets/build/js'))
  .pipe(browserSync.stream());
})



gulp.task('connect-sync', function() {
  connect.server({}, function (){
    browserSync({
      proxy: '127.0.0.1:8000'
    });
  });
 
  gulp.watch(['node_modules/bootstrap/scss/bootstrap.scss', 'src/scss/*.scss'], ['styles']);
  gulp.watch('src/js/costum/*.js', ['compressedCostumsJs']);
  gulp.watch('**/*.php').on('change', function () {
    browserSync.reload();
  });
});

gulp.task('default', ['compressedCostumsJs','scripts','styles','connect-sync','image']);
