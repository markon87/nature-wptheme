<?php
$videoUrl = get_post_meta(get_the_ID(), 'videourl', true);
?>
<div class="post-item video-post">
    <i class="fa fa-video-camera" aria-hidden="true"></i>
    <div class="video-wrapper">
        <iframe width="560" height="315" src="<?php echo $videoUrl ?>" frameborder="0" allowfullscreen></iframe>
    </div>
     <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
    <p><?php the_content(); ?></p>
</div>