<?php 
/*
    Template Name: Page No Title
*/
get_header(); ?>

	<main <?php body_class() ?>>
		
		<?php 
			if(have_posts()):
				while(have_posts()): the_post() ?>
				
				<p><?php the_content(); ?></p>
					
				<?php endwhile;
			endif;	
		?>
	</main>
	
<?php get_footer(); ?>

