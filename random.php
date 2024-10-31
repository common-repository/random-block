<?php
/**
 * Plugin Name: Random block
 * Plugin URI: -
 * Description: It's create custom block for Random block.
 * Author: Chintesh Prajapati
 * Author URI: https://profiles.wordpress.org/chinteshprajapati/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue the block's assets for the editor.
 *
 * wp-blocks:  The registerBlockType() function to register blocks.
 * wp-element: The wp.element.createElement() function to create elements.
 * wp-i18n:    The __() function for internationalization.
 *
 * @since 1.0.0
 */
function rendom_backend_enqueue() {
    wp_enqueue_script(
        'random-backend-script', // Unique handle.
        plugins_url( 'block.build.js', __FILE__ ), // block.js: We register the block here.
        array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor'  ) // Dependencies, defined above.
    );    
    wp_enqueue_style(
        'random', // Unique handle.
        plugins_url( 'random.css', __FILE__ ), // block.js: We register the block here.
        ''// Dependencies, defined above.
    ); 
    wp_enqueue_style( 'random-font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', '', '1.0','' );
}
add_action( 'enqueue_block_editor_assets', 'rendom_backend_enqueue' );
add_action( 'init', 'rendom_backend_enqueue' );