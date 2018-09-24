<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */
$facebook = get_field('facebook_link', 'option');
$linkedin = get_field('linkedin_link', 'option');
$twitter = get_field('twitter_link', 'option');
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrapper">
			<div class="site-info">
				<div class="item">
					<div class="social">
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
				</div>
			</div><!-- .site-info -->
			<?php $disclaimer = get_field('disclaimer', 'option'); 
				if($disclaimer) {
			?>
			<div class="disclaimer">
				&copy; <?php echo date('Y').' - Rimu '.$disclaimer; ?>
			</div>
			<?php } ?>
	</div><!-- wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126302981-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-126302981-1');
</script>




</body>
</html>
