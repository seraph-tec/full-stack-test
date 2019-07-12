var gulp    = require('gulp'),
    sass    = require('gulp-sass'),
    concat  = require('gulp-concat'),
    terser  = require('gulp-terser'),
    rename  = require('gulp-rename');

/** 
 * 
Caminhos de diretórios e arquivos que o Gulp vai tratar
*/
var paths = {
  styles: {
    src: ['./node_modules/bootstrap/scss/bootstrap.scss', './node_modules/@fortawesome/fontawesome-free/scss/fontawesome.scss' , './scss/*.scss'],
    src_bootstrap: './node_modules/bootstrap/scss/bootstrap.scss',
    src_main: './scss/*.scss',
    dest: './dist/css/'
  },
  scripts: {
    src: ['./node_modules/jquery/dist/jquery.min.js' , './node_modules/popper.js/dist/umd/popper.min.js' , './node_modules/bootstrap/dist/js/bootstrap.min.js', './node_modules/jquery-mask-plugin/dist/jquery.mask.min.js' ,'./scripts/*.js'],
    dest: './dist/js/'
  },
  indexFile: {
    src: './index.php',
    dest: './dist/'
  }
};

/**
 * 
Função responsável por compilar o SASS, concatenar e mover para a pasta final 
*/
function styles() {

  return gulp
    .src(paths.styles.src, {
      sourcemaps: true
    })
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(concat('main.min.css'))
    .pipe(gulp.dest(paths.styles.dest));
}

/**
 * Função responsável por concatenar, minificar e distribuir os arquivos Javascript
 */
function scripts() {
  return gulp
    .src(paths.scripts.src, {
        sourcemaps: true
    })
    .pipe(terser())
    .pipe(concat('main.min.js'))
    .pipe(gulp.dest(paths.scripts.dest));
}

/**
 * Função que copia o arquivo index.php da raiz para a pasta /dist/ quando modificado
 */
function moveIndex(){
  return gulp.src(paths.indexFile.src)
      .pipe(gulp.dest(paths.indexFile.dest));
}

/**
 * Listener para mudanças e automações
 */
function watch() {
  gulp
      .watch(paths.scripts.src, scripts);
  gulp
    .watch(paths.styles.src, styles);
  gulp
    .watch(paths.indexFile.src , moveIndex);
}

var build = gulp.parallel(styles, scripts, watch, moveIndex);

gulp
  .task(build);
gulp
  .task('default', build);