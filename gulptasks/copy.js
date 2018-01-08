const isProduction = process.env.NODE_ENV !== 'development';

const changed = require('gulp-changed');
const gulp = require('gulp');
const gulpif = require('gulp-if');
const gulpIgnore = require('gulp-ignore');
const livereload = require('gulp-livereload');

gulp.task('copy', () => {
    const source = [
        'src/**/*',
        'src/.htaccess',
        '!src/config.yml',
        '!src/config-example.yml',
        '!src/images/*.svg',
        '!src/scripts/index.js',
        '!src/scripts/app/**/*',
        '!src/styles/**/*',
        'src/scripts/vendor/**/*'
    ];

    const destination = 'dist';

    return gulp.src(source)
        .pipe(changed(destination))
        .pipe(gulp.dest(destination))
        .pipe(livereload());
});
