<?php
/**
 * The aside widget areas.
 *
 * @package WordPress
 * @subpackage Flexopotamus
 * @since Flexopotamus 1.0
 */
?>

<?php
	/* The aside widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'first-aside-widget-area'  )
		&& ! is_active_sidebar( 'second-aside-widget-area' )
		&& ! is_active_sidebar( 'third-aside-widget-area'  )
		&& ! is_active_sidebar( 'fourth-aside-widget-area' )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>

			<div id="aside-widget-area-2" role="complementary">

<?php if ( is_active_sidebar( 'first-aside-widget-area' ) ) : ?>
				<div id="first" class="widget-area">
					<ul class="xoxo">
						<?php dynamic_sidebar( 'first-aside-widget-area' ); ?>
					</ul>
				</div><!-- #first .widget-area -->
<?php endif; ?>

<?php if ( is_active_sidebar( 'second-aside-widget-area' ) ) : ?>
				<div id="second" class="widget-area">
					<ul class="xoxo">
						<?php dynamic_sidebar( 'second-aside-widget-area' ); ?>
					</ul>
				</div><!-- #second .widget-area -->
<?php endif; ?>

<?php if ( is_active_sidebar( 'third-aside-widget-area' ) ) : ?>
				<div id="third" class="widget-area">
					<ul class="xoxo">
						<?php dynamic_sidebar( 'third-aside-widget-area' ); ?>
					</ul>
				</div><!-- #third .widget-area -->
<?php endif; ?>

<?php if ( is_active_sidebar( 'fourth-aside-widget-area' ) ) : ?>
				<div id="fourth" class="widget-area">
					<ul class="xoxo">
						<?php dynamic_sidebar( 'fourth-aside-widget-area' ); ?>
					</ul>
				</div><!-- #fourth .widget-area -->
<?php endif; ?>

			</div><!-- #aside-widget-area -->
