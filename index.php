<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); 

?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

		<?php
			/* Start the Loop */
			$wp_query = new WP_Query(array('post_status'=>'private','pagename'=>'homepage'));
			if ( have_posts() ) : the_post(); 
				$product=get_field('product');
				$lower_content_box_left=get_field('lower_content_box_left');
				$lower_content_box_right=get_field('lower_content_box_right');
				// get_template_part( 'template-parts/content', 'index' );
			endif; ?>

			<section class="homepage">
				<div class="item">
					<?php //echo $product; ?>
					<h2>Develop Your Brand</h2>
					<div class="teaser-prod">
						<img src="<?php bloginfo('template_url'); ?>/images/personal-brand.png" alt="Rimu - Personal Branding">
					</div>
					<div class="teaser-btn rimubtn ">
						<a href="<?php bloginfo('url'); ?>/courses/develop-your-brand">Take the Course Now</a>
					</div>
					<?php $vid=get_field('teaser_video'); if($vid) { ?>
					<div class="video">
						<h3>Teaser Video</h3>
							<?php echo $vid;?>
						
						</div>
					<?php } ?>
				</div>
				<div class="item">
					<?php
					$wp_query = new WP_Query();
					$wp_query->query(array(
					'post_type'=>'post',
					'posts_per_page' => 1,
				));
					if ($wp_query->have_posts()) : ?>
				    	<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>	
				    		<article>
				    			<?php if(has_post_thumbnail()){
				    				the_post_thumbnail();
				    				} ?>
						    	<h2><?php the_title(); ?></h2>
						    	<?php the_excerpt(); ?>
						    	<div class="readmore">
						    		<a href="<?php the_permalink(); ?>">Read More</a>
						    	</div>
						    </article>

					    <?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div class="item">
					<?php echo $lower_content_box_left; ?>
				</div>
				<div class="item">
					<?php echo $lower_content_box_right; ?>
				</div>
			</section>

			
			<?php //get_template_part('inc/testimonials'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
