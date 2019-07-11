var gulp    = require('gulp'),
    sass    = require('gulp-sass'),
    concat  = require('gulp-concat'),
    terser  = require('gulp-terser'),
    rename  = require('gulp-rename');

var paths = {
  styles: {
    src: ['./node_modules/bootstrap/scss/bootstrap.scss','./scss/*.scss'],
    src_bootstrap: './node_modules/bootstrap/scss/bootstrap.scss',
    src_main: './scss/*.scss',
    dest: './dist/css/'
  },
  scripts: {
    src: ['./node_modules/jquery/dist/jquery.min.js' , './node_modules/popper.js/dist/umd/popper.min.js' , './node_modules/bootstrap/dist/js/bootstrap.min.js', './scripts/*.js'],
    dest: './dist/js/'
  }
};

function styles() {

  return gulp
    .src(paths.styles.src, {
      sourcemaps: true
    })
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(concat('main.min.css'))
    .pipe(gulp.dest(paths.styles.dest));
}

function scripts() {
  return gulp
    .src(paths.scripts.src, {
        sourcemaps: true
    })
    .pipe(terser())
    .pipe(concat('main.min.js'))
    .pipe(gulp.dest(paths.scripts.dest));
}

function watch() {
  gulp
      .watch(paths.scripts.src, scripts);
  gulp
    .watch(paths.styles.src, styles);
}

var build = gulp.parallel(styles, scripts, watch);

gulp
  .task(build);
gulp
  .task('default', build);