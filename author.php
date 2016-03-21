<?php
/**
 * Template padrão apra todas as páginas.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tuut_Theme
 */

get_header(); 

$author 	  = get_queried_object();
$first_name   = $author->first_name;
$last_name 	  = $author->last_name;
$author_photo = get_field('foto',$author);
$author_bio   = get_field('formacao',$author);
?>

<main id="intern" class="wrapper" role="main">

	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
	<?php endwhile; endif; ?>

	<article id="author-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="author-header">
			<img src="<?php echo $author_photo; ?>" alt="<?php echo $first_name . ' ' . $last_name; ?>">
		</header>

		<div class="author-content">
		</div>
	</article> 
	<hr>
	<div class="team-slide">
		<?php tuut_team_members('slide'); ?>
	</div>
</main>

<?php get_footer(); ?>