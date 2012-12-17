<?php
 /*
Template Name: About
*/

get_header(); ?>

		<div id="img-cont" class="img-bg"><img id="main-img" src="<?php echo get_template_directory_uri(); ?>/images/about.jpg" /></div>
		<div id="about-cont" class="middle-cont">
			<div class="page-title gotham-bold"><?php the_title(); ?></div>
			<div id="quote"><img src="<?php echo get_template_directory_uri(); ?>/images/quote.jpg" /></div>
			<div class="text-cont">
				<div class="title gotham-bold">BRIAN HALL OF KISTLER DESIGN COMPANY</div>
				<div class="text adobe-pro">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultricies tellus sed orci adipiscing bibendum. Duis vitae odio eros, nec tempus nibh. Cras sit amet arcu dui. Nullam ac diam leo, sed porttitor est. Aenean pellentesque erat quis nibh pulvinar suscipit. Curabitur a mauris urna, vitae pretium ipsum. Suspendisse quis leo nibh, a vestibulum justo. 

					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultricies tellus sed orci adipiscing bibendum. Duis vitae odio eros, nec tempus nibh. Cras sit amet arcu dui. Nullam ac diam leo, sed porttitor est.
				</div>
			</div>
		</div>
		
<?php get_footer(); ?>