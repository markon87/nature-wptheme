<?php 

$videoUrl = get_post_meta(get_the_ID(), 'videourl', true);

get_header(); ?>
<div class="single-post container">
<div class="row">
    <div class="col-xs-12 col-sm-9">
        <?php 
			if(have_posts()):
				while(have_posts()): the_post() ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php the_title('<h1 class="entry-title">','</h1>'); ?>
                        <?php if(has_post_thumbnail()){?>
                            <div class="thumbnail-img"><?php the_post_thumbnail(); ?></div>
                        <?php  }elseif($videoUrl){?>
                            <div class="video-wrapper">
                                <iframe width="560" height="315" src="<?php echo $videoUrl ?>" frameborder="0" allowfullscreen></iframe>
                            </div>
                        <?php } ?>
                        <small><?php the_category(' | '); ?> || <?php the_tags(); ?></small>
				        <p><?php the_content(); ?></p>
                        <hr>

                        <div class="row">
                            <div class="col-xs-6 text-left"><?php previous_post_link(); ?></div>
                            <div class="col-xs-6 text-right"><?php next_post_link(); ?></div>
                        </div>
                        <?php 
                        if(comments_open()){ 
                            comments_template(); 
                        }else{
                            echo '<h5 class="text-center">Sorry, comments are closed!</h5>';
                        }
                        ?>
                    </article>	
				<?php endwhile;
			endif;	
		?>
    </div>
    <div class="col-xs-12 col-sm-3">
        <?php get_sidebar(); ?>
    </div>
</div>
</div>
	
<?php get_footer(); ?>

