const isProduction = process.env.NODE_ENV !== 'development';

const debug = require('gulp-debug');
const gulp = require('gulp');
const gulpif = require('gulp-if');
const revReplace = require("gulp-rev-replace");

gulp.task('revision', () => {
    const source = 'dist/**/*.{css,blade.php}';
    const destination = 'dist';

    const debugOptions = {
        title: 'Revision:', 
        showFiles: false,
    };

    const revReplaceOptions = {
        manifest: gulp.src('dist/rev-manifest.json'),
        replaceInExtensions: ['.php', '.css'],
    };

    gulp.src(source)
        .pipe(debug(debugOptions))
        .pipe(gulpif(isProduction, revReplace(revReplaceOptions)))
        .pipe(gulp.dest(destination));
});
