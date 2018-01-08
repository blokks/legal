const gulp = require('gulp');
const del = require('del');

gulp.task('clean', (callback) => {
    const source = ['dist/**/*'];
    del(source).then((paths) => callback());
});
