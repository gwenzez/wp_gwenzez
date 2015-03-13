 var gulp = require('gulp');
 var sass = require('gulp-sass');

 gulp.task('styles',function(){
   gulp.src('sass/*.scss') // Pull everything out of that file
     .pipe(sass()) // pipe it through the sass converter - the sass() function comes from the above sass variable
     .pipe(concat('style.css')) // concat every file into one
     .pipe(gulp.dest('styles/')) // finally put the file into the styles directory
 });