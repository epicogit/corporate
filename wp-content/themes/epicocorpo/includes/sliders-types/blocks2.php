		<li class="block2 shadow-inset">
        
        	<div class="inside">
            
                <p class="meta sserif">
                    
                    <i class="icon-time"></i> <?php the_time('M j') ?> | 
                    <i class="icon-copy"></i> <?php _e('in','themnific');?> <?php the_category(', ') ?> | 
                    <i class="icon-edit"></i> <?php _e('by','themnific');?> <?php the_author_posts_link(); ?> | 
                    <i class="icon-comments-alt"></i> <?php comments_popup_link('0', '1', '%'); ?>
                
                </p>
        
				<h2><a href="<?php the_permalink(); ?>"><?php echo short_title('...', 10); ?></a></h2>

			</div>
		
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('block_2'); ?>
				</a>

				
		</li><!-- #post-<?php the_ID(); ?> -->



	