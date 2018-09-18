<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				if( is_single(900) ) { 
					$user_id = get_current_user_id();
					$accessCode = get_field('assessments_code', 'user_'. $user_id );

					// echo '<pre>';
					// print_r($user_id);
					// echo '</pre>';
					
			?>
				<section class="assessments">
					<h3>Your Assessments Code:</h3>
					<p><?php echo $accessCode; ?></p>
					<a href="">Take Assessment now.</a>
				</section>
			<?php 
				
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
