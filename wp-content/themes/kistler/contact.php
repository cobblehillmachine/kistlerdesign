<?php
 /*
Template Name: Contact
*/

get_header(); ?>
	
	<div class="header-bg"></div>
	<div id="contact-wrap" class="middle-cont">
		<div class="page-title gotham-bold"><?php the_title(); ?></div>
		<div id="contact-cont">
			<div class="subtitle gotham-bold">contact brian hall</div>
			<div class="adobe-pro text">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultricies tellus sed orci adipiscing bibendum. Duis vitae odio eros, nec tempus nibh. Cras sit amet arcu dui. Nullam ac diam leo, sed porttitor est. Aenean pellentesque erat quis nibh pulvinar suscipit. Curabitur a mauris urna, vitae pretium ipsum. Suspendisse quis leo nibh, a vestibulum justo. 
			</div>
			<div class="address gotham-bold">
				1175 MACHINIST ST,</br> BLDG 43A<br/>CHARLESTON, SC 29405<br/><br/>843 554 2430<br/>M 843 364 9933<br/><br/>
				<a href="mailto:brian@kistlerdesign.com">BRIAN@KISTLERDESIGN.COM</a>
			</div>
			<?php echo do_shortcode( '[contact-form-7 id="28" title="Contact form 1"]' ); ?>
		</div>
	</div>

		
<?php get_footer(); ?>