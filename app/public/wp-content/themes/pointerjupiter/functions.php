<?php
/**
 * PJ functions and definitions
 */
if(!function_exists('pj_setup')){

    function pj_setup(){
        add_theme_support('automatic-feed-link');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-background', apply_filters('pj_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));


        add_theme_support( 'html5', array( 
            'comment-list', 
            'comment-form', 
            'search-form', 
            'gallery', 
            'caption',
            'style', 
            'script' )
         );


        add_theme_support( 'customize-selective-refresh-widgets' );
         
        add_theme_support( 'custom-logo', array(
            'height'      => 60,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array( 'site-title', 'site-description' ),
        ) );  
   
        add_theme_support('custom_header', array(
            'flex-width' => true,
            'width' => 1600,
            'flex-height' => true,
            'height' => 450,
            'default-image' => '',
        ));

        $post_formats = array(
            'aside',
            'image',
            'gallery',
            'video',
            'audio',
            'link',
            'quote',
            'status',
        );
        add_theme_support( 'post-formats', $post_formats);
        
        $args = array( //...
            'supports' => array( 'editor', 'title', 'revisions', 'page-attributes', 'custom-fields' ),
            //...
            );

    }

    register_nav_menus( array(
        'primary' => esc_html__('Primary','pj'),
    ));
}

add_action('after_setup_theme','pj_setup');

function pj_content_width(){
    $GLOBALS['content_width'] = apply_filters('pj_content_width',1220);
}

add_theme_support('after_setup_theme','pj_content_width');

function wpb_widgets_init() {
 
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'wpb' ),
        'id' => 'sidebar-1',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    }
 
add_action( 'widgets_init', 'wpb_widgets_init' );


function pj_enqueue_scripts() {
    //css
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/style.css', [], wp_rand(), 'all' );

    //js
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', ['jquery'], wp_rand(), true );

}

add_action( 'wp_enqueue_scripts', 'pj_enqueue_scripts' );





