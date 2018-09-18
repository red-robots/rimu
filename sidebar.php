<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */
$facebook = get_field('facebook_link', 'option');
$linkedin = get_field('linkedin_link', 'option');
$twitter = get_field('twitter_link', 'option');

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<div class="widget">
		<li>
		<div class="rimubtn side">
			<a href="<?php bloginfo('url'); ?>/login">Login</a>
			</div>
		</li>
		<li>
		<div class="rimubtn side">
			<a href="<?php bloginfo('url'); ?>/register">Register</a>
			</div>
		</li>
		<?php if(is_user_logged_in()) { ?>
			<li>
			<div class="rimubtn side"><a  href="<?php bloginfo('url'); ?>/my-account">My Account</a></div>
				
			</li>
			<li>
			<div class="rimubtn side">
				<a  href="<?php bloginfo('url'); ?>/profile">Profile</a>
				</div>
			</li>
		<?php } ?>
	</div>
	<div class="widget">
	<h2 class="widget-title">Follow Us</h2>
		<?php if($facebook) { ?>
			<a class="social" href="<?php echo $facebook; ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
		<?php } ?>
		<?php if($linkedin) { ?>
			<a class="social"  href="<?php echo $linkedin; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
		<?php } ?>
		<?php if($twitter) { ?>
			<a class="social"  href="<?php echo $twitter; ?>" target="_blank"><i class="fab fa-twitter-square"></i></a>
		<?php } ?>
	</div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
