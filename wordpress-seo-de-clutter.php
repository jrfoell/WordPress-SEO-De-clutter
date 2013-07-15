<?php
/*
Plugin Name: WordPress SEO De-clutter
Description: De-clutters WordPress SEO additions: Removes SEO columns from posts/pages
Version: 1.0
Author: Justin Foell
Author URI: http://www.foell.org/justin/
*/

function wpseodeclutter_remove_columns( $columns ) {
	foreach ( $columns as $index => $title ) {
		if ( strpos( $index, 'wpseo-' ) === 0 )
			unset( $columns[$index] );
	}
	return $columns;
}
add_filter( 'manage_edit-post_columns', 'wpseodeclutter_remove_columns' );
add_filter( 'manage_edit-page_columns', 'wpseodeclutter_remove_columns' );
