const isProduction = process.env.NODE_ENV !== 'development';

const argv = require('yargs').argv;
const debug = require('gulp-debug');
const gulp = require('gulp');
const gulpif = require('gulp-if');
const info = require('../package.json');
const livereload = require('gulp-livereload');
const plumber = require('gulp-plumber');
const postcss = require('gulp-postcss');
const rev = require('gulp-rev');
const sourcemaps = require('gulp-sourcemaps');
const errors = require('../gulperrors');

gulp.task('styles', () => {
    const debugOptions = {
        title: 'CSS:',
        showFiles: false,
    };

    const revOptions = {
        base: './dist',
        merge: true,
    };

    const CSSNextOptions = {
        browsers: ['> 1%', 'last 2 versions', 'Firefox ESR', 'Opera 12.1'],
    };

    const assetOptions = {
        loadPaths: [
            'src/styles/',
        ],
    };

    const sortingOptions = {
        'sort-order': 'csscomb',
        'empty-lines-between-children-rules': 0,
        'empty-lines-between-media-rules': 0,
        'empty-lines-before-comment': 0,
        'preserve-empty-lines-between-children-rules': false,
    };

    const fontMagicianOptions = {
        formats: 'woff',
    };

    let CSSNanoOptions = {
        autoprefixer: false,
        zindex: false,
    };

    if (!isProduction) {
        CSSNanoOptions = Object.assign({}, CSSNanoOptions, {
            core: false,
            discardEmpty: false,
            reduceIdents: false,
        });
    }

    const processors = [
        require('precss'),
        require('postcss-reporter'),
        require('postcss-calc'),
        require('postcss-easings'),
        require('postcss-animation'),
        require('postcss-short'),
        require('postcss-responsive-type'),
        require('postcss-cssnext')(CSSNextOptions),
        require('postcss-assets')(assetOptions),
        require('postcss-sorting')(sortingOptions),
        require('cssnano')(CSSNanoOptions),
    ];

    const source = ['src/styles/screen.css'];
    const destination = 'dist/styles';

    return gulp.src(source)
        .pipe(debug(debugOptions))
        .pipe(gulpif(!isProduction, sourcemaps.init()))
        .pipe(postcss(processors)).on('error', errors)
        .pipe(gulpif(!isProduction, sourcemaps.write()))
        .pipe(gulpif(isProduction, rev()))
        .pipe(gulp.dest(destination))
        .pipe(gulpif(isProduction, rev.manifest('./dist/rev-manifest.json', revOptions)))
        .pipe(gulpif(isProduction, gulp.dest('./dist')))
        .pipe(livereload());
});
