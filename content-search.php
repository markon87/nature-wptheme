<?php
$videoUrl = get_post_meta(get_the_ID(), 'videourl', true);
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(array('search-item')); ?>>
    <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
    <?php if(has_post_thumbnail()){?>
        <div class="pull-left"><?php the_post_thumbnail('thumbnail'); ?></div>
    <?php }elseif($videoUrl){?>
        <div class="video-wrapper">
            <iframe width="560" height="315" src="<?php echo $videoUrl ?>" frameborder="0" allowfullscreen></iframe>
        </div>
    <?php } ?>
    <small><?php the_category(' | '); ?> || <?php the_tags(); ?></small>
    <?php the_excerpt(); ?>
</article>