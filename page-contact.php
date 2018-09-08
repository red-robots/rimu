<?php
/**
 * Template Name: Contact
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header();

$email=get_field('email', 'option');
$antispam=antispambot($email);
$phone=get_field('phone', 'option');
$fax=get_field('fax', 'option');
$address=get_field('address', 'option');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->
					<div class="entry-content">
						<?php the_content();?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->

			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
<div class="widget-area">
	<div class="widget">
		<h2 class="widget-title">Contact Info</h2>
		<?php if($email){ ?>
			<div class="item">Email: <a href="<?php echo 'mailto:'.$antispam; ?>"><?php echo $antispam; ?></a></div>
		<?php } ?>
		<?php if($phone){ ?>
			<div class="item">Phone: <?php echo $phone; ?></div>
		<?php } ?>
		<?php if($fax){ ?>
			<div class="item">Fax: <?php echo $fax; ?></div>
		<?php } ?>
		<?php if($address){ ?>
			<div class="item">Address: <?php echo $address; ?></div>
		<?php } ?>
	</div>
</div>
<?php

get_footer();
