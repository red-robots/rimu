<?php

	if( is_single('develop-your-brand') ) {
		$pageID = get_the_ID();
	}

	if( is_page('products-services') ) {
		$pageID = 'temp';
	}
	
	// echo $pageID;

	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'testimonial',
	'posts_per_page' => -1
));
	if ($wp_query->have_posts()) : ?>
<section class="testimonials">
<h2>Testimonials</h2>
	<div class="flexslider">
		<ul class="slides">
		    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); 

		    $attachedID = get_field('attach_to');

		    if($pageID == 'temp' &&  $attachedID !='') {
		    	$attachedID =  'temp';
		    }

		    if( $attachedID == $pageID ) :
		    ?>

		    	<li>
		    	<?php  //echo $attachedID; ?>
		    		<div class="testimonial">
		    			<?php the_content(); ?>
		    			<div class="title"><?php the_title(); ?></div>
		    		</div>
		    	</li>
		    <?php 
		    endif;

		    endwhile; ?>
		</ul>
	</div>
</section>
<?php endif; ?>