<?php
 /*
Template Name: Products
*/

get_header(); ?>
	<!-- <?php query_posts( 'post_type=kistler_products' ); ?> -->
	<div class="header-bg"></div>
	<div class="title-cont">
		<div class="page-title gotham-bold"><?php the_title(); ?></div>		
	</div>
	
	<div id="product-nav" class="gotham-bold">
		<div class="middle-cont">					
					<?php 
					
					foreach(get_the_category() as $cat) { 
						//$cat=array('orderby' => 'none');
					    echo '<div class="cat-cont '.$cat->name.'"><div class="sort-by">sort by '.$cat->name.'</div>';
					    $sub_cats = get_categories('parent='.$cat->term_id.'&hide_empty=0');
					    if($sub_cats) {
					        echo '<div class="drop-list">';
					        foreach($sub_cats as $sub_cat) {
					        echo '<div id="'.$sub_cat->name.'" class="cat-name">'.$sub_cat->name.'</div>';
					        }
					        echo '</div>';
					    echo '</div>';
					    }
					}
					
					?>
					
		</div>
	</div>
	
	
	<div id="product-wrap">
		<div class="middle-cont">
	
			<?php $subs = new WP_Query( array( 'post_parent' => $post->ID, 'post_type' => 'page', 'order' => 'ASC', 'meta_key' => '_thumbnail_id' ));
			    if( $subs->have_posts() ) : while( $subs->have_posts() ) : $subs->the_post(); ?>
			<a class="product-cont 	<?php foreach((get_the_category()) as $category) {echo $category->cat_name . ' ';} ?>" href="<?php echo the_permalink(); ?>">						
				<?php the_post_thumbnail(); ?>
				<div class="overlay"></div>		
				<div class="product-name gotham-bold"><?php the_title(); ?></div>
				<!--<?php the_content(); ?>	 -->		
			</a>
			<div class="mobile-line"></div>
		<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
		<div class="product-line"></div>
	</div>
	
<?php get_footer(); ?>

<script>
// 	$.ajax({
// 	url: '',
// 	success: function(data) {
// 	$('.product-cont').html(data);
// 	alert('Load was performed.');
// 	}
// });


	//$('.product-cont.<?php echo $category->cat_name ?>').fadeOut();
	//$('.product-cont.red').fadeIn();

	// $('.cat-name').each(function() {
	// 	$(this).live({
	// 		click: function() { 
	// 	     	// if($('.product-cont[class]') == selectcat) {
	// 		   		$('.product-cont').fadeOut();
	// 	       		if($('.product-cont').hasClass('<?php echo $sub_cat->name ?>')) {
	// 				$('.product-cont.<?php echo $sub_cat->name ?>').fadeIn();
	// 	}
	// 			// }
	// 		}
	// 	 });
	// });

function catSelect() {
	var selectcat = $('.cat-name').html();
	var prodCat = $('.product-cont.<?php echo $category->cat_name ?>').html();
}


</script>