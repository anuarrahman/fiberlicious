<?php
 
get_header();

echo '<div class="spacer">&nbsp;</div>';

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
 
        <article class="page-layout">
            <!-- <h2><the_title() ? ></h2> -->
			
			<?php the_content() ?>
			
        </article>
	
	<?php endwhile;
 
else :
	echo '<p>There are no pages!</p>';
endif;
 
get_footer();
 
?>

<?php if(is_page( 'about-us' )) : ?>
        <h3>Thanks for visiting our page!</h3>
<?php endif ?>
