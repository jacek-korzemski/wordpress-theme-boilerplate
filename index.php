<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="post">
        <div><?php echo get_the_post_thumbnail(); ?></div> 
        <div><?php the_title(); ?></div>
    </div> 
<?php endwhile; endif; ?>

<?php if ( !is_home() ) { display_pagination(); } ?>

<?php get_footer(); ?>