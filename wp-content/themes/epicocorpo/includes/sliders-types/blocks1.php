		<li class="block1 shadow-inset">
        
        	<div class="inside">
            
                <p class="meta sserif">
                
                    <i class="icon-time"></i> <?php the_time('M j') ?> | 
                    <i class="icon-comments-alt"></i> <?php comments_popup_link('0', '1', '%'); ?>
                
                </p>
        
				<h2><a href="<?php the_permalink(); ?>"><?php echo short_title('...', 7); ?></a></h2>

			</div>
		
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('block_1'); ?>
				</a>

				
		</li><!-- #post-<?php the_ID(); ?> -->



	