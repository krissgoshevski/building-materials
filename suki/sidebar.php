<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Suki
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) exit;

// Check current page's content container. Skip sidebar if it's a "narrow" layout.
if ( 'narrow' === suki_get_current_page_setting( 'content_container' ) ) return;

// Check current page's content layout. Skip sidebar if not needed in the layout.
if ( ! in_array( suki_get_current_page_setting( 'content_layout' ), array( 'left-sidebar', 'right-sidebar' ) ) ) return;
?>
<aside id="secondary" class="<?php echo esc_attr( implode( ' ', apply_filters( 'suki/frontend/sidebar_classes', array( 'widget-area', 'sidebar' ) ) ) ); ?>" role="complementary" itemscope itemtype="https://schema.org/WPSideBar">
	<?php
	/**
	 * Hook: suki/frontend/before_sidebar
	 */
	do_action( 'suki/frontend/before_sidebar' );
	
	if ( is_active_sidebar( 'sidebar' ) ) :
	?>
		<div class="sidebar-inner">
			<?php dynamic_sidebar( 'sidebar' ); ?>
		</div>
	<?php
	endif;

	/**
	 * Hook: suki/frontend/after_sidebar
	 */
	do_action( 'suki/frontend/after_sidebar' );
	?>
</aside>
