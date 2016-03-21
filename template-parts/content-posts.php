<?php
/**
 * Miolo para exibir o conteúdo da página de posts.
 * Nota: Requisitado pelo template page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tuut_Theme
 */

?>

<header class="page-header">
	<?php the_title( '<h1>', '</h1>' ); ?>
</header>

<div class="article-content">
<?php 

	$paged 		= (get_query_var( 'paged' ))? get_query_var('paged') : 1;
	$is_article = is_page('article');
	$author_id  = $post->post_author; 
	$post_page  = (is_page('artigos'))? 'artigo' : 'noticia';

	$args = array(
		'meta_key'      => 'selecione',
		'meta_value'    => $post_page,
		'meta_compare'  => '=',
		'post_per_page' => 4,
    	'paged'         => $paged,
    	'ignore_sticky_posts' => true
	);

	$tuut_custom_query = new WP_Query($args); 

	if ($tuut_custom_query-> have_posts()) : 
		while ($tuut_custom_query->have_posts()) : $tuut_custom_query->the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="article-header">  
			 
			 <?php if (has_post_thumbnail()): the_post_thumbnail(); endif; ?>

				<div class="post-meta">
					<?php the_category(', '); ?> 
					<?php if ( $post_page == 'artigo' ): ?>
					—
					<a href="<?php echo get_author_posts_url( $author_id ); ?>">
						<?php echo get_the_author_meta('first_name') . " " . get_the_author_meta('last_name'); ?>
					</a>
					<?php endif; ?>

					 — <?php the_date(); ?>
				</div>
				<?php the_title('<h2 class="h2">', '</h2>'); ?> 
			</header>

			<div class="article-content">
			   <?php the_excerpt(); ?>
			</div>
			<hr>

		</article>
	<?php 
		endwhile; 
		wp_reset_postdata();

		$big = 999999999; // need an unlikely integer

		echo paginate_links( array(
			'base' 		=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' 	=> '?paged=%#%',
			'current' 	=> max( 1, get_query_var('paged') ),
			'total' 	=> $tuut_custom_query->max_num_pages
		) );


	else: ?>
		
		<h1>Nenhum artigo ou noticia encontrado.</h1>
	
	<? endif; ?>
	
</div>