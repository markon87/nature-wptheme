<?php get_header(); ?>

	<main <?php body_class() ?>>
		<article class="blog-posts-area">
		<?php 
			if(have_posts()):
				while(have_posts()): the_post() ?>
				
				<?php get_template_part('content', get_post_format()); ?>
					
				<?php endwhile; ?>

				<div class="col-xs-6 text-left">
					<?php next_posts_link('<< Older Posts') ?>
				</div>
				<div class="col-xs-6 text-right">
					<?php previous_posts_link('Newer Posts >>') ?>
				</div>

		<?php
			endif;	
		?>
		</article>
		<aside class="blog-widget-area">
			<?php get_sidebar(); ?>
		</aside>
	</main>
	
<?php get_footer(); ?>

