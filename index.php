<?php get_header(); ?>
<section class="main" role="main">
    <?php if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
		endwhile;
    endif;
?>

</section><!-- .site-main -->
<?php get_footer(); ?>
