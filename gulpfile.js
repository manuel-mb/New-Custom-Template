var gulp = require('gulp');
var option = process.argv[4];
var sourcemaps = require('gulp-sourcemaps');
const sass = require('gulp-sass')(require('sass'));


gulp.task('scss', async function () {
  gulp.src('./scss/*.scss')
  	.pipe(sourcemaps.init())
    .pipe(sass({outputStyle: 'compressed', follow: true}).on('error', sass.logError))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css/'));
});

gulp.task('watch', async function () {
  gulp.watch('./scss/*.scss', {}, gulp.series('scss'));
});
