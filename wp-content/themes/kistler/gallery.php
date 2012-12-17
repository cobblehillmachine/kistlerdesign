<?php
 /*
Template Name: Gallery
*/

get_header(); ?>
	<div id="img-cont" class="img-bg"><img id="main-img" src="<?php echo get_template_directory_uri(); ?>/images/about.jpg" /></div>
	<div id="gallery-cont" class="middle-cont">
		<div class="page-title gotham-bold"><?php the_title(); ?></div>
	</div>
	
	<div id="gallery-wrap">
		<div class="middle-cont">
	
			<?php $subs = new WP_Query( array( 'post_parent' => $post->ID, 'post_type' => 'page', 'order' => 'ASC', 'meta_key' => '_thumbnail_id' ));
			    if( $subs->have_posts() ) : while( $subs->have_posts() ) : $subs->the_post(); ?>
			<a class="gallery-cont 	<?php foreach((get_the_category()) as $category) {echo $category->cat_name . ' ';} ?>" href="<?php echo the_permalink(); ?>">						
				<?php the_post_thumbnail(); ?>
				<div class="overlay"></div>		
				<div class="product-name gotham-bold"><?php the_title(); ?></div>
						
			</a>
			<div class="mobile-line"></div>
		<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
		<div class="gallery-line"></div>
	</div>

		
<?php get_footer(); ?>