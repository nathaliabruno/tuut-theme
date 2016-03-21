<?php

// Itera e imprime campo repeater do ACF

function tuut_print_info( $field_acf, $subfield_acf, $wrapper, $class = NULL) {

	$tuut_field 	= get_field( $field_acf );
	$tuut_subfield  = '';

    if( $tuut_field ): while( have_rows( $field_acf ) ): the_row();

		$tuut_subfield = get_sub_field( $subfield_acf );

	if( isset($wrapper) ) {
		echo '<' . $wrapper . ' class="' . $class . '">' . $tuut_subfield . '</' . $wrapper . '>';
	}

	endwhile; endif;
}

