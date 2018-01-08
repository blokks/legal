const isProduction = process.env.NODE_ENV === 'production';

const changed = require('gulp-changed');
const debug = require('gulp-debug');
const gulp = require('gulp');
const gulpif = require('gulp-if');
const imagemin = require('gulp-imagemin');
const livereload = require('gulp-livereload');
const rev = require('gulp-rev');

gulp.task('images', () => {
    const source = ['src/images/*.{png,jpg,jpeg,gif}'];
    const destination = 'dist/images';

    const debugOptions = {
        title: 'Images:', 
        showFiles: false,
    };

    const revOptions = { 
        base: './dist', 
        merge: true, 
    };

    return gulp.src(source)
        .pipe(debug(debugOptions))
        .pipe(gulpif(isProduction, imagemin()))
        .pipe(gulpif(isProduction, rev()))
        .pipe(gulp.dest(destination))
        .pipe(gulpif(isProduction, rev.manifest('./dist/rev-manifest.json', revOptions)))
        .pipe(gulpif(isProduction, gulp.dest('./dist')))
        .pipe(livereload());
});
