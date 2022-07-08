<li <?php post_class(); ?>>
   
		<?php
        $large_image =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'fullsize', false, '' ); 
        $large_image = $large_image[0]; 
        $another_image_1 = get_post_meta($post->ID, 'themnific_image_1_url', true);
        ?>


		<div class="imageformat">
        
            <a rel="prettyPhoto[gallery]"  href="<?php echo $large_image; ?>">  
                     <?php the_post_thumbnail('format-image'); ?>
            </a>
           
        </div>
    
   		<div style="clear: both;"></div> 
        
        <p class="special"><?php echo tmnf_icon() ?> <?php _e('Image','themnific');?>: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

            <div class="hrline"></div>  
            
            <p class="meta_alt sserif">
            
                <i class="icon-time"></i> <span><?php _e('on','themnific');?></span>  <?php the_time('M j') ?> | 
                <i class="icon-copy"></i> <span><?php _e('in','themnific');?></span> <?php the_category(', ') ?> | 
                <i class="icon-edit"></i> <span><?php _e('by','themnific');?></span> <?php the_author_posts_link(); ?>
            
            </p>
            
</li>