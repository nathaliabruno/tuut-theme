var gulp        	= require('gulp');
var browserSync     = require('browser-sync');
var reload          = browserSync.reload;
var sass            = require('gulp-sass');
var autoprefixer    = require('gulp-autoprefixer');
var concat          = require('gulp-concat');
var uglify          = require('gulp-uglify');
var imagemin		= require('gulp-imagemin');
var pngquant		= require('imagemin-pngquant');
 
gulp.task('imagemin', function () {
	return gulp.src('src/images/**/*')
		.pipe(imagemin({
			progressive: true,
			svgoPlugins: false,
			use: [pngquant()]
		}))
		.pipe(gulp.dest('dist/images'));
});
 
// Inicia o servidor
gulp.task('browser-sync', function() {
    // Watch nos arquivos
    var files = [
    './src/scss/**/*.scss',
    './src/js/**/*.js',
    './**/*.php'
    ];
 
    //Inicia o browserSync
    browserSync.init(files, {
    // O proxy eh usado pq a gente ja tem um servidor
    proxy: "localhost:8888/036-rpc/",
    notify: false
    });
});
 
// Task pro SASS, vai rodar qualquer alteracao no SCSS e sincronizar com o browserSync
// atualizando automaticamente os browsers

gulp.task('sass', function () {
    return gulp.src('./src/scss/**/*.scss')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer(['last 2 versions', '> 5%', 'Firefox ESR']))
        .pipe(gulp.dest('./dist/css/'))
        .pipe(browserSync.stream());
});

//Task JS

gulp.task('concat', function() {
  return gulp.src(
        [
            './src/vendor/waypoints/lib/jquery.waypoints.js',
            './src/vendor/jquery-drawsvg/public/jquery.drawsvg.min.js',
            './src/vendor/slick-carousel/slick/slick.js',
            './src/js/*.js'
        ]
    )
    .pipe(concat('tuut.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./dist/js'));
});

 
// Task padrao pra rodar o `gulp`
gulp.task('default', ['sass', 'concat', 'browser-sync'], function () {
    gulp.watch("./src/scss/**/*.scss", ['sass']);
    gulp.watch("./src/js/**/*.js", ['concat']);
});
