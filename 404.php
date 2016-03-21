<?php
/**
 * The template para erros 404 (não encontrado).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Tuut_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'tuut' ); ?></h1>
				</header>

				<div class="page-content">
					<p><?php esc_html_e( 'Não . Talvez fazer uma pesquisa ou acessar algum dos links abaixo ajude.', 'tuut' ); ?></p>

					<?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( tuut_categorized_blog() ) : // Só mostra o Widget se existir mais de uma categoria ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'tuut' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

					<?php
						$archive_content = '<p>' . sprintf( esc_html__( 'Tente encontrar algo no arquivo mensal. %1$s', 'tuut' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div>
			</section>

		</main>
	</div>

<?php get_footer(); ?>
