<?php
/**
 * Miolo para exibir o conteúdo do single.
 * Nota: Requisitado pelo template single.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tuut_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="single-header">
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header>

	<?php the_content(); ?>

</article>
