
<?php
/*

1. This is the main file.

*/


get_header();
  
  $count_post=1;

  echo '<div class="container" style="margin-top:100px; margin-bottom:100px; ">';
  echo '<div class="row">';
  echo '<div class="col-lg-10">';
  
if ( have_posts() ) :
      
	  
      echo '<div class="container">';
      echo '<div class="row">';
				/* Start the Loop */
				
	   
				while ( have_posts() && $count_post<7 ) : the_post();
?>
                    <?php if (is_singular()): ?>
				        <div class="col-lg-2">
						</div>
                        <div class="col-lg-10">
                    <?php endif ?>
 
                    <?php if (is_home()):?>
					
					   
                        <div class="col-lg-4">
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
					<div class="container">
					<div class="row">
					<div class="col-lg-6" style="text-align:left;">
					<?php  next_post_link(); ?> </div>
					<div class="col-lg-6" style="text-align:right;">
					<?php  previous_post_link(); ?>
					</div>
					</div>
					</div>

                   <?php endif ?>
   
                </article>
                </div>
	
             <?php $count_post++; endwhile;
			 
			 if ($count_post==7){
				
				echo '<div class="container">';
				echo '<div class="row">';
				echo '<div class="col-lg-6">';
				
				  previous_posts_link();
				
				echo '</div>';
				
				echo '<div class="col-lg-6" style="text-align:right;">';
				
				  next_posts_link(); 
				
				echo '</div>';
				echo '</div>';
				echo '</div>';
				 
			 }
			 
			 else{
				 
				echo '<div class="container">';
				echo '<div class="row">';
				echo '<div class="col-lg-6">';
				
				next_posts_link(); 
				previous_posts_link();
				
				
				echo '</div>';
				echo '</div>';
				echo '</div>';			 
				
			 }

   echo '</div>';
   echo '</div>';

else :

	echo '<p>There are no posts!</p>';
	
   echo '</div>';
   echo '</div>';
   
endif;

?>

</div>

  <div class="col-lg-2">
    <h3>Popular Posts</h3>
      <ul>
	    <?php $popular = new WP_Query(array('posts_per_page'=>7, 'meta_key'=>'popular_posts', 'orderby'=>'meta_value_num', 'order'=>'DESC'));
	       while ($popular->have_posts()) : $popular->the_post(); ?>
	       <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	    <?php endwhile; wp_reset_postdata(); ?>
     </ul>
   </div>
   
   
  </div>
</div>





<?php

	echo ' </div>';

get_footer();
 
?>

