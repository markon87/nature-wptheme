<?php get_header(); ?>

	<main <?php body_class() ?>>
		<article class="blog-posts-area">
		<?php 
			if(have_posts()):
				while(have_posts()): the_post() ?>
				
				<?php get_template_part('content', 'search'); ?>
                
				<?php endwhile;
			endif;	
		?>
		</article>
		<aside class="blog-widget-area">
			<?php get_sidebar(); ?>
		</aside>
	</main>
	
<?php get_footer(); ?>

