<?php
 
/**
Template Name: Custom Page Template
 */
 
get_header();
 
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
		
		<article class="page-layout">
			<table border="0" width="100%">
				<tr>
					<td class="tdcontent"><?php the_content() ?></td>
					<td class="tdtitle" width="30%"><h2><?php the_title() ?></h2></td>
				</tr>
			</table>
		</article>
	
	<?php endwhile;
 
else :
	echo '<p>There are no pages!</p>';
endif;
 
get_footer();
 
?>
