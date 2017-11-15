<?php
function case_focus_shortcode( $atts ) {
	include(locate_template('templates/case-focus-startsida.php'));
}
add_shortcode( 'case_focus', 'case_focus_shortcode' );

function case_loop_shortcode( $atts ) {
	include(locate_template('templates/work-loop-startsida.php'));
}
add_shortcode( 'case_loop', 'case_loop_shortcode' );