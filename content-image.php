<div class="post-item image-post">
    <i class="fa fa-picture-o" aria-hidden="true"></i>
    <div class="thumbnail-img"><?php the_post_thumbnail(); ?></div>
    <!-- <h1 class="page-title"><?php //the_title(); ?></h1> -->
    <?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
    <p><?php the_content(); ?></p>
</div>