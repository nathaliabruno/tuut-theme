<?php 

/*
 * Itera e imprime Users. 
 * Adiciona DIV caso slide seja TRUE
 ................................................. */

function tuut_team_members($slide = false) {

$authors 		= get_users();
$main_author 	= get_queried_object();

foreach($authors as $author) {

	$usr_pic = get_field('foto', 'user_' . $author->ID);

	// "Não sou um advogado da RPC então não printe minha foto"
	if ( ($author->ID != 1) && ($author->ID !== $main_author->ID) ):
	//&& ($author->ID != 13)
		if ($slide) {
			echo '<div>';
		}

		echo '<figure';

		if (!$slide) {
			echo ' class="col-md-3"';
		}
		
		echo '>';

		echo '<a href="' . get_bloginfo('wpurl') . '/?author=' . $author->ID . '">';
		echo '<img src="' . $usr_pic . '">';
		echo "</a>";
		echo '<figcaption>';
		echo '<a href="' . get_bloginfo('wpurl') . '/?author=' . $author->ID . '">';
		the_author_meta('first_name', $author->ID);
		echo ' ';
		the_author_meta('last_name', $author->ID);
		echo "</a>";
		//echo '<p>' . $usr_role . '</p>';
		echo "</figcaption>";
		echo "</figure>";

		if ($slide) {
			echo '</div>';
		}
	endif;
	} // foreach
}