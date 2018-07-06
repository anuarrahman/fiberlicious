
<?php
/*

1. This is the main file.

*/


get_header();

  echo '<div class="container" style="margin-top:100px; margin-bottom:100px; ">';
  echo '<div class="row">';
 
 
if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) : the_post();
?>

  
  
 <?php if (is_singular()): ?>
    <div class="col-lg-2">
    </div>
    <div class="col-lg-6">
 <?php endif ?>
 
  <?php if (is_home()):?>
     <div class="col-sm-4">
  <?php endif ?>
  
  <article class="post">
  <a href="<?php the_permalink() ?>">
 
 <?php if (is_home()):?>
    <div id="featured">
      <?php the_post_thumbnail(); ?>
      <h2><?php the_title() ?></h2></a>
    </div>
 <?php endif ?>
 
  
  <?php if( is_singular() ) : ?>
     <h2><?php the_title() ?></a></h2> 
     <?php the_content() ?> 
     </div>
 
   <?php endif ?>
   </article>
  
  </div>
<?php endwhile;

echo '</div>';
else :
	echo '<p>There are no posts!</p>';
 
endif;

    
	echo ' </div>';

get_footer();
 
?>

