var gulp = require('gulp');

// Requires the gulp-sass plugin
var sass = require('gulp-sass');

//for running a server and allowing auto reload
var browserSync = require('browser-sync').create();

//for concatenating js and css
var useref = require('gulp-useref');

// for minifying the js
var uglify = require('gulp-uglify');
var cssnano = require('gulp-cssnano');
//for targeting file types when performing operations
var gulpif = require('gulp-if');

//for optimizing images
var imagemin = require('gulp-imagemin');
//for caching images
var cache = require('gulp-cache');

//for cleaning directories
var del = require('del');

var runsequence = require('run-sequence');




//initialise a local server
gulp.task('browserSync', function() {
    browserSync.init({
      server: {
        baseDir: 'src'
      },
    })
  })

//test gul is functioning
gulp.task('hello', function() {
    console.log('Gwan');
  });

  //compile scss into css
gulp.task('compile-sass', function(){
    return gulp.src('src/scss/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('src/css'))
        .pipe(browserSync.reload({
            stream: true
        }))
    console.log('now we sass');
})

//concate and minify js
gulp.task('useref', function(){
    return gulp.src('src/*.html')
      .pipe(useref())
      //gulpif- if its a js file out of the useref, uglify==minify it 
      .pipe(gulpif('*.js', uglify()))
      .pipe(gulpif('*.css', cssnano()))
      .pipe(gulp.dest('dist'))
  });

//deal with css
gulp.task('css', function(){
    return gulp.src('src/css/**/*.css')
    .pipe(gulp.dest('dist/css'))
});

  //optimize images and add to dist
  gulp.task('optimize-images', function(){
    return gulp.src('src/images/**/*.+(png|jpg)')
    .pipe(cache(imagemin({
        interlace: true
    })))
    .pipe(gulp.dest('dist/images'))
  });

  gulp.task('clean-dist', function(){
    return del.sync('dist');
  })

  gulp.task('anything',function(){

  })

  gulp.task('copy-assets', function(){
      return gulp.src('src/assets/**/*')
      .pipe(gulp.dest('dist/assets'))
  });

//run [] before starting to 'watch' when you run watch from terminal
gulp.task('watch',['browserSync', 'compile-sass'], function(){
    gulp.watch('src/scss/**/*.scss', ['compile-sass']);
    //reload page when any changes are found in html or java
    gulp.watch('src/*.html', browserSync.reload); 
    gulp.watch('src/js/**/*.js', browserSync.reload); 
})

gulp.task('build', function(callback){
    runsequence('clean-dist', ['compile-sass', 'useref', 'optimize-images', 'copy-assets'],callback)
});

gulp.task('serve-dist', function(){
    browserSync.init({
        server: {
            baseDir: 'dist'
        },
    })
});

