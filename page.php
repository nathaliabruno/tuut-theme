<?php
/**
 * Template padrão apra todas as páginas.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tuut_Theme
 */

get_header(); ?>

  <div id="principal" class="container">
    <main class="row" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content', 'page' ); ?>
      <?php endwhile; ?>

    </main>
  </div>

<?php get_footer(); ?>
