const isProduction = process.env.NODE_ENV !== 'development';

const gulp = require('gulp');
const livereload = require('gulp-livereload');

gulp.task('watch', () => {
    if (!isProduction) {
        gulp.watch('src/styles/**', ['styles']);
        gulp.watch('src/images/*.svg', ['svg']);
        gulp.watch('src/images/*.png', ['images']);

        const source = [
            'src/**/*',
            'src/.htaccess',
            '!src/scripts/**',
            '!src/styles/**',
            '!src/images/*.svg',
            '!src/images/*.{jpg,jpeg,png,gif}',
        ];

        gulp.watch(source, ['copy']);
        livereload.listen();
    }
});
