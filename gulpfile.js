var gulp = require('gulp');
var autoprefixer = require('autoprefixer');
var cssnano = require('cssnano');
var $ = require('gulp-load-plugins')({ lazy: true });


// Tasks
gulp.task('styles', function() {
  gulp.src('./sass/style.scss')
    .pipe($.plumber({
      handleError: function(err) {
        console.log(err);
        this.emit('end');
      }
    }))
    .pipe($.sass({
      includePaths: [ './node_modules/bootstrap-sass/assets/stylesheets/' ]
    }))
    .pipe($.postcss([
      autoprefixer({
        browsers: [ 'last 2 versions', '> 5%' ]
      }),
      cssnano({
        zindex: false
      })
    ]))
    .pipe(gulp.dest('./css'));
});

gulp.task('watch', function() {
  gulp.watch('./sass/**/*.scss', ['styles']);
});

gulp.task('default', ['styles', 'watch']);