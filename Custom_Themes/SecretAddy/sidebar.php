<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage SecretAddy
 * @since SecretAddy
 */
?>

	<div id="primary" class="widget-area" role="complementary">
		<ul class="xoxo">
<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'secondary-widget-area' ) ) : ?>

		<?php endif; // end secondary widget area
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

		<?php endif; // end primary widget area ?>
			</ul>
		</div><!-- #primary .widget-area -->