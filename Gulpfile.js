const gulp = require('gulp')
const sass = require('gulp-sass')
const autoprefixer = require('gulp-autoprefixer')
const uglify = require('gulp-uglify')
const concat = require('gulp-concat')
const babel = require('gulp-babel')
const imagemin = require('gulp-imagemin')
const pngquant = require('imagemin-pngquant')
const webpack = require('webpack-stream')
const webpackconfig = require('./webpack.config.js')
const watch = require('gulp-watch')
const elixir = require('laravel-elixir')
const shell = require('gulp-shell')
const stripDebug = require('gulp-strip-debug')
require('laravel-elixir-livereload')
// require('laravel-elixir-vue-2')
//BS COMMENT
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
var Task = elixir.Task
elixir.extend('speak', function (message) {
  new Task('speak', function () {
    return gulp.src('').pipe(shell('say ' + message))
  })
})

elixir.extend('react', function (message) {
  new Task('react', function () {
    return gulp.src('client/')
           .pipe(webpack(webpackconfig))
        //    .pipe(stripDebug())
           .pipe(gulp.dest('./public/js/components'))
  }).watch('./resources/assets/js/components/**/**/*')
})

elixir.extend('scripts', function (message) {
  new Task('scripts', function () {
    return gulp.src([
      'resources/assets/js/components/related-slider/*.js'
    ])
    .pipe(babel({
      presets: ['es2015']
    }))
            //  .pipe(concat('all.js'))
            //  .pipe(uglify())
    .pipe(
      gulp.dest('./public/js/components'))
  }).watch('./resources/assets/js/components/**/*')
})

elixir(mix => {
  mix.sass('app.scss').sass('admin.scss')
//   .scripts()
  // .react()
  .version([
    'css/app.css',
    // 'js/components/adminOrder.js',
    // 'js/components/app.js',
    // 'js/components/categoriesQuickInfo.js',
    // 'js/components/headerSearch.js',
    // 'js/components/homepageTabs.js',
    // 'js/components/index.js',
    // 'js/components/lensOptions.js',
    // 'js/components/peopleWhoViewed.js',
    // 'js/components/recentlyViewed.js',
    // 'js/components/related-slider.js',
    // 'js/components/relatedSliderView.js',
    // 'js/components/tryon.js',
    // 'js/components/vendor.js',
    // 'js/mobile-menu.js'
    ])
  .livereload()

})
