<?php get_header(); ?>
<section class="main post-content" role="main">
    <?php if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            echo '<article class="case-focus">';
                echo get_field('left_side');
            echo '</article>';
            echo '<aside class="case-all">';
                echo get_field('right_side');
            echo '</aside>';
		endwhile;
    endif;
?>
</section><!-- .site-main -->
<?php get_footer(); ?>
