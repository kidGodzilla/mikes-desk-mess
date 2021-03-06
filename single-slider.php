<?php get_header(); ?>

<!-- BEGIN CONTENT -->
<div id="content">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<article class="post" id="post-<?php the_ID(); ?>">
    <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
    <p class="postdata">Posted <?php the_time('M j, Y') ?> in <?php the_category(', ') ?></p>
    
    <!-- Begin Test Slider -->
    <?php wp_get_attachment_image_src( $attachment_id, $size, $icon ); ?> 
    
    <!-- End Test Slider -->
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