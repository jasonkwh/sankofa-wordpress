<?php
/**
 * @package Sankofa Version
 * @version 1.0.11
 */
/*
Plugin Name: Sankofa Version
Plugin URI: https://github.com/jasonkwh
Description: To display the version of Sankofa-wordpress...
Author: Jason Huang
Version: 1.0.11
Author URI: https://github.com/jasonkwh
*/

function hello_dolly_get_lyric() {
	/** These are the lyrics to Hello Dolly */
	$lyrics = "Sankofa-wordpress v1.0.11, by Jason Huang";

	// Here we split it into lines
	$lyrics = explode( "\n", $lyrics );

	// And then randomly choose a line
	return wptexturize( $lyrics[ mt_rand( 0, count( $lyrics ) - 1 ) ] );
}

// This just echoes the chosen line, we'll position it later
function hello_dolly() {
	$chosen = hello_dolly_get_lyric();
	echo "<p id='dolly'>$chosen</p>";
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'hello_dolly' );

// We need some CSS to position the paragraph
function dolly_css() {
	// This makes sure that the positioning is also good for right-to-left languages
	$x = is_rtl() ? 'left' : 'right';

	echo "
	<style type='text/css'>
	#dolly {
		float: $x;
		padding-$x: 15px;
		padding-top: 5px;		
		margin: 0;
		font-size: 11px;
	}
	</style>
	";
}

add_action( 'admin_head', 'dolly_css' );

?>