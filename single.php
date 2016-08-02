<?php
/**
 * Template para todas as páginas Single.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Tuut_Theme
 */

get_header(); ?>

  <div id="principal" class="container">
    <main id="main" class="row" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content', 'single' ); ?>

      <?php the_post_navigation(); ?>

    <?php endwhile; ?>

    </main>
  </div>

<?php get_footer(); ?>
