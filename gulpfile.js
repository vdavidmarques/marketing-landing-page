const gulp = require('gulp');
const cleanCSS = require('gulp-clean-css');
const terser = require('gulp-terser');
const sass = require('gulp-dart-sass')(require('sass'));

// Tarefa para compilar o Sass e minificar o CSS
gulp.task('styles', function() {
    return gulp.src('src/sass/**/*.scss') // Caminho dos arquivos Sass
        .pipe(sass().on('error', sass.logError))
        .pipe(cleanCSS())
        .pipe(gulp.dest('dist/css')); // Pasta de destino dos arquivos minificados
});

// Tarefa para minificar JavaScript
gulp.task('scripts', function() {
    return gulp.src('src/js/**/*.js') // Caminho dos arquivos JavaScript
        .pipe(terser())
        .pipe(gulp.dest('dist/js')); // Pasta de destino dos arquivos minificados
});

// Tarefa para observar mudanças nos arquivos Sass e JS
gulp.task('watch', function() {
    gulp.watch('src/sass/**/*.scss', gulp.series('styles'));
    gulp.watch('src/js/**/*.js', gulp.series('scripts'));
});


// Tarefa padrão para rodar as tarefas styles e scripts
gulp.task('default', gulp.parallel('styles', 'scripts'));
