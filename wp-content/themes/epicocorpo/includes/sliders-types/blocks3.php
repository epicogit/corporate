		<li class="block3 shadow-inset">
        
        	<div class="inside">
            
                <p class="meta sserif">
                
                    <i class="icon-time"></i> <?php the_time('M j') ?> | 
                    <i class="icon-comments-alt"></i> <?php comments_popup_link('0', '1', '%'); ?>
                
                </p>
                        
				<h2><a href="<?php the_permalink(); ?>"><?php echo short_title('...', 5); ?></a></h2>

			</div>
		
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('block_3'); ?>
				</a>

				
		</li><!-- #post-<?php the_ID(); ?> -->



	