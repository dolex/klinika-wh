var gulp = require('gulp');
var stylus = require('gulp-stylus'); // препроцессор stylus для стилей css
var watch = require('gulp-watch'); // для слежения изменения в файлах
var html = require('gulp-html'); // плагин gulp для проверки HTML файлов
var plumber = require('gulp-plumber');  // не совсем понятно что он делает =)
var ftp = require('gulp-ftp'); // для фтп загрузки файлов
var csso = require('gulp-csso'); // для оптимизации css файлов (и их минимизации)
var tinypng = require('gulp-tinypng'); // для сжатия изображений
var browserSync = require('browser-sync').create();  // для перезагрузки страницы, после компиляции
var htmlInjector = require("bs-html-injector"); // изменения (на лету) в html файлах без перезагрузки страницы 

browserSync.use(htmlInjector, {
  files: "index.html"
});

gulp.task('styles', function () {
     gulp.src('./project/style/style.styl')
     .pipe( stylus().on( 'error', function( error )
     {
       console.log( error );
     } )
   )
      .pipe(stylus())
      .pipe(gulp.dest('./'))
      .pipe(browserSync.reload({
        stream: true
    }))
});

  gulp.task('watch', function () {
    gulp.watch('./project/style/*.styl', ['styles']);
    gulp.watch('index.html', ['html']);
    gulp.watch('./*.php', ['php']);
  });

    gulp.task('php', function () { 
    return gulp.src('./**/*.php')
    .on('end', browserSync.reload);
      // stream: true
  });

  gulp.task('ftp', function () {
    return gulp.src('src/**/**/*')
        .pipe(ftp({
            host: '',
            user: '',
            pass: '',
            remotePath: ''
        }));

        return gulp.src( globs, { base: '.', buffer: false } )
        .pipe( conn.newer( 'src/**/*' ) ) // загружать только новые файлы из каталога
        .pipe( conn.dest( 'src/**/*' ) );

});

gulp.task('csso', function () {
  return gulp.src('./style.css')
      .pipe(csso({
          restructure: true,
          sourceMap: true,
          debug: true
      }))
      .pipe(gulp.dest('./src'));
});

  gulp.task('html', function () { 
    return gulp.src('index.html')
    .pipe(browserSync.reload({
      stream: true
    }))
  });

  // аккаунт для ключа VlENmNANknE3lfA6F0CMhEs2VIvLz-B1 (arturseo@yandex.ru)

  gulp.task('tinypng', function () {
    gulp.src('src/**') // откуда брать картинки
        .pipe(tinypng('VlENmNANknE3lfA6F0CMhEs2VIvLz-B1'))  // тут прописываем ключ
        .pipe(gulp.dest('result-image-optimizer/')); // куда грузить сжатые картинки
});


  gulp.task('browser-sync', function() {
    browserSync.init({
        // server: {
        //     baseDir: "./"
        // },
        proxy: {
          target: "http://klinika-wh2017.ru",
          ws: true
      },
        // proxy: "http://klinika-wh2017.ru/",
        notify: false
    });
});

  gulp.task('default', ['styles', 'watch', 'html', 'php', 'browser-sync']);
  gulp.task('gulp-ftp', ['ftp']);
  gulp.task('gulp-csso', ['csso']);
  gulp.task('gulp-tinypng', ['tinypng']);