<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if(has_post_thumbnail()) {
				the_post_thumbnail();
				} ?>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' );  ?>
				</header><!-- .entry-header -->

				<div class="entry-content">

				<?php if( is_single(900) ) :
						$user_id = get_current_user_id();
						$accessCode = get_field('assessments_code', 'user_'. $user_id );

						// echo '<pre>';
						// print_r($user_id);
						// echo '</pre>';
						
				?>
					<section class="assessments">
						<?php if($accessCode) { ?>
						<h3>Your Assessments Code:</h3>
						<p><?php echo $accessCode; ?></p>
						<a href="">Take Assessment now.</a>
						<?php } else { 
							$email = 'revans@rimucoaching.com';
							$email = antispambot($email);
							?>
						No Assessment code. Please email us at <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a> to obtain your assessment code.
					</section>
				<?php 
					
					}

					endif;

					?>
					<?php the_content();?>
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php acstarter_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->

			<?php 

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();






