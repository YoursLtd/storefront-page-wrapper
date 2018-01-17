<?php
/*
Plugin Name: Storefront Page Wrapper
Plugin URI: https://github.com/YoursLtd/storefront-page-wrapper
Author: JointByte - Anthony Iacono
Author URI: http://yoursltd.com
Version: 1.0
Text Domain: storefront-page-wrapper
*/

add_action('storefront_content_top', 'storefront_page_wrapper_render_open', 99);
add_action('get_footer', 'storefront_page_wrapper_render_close', -99);

function storefront_page_wrapper_render_open() {
	echo("<div class=\"storefront-page-wrapper\">");
}

function storefront_page_wrapper_render_close() {
	echo("</div><!-- .storefront-page-wrapper -->\n");
}