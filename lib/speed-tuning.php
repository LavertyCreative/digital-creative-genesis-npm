<?php
/**
 * Digital Creative Genesis.
 *
 * This file adds speed tuning functions to the Digital Creative Genesis Theme.
 *
 * @package Digital Creative Genesis
 * @author  Laverty Creative
 * @license GPL-2.0+
 * @link    https://lavertycreative.com/
 */

add_filter( 'script_loader_tag', 'js_defer_attr', 10 );
/**
 * Function to add defer to all scripts
 *
 * @param string $tag All script tags.
 */
function js_defer_attr( $tag ) {
	// Add async to all remaining scripts.
	if ( ! is_admin() ) {
		return str_replace( ' src', ' defer="defer" src', $tag );
	} else {
		return $tag;
	}
}
