<?php

/**
 * Plugin Name: Gutenberg Block
 * Author: Antonio
 * Version: 1.0.0
 */

 function loadScript(){
    wp_enqueue_script(
        'new-script',
        plugin_dir_url(__FILE__) . 'block.js',
        [ 'wp-blocks', 'wp-element', 'wp-i18n' ],
        true
    );
 }

 add_action('enqueue_block_editor_assets','loadScript');