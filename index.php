
<?php
/*

1. This is the main file.

*/


get_header();

  echo '<br><div id="main" class="container">';
  echo '<div class="row">';
  echo '<div class="col-lg-6">';
 
 
if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) : the_post();
?>


 <article class="post">
 
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
	 
 </article>
 
	<?php endwhile;
	
else :
	echo '<p>There are no posts!</p>';
 
endif;

    echo ' </div>';
	echo ' </div>';
	echo ' </div>';

get_footer();
 
?>

