<?php
/**
 * Funções e definições do tema.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tuut_Theme
 */

// Quer uma morte lenta e dolorosa? remova a linha abaixo

add_filter('show_admin_bar', '__return_false');

/*
 * Define funções básicas do tema.
 ................................................. */

if ( ! function_exists( 'tuut_setup' ) ) :

function tuut_setup() {

	load_theme_textdomain( 'tuut', get_template_directory() . '/source/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array('search-form','comment-form','comment-list','gallery','caption',) );

	register_nav_menus( array(
		'principal' => esc_html__( 'Menu Principal', 'tuut' ),
	) );
}
endif; // tuut_setup
add_action( 'after_setup_theme', 'tuut_setup' );



/*
 * Define largura máxima de embeds.
 ................................................. */

function tuut_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tuut_content_width', 640 );
}
add_action( 'after_setup_theme', 'tuut_content_width', 0 );



/*
 * Define áreas padrão de Widgets.
 ................................................. */

function tuut_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tuut' ),
		'id'            => 'main-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tuut_widgets_init' );



/*
 * Carrega os estilos e scripts padrão do tema.
 ................................................. */

function tuut_scripts() {

	// Carrega o CSS e JS (minificado) com dependências declaradas pelo Bower através do Grunt
	wp_enqueue_style( 'tuut-style', get_stylesheet_uri() );
	wp_enqueue_script( 'tuut-default', get_template_directory_uri() . '/dist/js/tuut.min.js', array('jquery'), '1.11.2', true );
}
add_action( 'wp_enqueue_scripts', 'tuut_scripts' );



/*
 * Muda o modelo de Excerpt.
 ................................................. */

function tuut_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . 'Leia Mais' . '</a>';
}
add_filter( 'excerpt_more', 'tuut_excerpt_more' );


/*
 * Raio debugatizadoooooor
 ................................................. */

function debugWP($data, $php = '') {
    if ($php === 'php') {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        die;
    } else {
        if(is_array($data) || is_object($data)) {
        echo("<script>console.log('PHP: ".json_encode($data)."');</script>");
        } else {
            echo("<script>console.log('PHP: ".$data."');</script>");
        }
    }
}



/*
 * Carrega arquivos a serem incorporados.
 * Útil para deixar o código enxuto.
 ................................................. */

require get_template_directory() . '/includes/acf-call.php';
require get_template_directory() . '/includes/users.php';
