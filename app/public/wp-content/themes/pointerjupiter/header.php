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
  
        <?php wp_head(); ?> 
    </head>
    <?php if ( has_nav_menu( 'primary' ) ) : ?>
	<nav id="" class="primary-nav" aria-label="<?php esc_attr_e( 'Primary menu', 'pointerjupiter' ); ?>">
		<div class="menu-button-container">
			<button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
				<span class="dropdown-icon open"><?php esc_html_e( 'Menu', 'pointerjupiter' ); ?>
					<?php echo twenty_twenty_one_get_icon_svg( 'ui', 'menu' ); ?>
				</span>
				<span class="dropdown-icon close"><?php esc_html_e( 'Close', 'pointerjupiter' ); ?>
					<?php echo twenty_twenty_one_get_icon_svg( 'ui', 'close' ); ?>
				</span>
			</button>
		</div><
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
    <body <?php body_class(); ?>>
    