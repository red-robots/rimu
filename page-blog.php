<?php
/**
 * Template Name: Blog
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
			$wp_query = new WP_Query();
			$wp_query->query(array(
			'post_type'=>'post',
			'posts_per_page' => 10,
			'paged' => $paged,
		));
			if ($wp_query->have_posts()) : ?>
		    <?php while ($wp_query->have_posts()) : ?>
		        
		    <?php $wp_query->the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if(has_post_thumbnail()) {
					the_post_thumbnail();
					} ?>
					<header class="entry-header">
						<?php
							if ( is_single() ) {
								the_title( '<h1 class="entry-title">', '</h1>' );
							} else {
								the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
							}

						if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">
							<?php acstarter_posted_on(); ?>
						</div><!-- .entry-meta -->
						<?php
						endif; ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content();?>
					</div><!-- .entry-content -->

					<footer class="entry-footer">
						<?php acstarter_entry_footer(); ?>
					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->

			<?php endwhile; // End of the loop.
			?>
			<?php pagi_posts_nav(); ?>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
