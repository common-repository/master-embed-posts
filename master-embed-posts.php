<?php
/**
 * Plugin Name:       Master Embed Posts
 * Description:        The Embed block that help you to embed different posts into the current post.
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            WPMaster
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       master-embed-posts
 *
 * @package           create-block
 */

function wpm_master_embed_posts_init() {
	if ( current_theme_supports( 'custom-spacing' ) ) {
		add_theme_support( 'custom-spacing' );
	}
	if ( current_theme_supports( 'custom-line-height' ) ) {
		add_theme_support( 'custom-line-height' );
	}
	
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'wpm_master_embed_posts_init' );
