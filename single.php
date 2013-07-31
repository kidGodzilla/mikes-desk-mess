<?php get_header(); ?>

<!-- BEGIN CONTENT -->
<div id="content">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<article class="post" id="post-<?php the_ID(); ?>">
    <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
    <p class="postdata">Posted <?php the_time('M j, Y') ?> in <?php the_category(', ') ?></p>
    
    <?php if(is_single('1420')): ?> 
    <!-- Begin Slider --> 
    <div class="flexslider">
        <ul class="slides">
        <?php
            $attachments = get_children( array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image','caption' => $attachment->post_excerpt,) );
            foreach ( $attachments as $attachment_id => $attachment ) {
                echo '<li>';
                echo wp_get_attachment_image($attachment_id, 'large');
				echo '<p>';
				echo get_post_field('post_excerpt', $attachment->ID);
				echo '</p>';
				echo '</li>';
				
            } ?>
        </ul>
    </div>
    <!-- End Slider -->
    <?php endif; ?>
    <?php the_content(''); ?> 
    <nav class="post-navigation">
        <span class="post-navigation-previous"><?php previous_post(' &laquo; %','', 'yes'); ?></span>
        <span class="post-navigation-next"><?php next_post('% &raquo; ','', 'yes'); ?></span>
    </nav>   
</article>
<?php comments_template(); ?>
<?php endwhile; ?>
<?php endif; ?>
</div>
<!-- END CONTENT -->

<?php get_footer();?>