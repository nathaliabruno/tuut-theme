<?php
/**
 * Template padrão apra todas as páginas.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tuut_Theme
 */

get_header(); ?>

<div id="about" class="content">
	<div class="grid-hug">
		<div class="col-5">
		<img src="http://placehold.it/380x350/" alt="arvereses">
		</div>
		<div class="col-7">
		<?php tuut_print_text( 'descricao_empresa' ); ?>
		<p><?php pll_e('Saiba mais sobre:'); ?> <a href="#"><?php pll_e('A Capital'); ?></a> / <a href="#"><?php pll_e('Gestão de Patrimônio'); ?></a></p>
		</div>
	</div>
</div>

<div class="news">
	<div class="content">
		<h2><?php pll_e('Notícias'); ?></h2>

		<?php get_template_part( 'template-parts/content', 'latest' ); ?>

	</div>
</div>

<div id="newsletter">
	<h2><?php pll_e('receba nossa'); ?> <strong><?php pll_e('newsletter'); ?></strong></h2>
</div>

<?php get_footer(); ?>
