const isProduction = process.env.NODE_ENV !== 'development';

const browserify = require('browserify');
const buffer = require('vinyl-buffer');
const debug = require('gulp-debug');
const gulp = require('gulp');
const gulpif = require('gulp-if');
const envify = require('envify/custom');
const livereload = require('gulp-livereload');
const rev = require('gulp-rev');
const sourcestream = require('vinyl-source-stream');
const uglify = require('gulp-uglify');
const watchify = require('watchify');
const errors = require('../gulperrors');

gulp.task('scripts', () => {
    const source = '../src/scripts/index.js';
    const destination = 'dist/scripts';

    const debugOptions = {
        title: 'CSS:', 
        showFiles: false,
    };

    const revOptions = { 
        base: './dist', 
        merge: true, 
    };

    let bundler = browserify({
        basedir: __dirname,
        entries: source,
        debug: !isProduction,
        cache: {},
        packageCache: {},
        fullPaths: !isProduction,
    });

    bundler.transform('envify', {
        _: 'purge',
        global: true,
        NODE_ENV: process.env.NODE_ENV,
    });

    const bundle = () => {
        return bundler.bundle().on('error', errors)
            .pipe(sourcestream('index.js'))
            .pipe(buffer())
            .pipe(debug(debugOptions))
            .pipe(gulpif(isProduction, uglify({ mangle: false })))
            .pipe(gulpif(isProduction, rev()))
            .pipe(gulp.dest(destination))
            .pipe(gulpif(isProduction, rev.manifest('./dist/rev-manifest.json', revOptions)))
            .pipe(gulpif(isProduction, gulp.dest('./dist')))
            .pipe(livereload());
    };

    if (!isProduction) {
        watchify(bundler, watchify.args).on('update', () => bundle());
    }

    return bundle();
});
