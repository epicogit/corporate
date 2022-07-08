<?php
$large_image =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'fullsize', false, '' ); 
$large_image = $large_image[0]; 
$another_image_1 = get_post_meta($post->ID, 'themnific_image_1_url', true);
$video_input = get_post_meta($post->ID, 'themnific_video_url', true);
?>
    <li class="block4 shadow-inset">
    
    	<a class="hoverstuff-zoom" rel="prettyPhoto[gallery]" href="<?php if($video_input) echo $video_input; else echo $large_image; ?>"><i class="icon-zoom-in"></i></a>
    	<a class="hoverstuff-link" href="<?php the_permalink(); ?>"><i class="icon-link"></i></a>

    
        <div class="inside">
    
            <h2><a href="<?php the_permalink(); ?>"><?php echo short_title('...', 14); ?></a></h2>

        </div>
        
        <?php the_post_thumbnail('block_5'); ?>
        
    </li><!-- #post-<?php the_ID(); ?> -->



	