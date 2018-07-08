<?php
 
/**
Template Name: Custom Page Template
 */
 
get_header();
 
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
		
		
		<article class="container" style="margin-top:100px";>
		  <div class="row">
		    <div class="col-lg-2">
			     <h2> ABOUT US </h2>
			</div>
		    <div class="col-lg-4">
			     <?php the_content() ?></td>
			</div>
		   </div>
		</article>
	
	<?php endwhile;
 
else :
	echo '<p>There are no pages!</p>';
endif;
 
get_footer();
 
?>

