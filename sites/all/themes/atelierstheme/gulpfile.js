'use strict';
var browserSync = require('browser-sync');
var importer = require('node-sass-globbing');
var gulp = require('gulp');
var sass = require('gulp-sass');
var compass = require('gulp-compass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var handlebars = require('gulp-handlebars');
var wrap = require('gulp-wrap');
var declare = require('gulp-declare');
var concat = require('gulp-concat');

//var breakpoints = require('breakpoints');

gulp.task('sass:prod', function () {
  gulp.src('./sass/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
       browsers: ['last 2 version']
    }))
    .pipe(gulp.dest('./css'));
});

gulp.task('sass:dev', function () {
  gulp.src('./sass/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({
            importer: importer,
            includePaths: [
                'node_modules/singularitygs/stylesheets/',
                'node_modules/breakpoint-sass/stylesheets/'
            ]}).on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 4 version']
    }))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./css'))
    .pipe(browserSync.stream()))
  //  .pipe(browserSync.reload({stream:true}));

});


gulp.task('templates', function(){
  gulp.src('hbs/*.hbs')
    .pipe(handlebars())
    .pipe(wrap('Handlebars.template(<%= contents %>)'))
    .pipe(declare({
      namespace: 'groupup.templates',
      noRedeclare: true, // Avoid duplicate declarations
    }))
    .pipe(concat('templates.js'))
    .pipe(gulp.dest('js/'));
});

gulp.task('sass:watch', function () {
    gulp.watch('./sass/**/*.scss', ['sass:dev']);

    gulp.watch('./**/*.{php,inc,info,js}',['reload']);
    gulp.watch('./hbs/**/*.hbs',['templates','reload']);

});

gulp.task('browser-sync',['sass:dev'], function() {

 browserSync.init({
   // Change as required
   proxy: "",
   socket: {
       // For local development only use the default Browsersync local URL.
       domain: 'ilotateliers.dinde.pro:3000'
       // For external development (e.g on a mobile or tablet) use an external URL.
       // You will need to update this to whatever BS tells you is the external URL when you run Gulp.
       //domain: '192.168.0.13:3000'
   }
 });
});


gulp.task('reload', function () {
    browserSync.reload();
});
gulp.task('default', ['templates','browser-sync','sass:watch',]);
