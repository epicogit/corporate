<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	   <?php $audio_input = get_post_meta($post->ID, 'tmnf_audio', true);?>

        <?php if($audio_input) {  echo ($audio_input); } else {  }?>
        
        <div style="clear: both;"></div>   
            
        <p class="special"><a href="<?php the_permalink(); ?>"><?php echo tmnf_icon() ?> <?php the_title(); ?></a></p>

            <div class="hrline"></div>  
            
            <p class="meta_alt sserif">
            
                <i class="icon-time"></i> <span><?php _e('on','themnific');?></span>  <?php the_time('M j') ?> | 
                <i class="icon-copy"></i> <span><?php _e('in','themnific');?></span> <?php the_category(', ') ?> | 
                <i class="icon-edit"></i> <span><?php _e('by','themnific');?></span> <?php the_author_posts_link(); ?>
            
            </p>
  
</li>