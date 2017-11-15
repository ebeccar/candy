<?php $args=array(
    'post_type'=>'work',
    'orderby'=>'date',
    'order' => 'DESC',
    'showposts' => '-1');
    $workloop=new WP_Query($args); 

    while ($workloop->have_posts()) : $workloop->the_post();
    $url = get_field('bild');
    $color = get_field('farg');
    $tags = get_the_tags();
	     echo '<a class="work-content" data-bkg="'.$url['url'].'" data-alt="'.$url['alt'].'" data-title="'.get_the_title().'" data-color="'.$color.'" href="'.get_the_permalink().'">';
	     	echo '<span class="selected jam '.get_field('utvald_kategori')->description.'"></span>';
	    	echo '<h3>'.get_the_title().'</h3>';
	    	if( have_rows('innehall') ) {
                while ( have_rows('innehall') ) { the_row();
                    if( get_row_layout() == 'ingress' ){
                            the_sub_field('ingress');
                    }
                }
            }
	    	echo '<div class="tags">';
	    		if($tags) {
		    		foreach($tags as $tag) {
			    		echo '<span class="tag"><span class="jam '.$tag->description.'"></span> ' . $tag->name . '</span> ';
		    		}
	    		}
	    	echo '</div>';
	    echo '</a>';
    endwhile;
	wp_reset_postdata();
    ?>
    
    
