<li <?php post_class(); ?>>
            
	<h2 class="heading"><a href="<?php echo get_post_meta($post->ID, 'tmnf_linkss', true); ?>"><?php echo tmnf_icon() ?> <?php _e('[Link]','themnific');?> <?php the_title(); ?></a></h2>
    
            <div class="hrline"></div>  
            
            <p class="meta_alt sserif">
            
                <i class="icon-time"></i> <span><?php _e('on','themnific');?></span>  <?php the_time('M j') ?> | 
                <i class="icon-copy"></i> <span><?php _e('in','themnific');?></span> <?php the_category(', ') ?> | 
                <i class="icon-edit"></i> <span><?php _e('by','themnific');?></span> <?php the_author_posts_link(); ?>
            
            </p>

			<div style="clear: both;"></div>

        	<p class="teaser"><?php echo themnific_excerpt( get_the_excerpt(), '350'); ?></p>
            
</li>