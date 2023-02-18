

import gulp from 'gulp';
import imagemin from 'gulp-imagemin';
import sass from 'gulp-dart-sass';
import mcss from 'gulp-clean-css';
import mjs from 'gulp-uglify';
import rename from 'gulp-rename';
import mozjpeg  from 'imagemin-mozjpeg';
import gifsicle from 'imagemin-mozjpeg';
import optipng from 'imagemin-optipng';
import svgo from 'imagemin-svgo';




// コンパイル

const CssSass = function() {
  return gulp
 .src('./scss/style.scss')
  .pipe(sass({ outputStyle: 'expanded' }))
    .pipe(gulp.dest('./dist/css'));
};

const WatchSass = function() {
return gulp
.watch('./scss/**/*.scss',CssSass)
};

// js css　圧縮
const MinCss = function() {
  return gulp
  .src('./dist/css/style.css')
  .pipe(mcss())
  .pipe(rename({extname:'.min.css'}))
  .pipe(gulp.dest('./dist/css'))
};

const MinJs = function() {
  return gulp
  .src('./js/main.js')
  .pipe(mjs())
  .pipe(rename({extname:'.min.js'}))
  .pipe(gulp.dest('./dist/js'))
};


// 画像圧縮　関数の定義
const ImgImagemin = function() {
  return gulp
  .src("./img/**") 
    .pipe(imagemin([
      gifsicle({interlaced: true}),
      mozjpeg({quality: 75, progressive: true}),
      optipng({optimizationLevel: 5}),
      svgo({
        plugins: [
          {removeViewBox: true},
          {cleanupIDs: false}
        ]
      })
    ]))
    .pipe(gulp.dest("./dist/image")) 
};
// 処理実行
export default(done) => {
  // CssSass();
  // WatchSass();
  ImgImagemin();
  // MinCss();
  // MinJs();
  done();
}




