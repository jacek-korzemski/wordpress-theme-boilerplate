<?php get_header(); ?>

<h1> <?php the_title(); ?> </h1>

<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />

<hr/>

<?php the_content(); ?>

<?php get_footer(); ?>