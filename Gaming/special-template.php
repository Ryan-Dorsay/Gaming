<?php

/*
Template Name: Special Layout
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<article class="post page">
		<h2><?php the_title(); ?></h2>
		
		<!-- info-box -->
		<div class="info-box">
			<h4>Disclaimer</h4>
			<p>This only a brief accounting of the history of games it by no means represents the full history gaming and all that entails.</p>
		</div><!-- /info-box -->
		
		<?php the_content(); ?>
	</article>
	
	<?php endwhile;
	
	else :
		echo '<p>No content found</p>';
	
	endif;
	
get_footer();

?>