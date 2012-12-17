<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	<div class="single-cont">
		<div class="single-title gotham-bold"><?php the_title(); ?></div>		
		<div class="text adobe-pro"><?php the_content(); ?></div>
		<div class="materials gotham-bold">materials:&nbsp;<?php the_field('materials'); ?></div>
		<div class="dimensions gotham-bold">dimensions:&nbsp;<?php the_field('dimensions'); ?></div>
		<a class="button gotham-bold" href="/contact#wpcf7-f24-t1-o1">inquire about this piece</a>
	</div>
	<div class="single-image">
		<?php the_post_thumbnail(); ?>
	</div>