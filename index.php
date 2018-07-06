
<?php
/*

1. This is the main file.

*/


get_header();

  echo '<div class="container" style="margin-top:100px; margin-bottom:100px; ">';
  
 
 
if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) : the_post();
?>

 
 <article class="post">
  <div class="row">
  <div class="col-lg-6">
 <a href="<?php the_permalink() ?>"><br>
 
 <?php if (is_home()):?>
  
  <div id="featured">
  <?php the_post_thumbnail(); ?>
  <br>
  <h2><?php the_title() ?></h2></a>
  </div>

 <?php endif ?>
 

 
   <?php if( is_singular() ) : ?>
   
   <h2><?php the_title() ?></a></h2> 
   
   <?php the_content() ?> 
   
   <?php endif ?>
   </div>
   </div>
 </article>
 
 
	<?php endwhile;
	
else :
	echo '<p>There are no posts!</p>';
 
endif;

    
	echo ' </div>';

get_footer();
 
?>

