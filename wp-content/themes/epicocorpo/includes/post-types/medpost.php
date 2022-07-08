<li <?php post_class(); ?>>

			<?php if ( has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>">  
                    <?php the_post_thumbnail('format-single', array('class' => 'main-single')); ?>
                </a>
            <?php endif; ?>
            
			<div style="clear: both;"></div>
            
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            
            <div class="hrline"></div>  
            
            <p class="meta sserif">
            
                <i class="icon-time"></i> <span><?php _e('on','themnific');?></span>  <?php the_time('M j') ?><br/>
                <i class="icon-copy"></i> <span><?php _e('in','themnific');?></span> <?php the_category(', ') ?><br/>
                <i class="icon-edit"></i> <span><?php _e('by','themnific');?></span> <?php the_author_posts_link(); ?><br/>
                <i class="icon-comments-alt"></i> <span><?php _e('with','themnific');?></span> <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
            
            </p>

    		<div class="entry">    
            
				<?php global $more; $more = 0; ?>
                
                <?php the_content('Continue Reading'); ?> 
                
                <a class="mainbutton fr" href="<?php the_permalink(); ?>"><?php _e('Read More','themnific');?> &#187;</a>
                  
           	</div>
                  
</li>