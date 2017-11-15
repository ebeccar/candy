<?php 
$focus = get_field('case');
if( $focus ): 
	$post = $focus;
    setup_postdata( $post ); 
    $bild = get_field('bild', $post->ID);?>
		<div class="case"> 
            <img src="<?php echo $bild['url']; ?>" class="case-image" alt="<?php echo $bild['alt']; ?>"/>
            <div class="focus-meta">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <span class="likebutton"><span class="jam jam-brightness-up"></span>
            </div><!-- end focus meta -->
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php the_content(); ?>
		</div><!-- end case -->
<?php endif; ?>