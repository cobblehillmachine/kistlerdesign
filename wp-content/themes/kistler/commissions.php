<?php
 /*
Template Name: Commissions
*/

get_header(); ?>

	<div id="img-cont" class="img-bg"><img id="main-img" src="<?php echo get_template_directory_uri(); ?>/images/about.jpg" /></div>
	<div id="commissions-cont" class="middle-cont">
		<div class="page-title gotham-bold"><?php the_title(); ?></div>
		<?php $subs = new WP_Query( array( 'post_parent' => $post->ID, 'post_type' => 'page', 'order' => 'ASC', 'meta_key' => '_thumbnail_id' ));
		    if( $subs->have_posts() ) : while( $subs->have_posts() ) : $subs->the_post(); ?>
			<div id="number-<?php the_field('number'); ?>" class="process-cont">
				<div class="number gotham-bold"><?php the_field('number'); ?></div>
				<div class="title gotham-bold"><?php the_title(); ?></div>
				<div class="text adobe-pro"><?php the_content(); ?></div>
				<a class="button gotham-bold" href="/contact#wpcf7-f24-t1-o1">inquire about a commission</a>
			</div>
		<?php endwhile; endif; wp_reset_postdata(); ?>

		<div class="grid">
			<?php $subs = new WP_Query( array( 'post_parent' => $post->ID, 'post_type' => 'page', 'order' => 'ASC', 'meta_key' => '_thumbnail_id' ));
			    if( $subs->have_posts() ) : while( $subs->have_posts() ) : $subs->the_post(); ?>
			<div id="box<?php the_field('number'); ?>" class="box">
				<div class="box-img"><?php the_post_thumbnail(); ?></div>
				<div class="nbr gotham-bold"><?php the_field('number'); ?></div>
				<div class="box-title gotham-bold"><?php the_title(); ?></div>
				<div class="overlay"></div>
			</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div>
		
<?php get_footer(); ?>
