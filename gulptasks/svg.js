const isProduction = process.env.NODE_ENV !== 'development';

const debug = require('gulp-debug');
const gulp = require('gulp');
const gulpif = require('gulp-if');
const livereload = require('gulp-livereload');
const rev = require('gulp-rev');
const svgmin = require('gulp-svgmin');
const svgsprite = require('gulp-svg-sprite');
const errors = require('../gulperrors');

gulp.task('svg', () => {
    const source = './src/images/*.svg';
    const destination = './dist/images';

    const debugOptions = {
        title: 'SVG:',
        showFiles: false,
    };

    const revOptions = {
        base: './dist',
        merge: true,
    };

    let spriteOptions = {
        svg: {
            xmlDeclaration: false,
            rootAttributes: {
                width: 0,
                height: 0,
                style: 'position:absolute',
            },
        },
        mode: {
            symbol: {
                dest: '.',
                sprite: 'spritesheet.svg',
                example: false,
            },
        },
    };

    let myPlugins = [
        { cleanupIDs: false },
    ];

    return gulp.src(source)
        .pipe(debug(debugOptions))
        .pipe(svgmin({ plugins: [myPlugins] })).on('error', errors)
        .pipe(svgsprite(spriteOptions))
        .pipe(gulpif(isProduction, rev()))
        .pipe(gulp.dest(destination))
        .pipe(gulpif(isProduction, rev.manifest('./dist/rev-manifest.json', revOptions)))
        .pipe(gulpif(isProduction, gulp.dest('./dist')))
        .pipe(livereload());
});
