var gulp         = require('gulp');
var imagemin     = require('gulp-imagemin');
var postcss   	 = require('gulp-postcss');
var cssnext      = require('postcss-cssnext');
var precss       = require('precss');
var browserSync  = require('browser-sync');
var reload       = browserSync.reload;

var url = "";

// ////////////////////////////////////////////////
// Пути к исходным файлам
// они немного изменились
// ///////////////////////////////////////////////
var paths = {
  html:['./*.php'],
  css:['./src/*.css'],
  script:['./assets/js/*.js'],
  images:['./src/images/*']
};
postcss([
  cssnext({
    features: {
      pixrem: false
    }
  })
])
gulp.task('css', function(){
    var processors = [
        cssnext({replace: false, browsers: ['last 7 version']}),
        precss
    ];
    return gulp.src(paths.css)
        .pipe(postcss(processors))
		    .pipe(gulp.dest('./'))
		    .pipe(reload({stream:true}));
});

// ////////////////////////////////////////////////
// HTML
// ///////////////////////////////////////////////
gulp.task('html', function(){
  gulp.src(paths.html)
  .pipe(reload({stream:true}));
});

// ////////////////////////////////////////////////
// Browser-Sync
// // /////////////////////////////////////////////
gulp.task('browserSync', function() {
  browserSync({
    proxy: url
  });
});



gulp.task('scripts', function(){
  return gulp.src(paths.script)
    .pipe(reload({stream:true}));
});

gulp.task('images', function(){
  gulp.src(paths.images)
    .pipe(imagemin(
      [
        imagemin.gifsicle({interlaced: true}),
        imagemin.jpegtran({progressive: true}),
        imagemin.optipng({optimizationLevel: 5}),
        imagemin.svgo({plugins: [{removeViewBox: true}]})
      ],
      {verbose:true})
    )
    .pipe(gulp.dest('/assets/img'))
    .pipe(reload({stream:true}));
});

gulp.task('watcher',function(){
  gulp.watch(paths.css, ['css']);
  gulp.watch(paths.script, ['scripts']);
  gulp.watch(paths.html, ['html']);
  gulp.watch(paths.images, ['images']);
});

gulp.task('default', ['watcher', 'browserSync']);
