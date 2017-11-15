<?php get_header(); ?>
<section class="main post-content" role="main">
    <?php while ( have_posts() ) : the_post();
        echo '<article class="case-focus">';
            echo '<img src="'.get_field('bild').'" class="case-image" />';
        echo '</article>';
        echo '<aside class="case-all">';
            echo '<h1>'.get_the_title().'</h1>';
            if(have_rows('innehall')) : while(have_rows('innehall')) : the_row();
                if( get_row_layout() == 'ingress' ){
                    the_sub_field('ingress');
                } elseif( get_row_layout() == 'content_left' ){
                    $url = get_sub_field('bild');
                    echo '<div class="work-content" data-bkg="'.$url.'">';
                    echo '<span class="selected jam-camera"></span>';
                        the_sub_field('innehall');
                    echo '</div>';
                } elseif( get_row_layout() == 'toolbox' ){
                    echo '<div class="work-content">';
                    echo '<span class="selected jam-tools"></span>';
                        the_sub_field('toolbox');
                    echo '</div>';
                }
            endwhile; endif;
    
                    echo get_field('right_side');
        echo '</aside>';
		endwhile;
?>
</section><!-- .site-main -->
<?php get_footer(); ?>