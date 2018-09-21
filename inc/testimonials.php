<?php
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'testimonial',
	'posts_per_page' => -1
));
	if ($wp_query->have_posts()) : ?>
<section class="testimonial">
	<div class="flexslider">
		<ul class="slides"></ul>
		    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		    	<li>
		    		<div class="testimonial">
		    			<?php the_content(); ?>
		    			<div class="title"><?php the_title(); ?></div>
		    		</div>
		    	</li>
		    <?php endwhile; ?>
		</div>
	</div>
</section>
<?php endif; ?>