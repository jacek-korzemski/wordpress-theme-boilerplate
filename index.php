<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="post" style="margin-bottom: 10px; border-bottom: 1px solid black; padding-bottom: 10px;">
        <div><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
        <div><?php echo get_the_post_thumbnail(); ?></div> 
    </div> 
<?php endwhile; endif; ?>

<?php if ( !is_home() ) { display_pagination(); } ?>

<?php get_footer(); ?>