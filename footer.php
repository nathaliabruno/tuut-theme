<?php
/**
 * Template para o footer.
 *
 * Inclui a tag de fechamento (declarada em header.php) da <div> principal (wrapper) do site.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tuut_Theme
 */

?>

	<footer id="socket" role="contentinfo">
		<div class="content" >
			<div class="grid-hug">
				<div class="col-3">
					<h3><?php pll_e('Sobre a Capital'); ?></h3>
					<?php tuut_print_text('sobre_a_capital'); ?>
				</div>
				<div class="col-3">
					<h3><?php pll_e('Fale conosco'); ?></h3>
					<p><?php pll_e('Mensagem ou dúvida?'); ?></p>
					<p><a href="#"><?php pll_e('Entre em contato'); ?></a></p>
				</div>
				<div class="col-3">
					<h3><?php pll_e('Rio de Janeiro'); ?></h3>
					<address>
						<p><?php pll_e('Rua Visconde de Pirajá 430, Sl. 904, Ipanema'); ?></p>
						<a href="#"><?php pll_e('Tel 55 (21) 3509-2150'); ?></a>
						<a href="#"><?php pll_e('Fax 55 (21) 3509-2151'); ?></a>
					</address>
				</div>
				<div class="col-3">
					<h3><?php pll_e('São Paulo'); ?></h3>
					<address>
						<p><?php pll_e('Rua Dr. Alceu de Campos Rodrigues, 46/92, Vila Olímpia'); ?></p>
						<a href="#"><?php pll_e('Tel 55 (11) 3846-4600'); ?></a>
						<a href="#"><?php pll_e('Fax 55 (11) 3849-4373'); ?></a>
					</address>
				</div>
			</div>
			<div id="disclaimer" class="content">
				<?php tuut_print_text('disclaimer'); ?>
			</div>
		</div>
		<div class="content">
			<div class="grid-hug">
				<div class="col-6">
					© <?php pll_e('Todos os direitos reservados para Capital'); ?>
				</div>
				<div id="announcements" class="col-6">
					<img src="http://placehold.it/200x80/" alt="ANBIMA">
					<img src="http://placehold.it/200x80/" alt="Como investir?">
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- /.content -->

<?php wp_footer(); ?>

</body>
</html>
