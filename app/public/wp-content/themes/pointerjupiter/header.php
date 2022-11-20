<?php
/**
 * 
 * 
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset') ?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   
        <?php wp_head(); ?> 
    </head>
    <div class="header-main">
    <title><?php bloginfo('name'); ?> <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php if ( has_nav_menu( 'primary' ) ) : ?>
	<nav id="" class="primary-nav" aria-label="<?php esc_attr_e( 'Primary menu', 'pointerjupiter' ); ?>">
		<div class="menu-button-container">
         <a class="toggle-nav" href="#"><img src="/wp-content/uploads/2022/11/icons8-hamburger-32.png" alt=""></a>
		</div>
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'menu_class'      => 'menu-wrapper',
				'container_class' => 'primary-menu-container',
				'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>
	</nav><!-- #site-navigation -->  
	<?php endif; ?>
    </div>
    <body <?php body_class(); ?>>
    