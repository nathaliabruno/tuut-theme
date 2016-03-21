<?php
/**
 * Miolo para exibir o conteúdo das páginas.
 * Nota: Requisitado pelo template page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tuut_Theme
 */

?>

<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="page-header">
        <?php if( has_post_thumbnail() ): the_post_thumbnail(); endif; ?>
        <h1><?php the_title(); ?></h1>
    </header>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>
</article> 