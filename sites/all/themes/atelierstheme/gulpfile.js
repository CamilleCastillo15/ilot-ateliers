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



gulp.task('sass:dev', function () {
    gulp.src('./sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({
            importer: importer,
            includePaths: [
                'node_modules/singularitygs/stylesheets/',
                'node_modules/breakpoint-sass/stylesheets/'
            ]
        }).on('error', sass.logError))
        
            .pipe(autoprefixer({
                browsers: ['last 4 version']
            }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./css'))
        .pipe(browserSync.stream())
        //  .pipe(browserSync.reload({stream:true}));

});





gulp.task('sass:watch', function () {
    gulp.watch('./sass/**/*.scss',function() {
        setTimeout(function () {
            gulp.start('sass:dev');
        }, 300);
    } );    
    gulp.watch('./**/*.{php,inc,info,js}', ['reload']);


});

gulp.task('browser-sync', ['sass:dev'], function () {

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
gulp.task('default', ['sass:dev','sass:watch','browser-sync']);