<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        	<div <?php post_class('twinsbox'); ?>> 
 
			<?php 
			$video_input = get_post_meta($post->ID, 'tmnf_video', true);
			$audio_input = get_post_meta($post->ID, 'tmnf_audio', true);
			?>

			<?php 	if(has_post_format('video')){
                  			echo ($video_input);
                 	}elseif(has_post_format('audio')){
                       		echo ($audio_input);
                 	}elseif(has_post_format('gallery')){
                       		echo get_template_part( '/includes/post-types/gallery-slider' );
 					} else {
							if ( has_post_thumbnail());
						 		 the_post_thumbnail('format-single', array('class' => 'main-single'));  
								
			}?>
			
            <div style="clear: both;"></div>
            
            <h2 class="singletitle"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <div class="hrline"><span></span></div>

            <div class="entry">

                <p class="meta sserif">
                
                  	<i class="icon-time"></i> <?php _e('on','themnific');?>  <?php the_time('F j'); ?> | 
                  	<i class="icon-copy"></i> <?php _e('in','themnific');?> <?php the_category(', ') ?> | 
                  	<i class="icon-edit"></i> <?php _e('by','themnific');?> <?php the_author_posts_link(); ?> | 
                  	<i class="icon-comments-alt"></i> <?php _e('with','themnific');?> <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
                
                </p>
            
            	<?php the_content(); ?>
            
            	<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:','themnific') . '</span>', 'after' => '</div>' ) ); ?>
            
            	<?php get_template_part('/includes/mag-buttons');?>
            
            	<div style="clear: both;"></div>
            
            
                <div class="postinfo body3">
                
                      <span class="fl">
                          <p><?php the_breadcrumb(); ?></p>
                      </span>
                      
                      <span class="fr">
                          <?php the_tags( '<p><i class="icon-tags"></i>  ',', ',  '</p>'); ?>
                      </span>
                    
                </div>
                
            	<?php get_template_part('/includes/mag-postmore');?>
                
            	<div style="clear: both;"></div>
            
            	<?php comments_template(); ?>
            
                <p>
                <?php previous_post_link('<span class="fl" style="width:45%;">&laquo; %link</span>'); ?>
                <?php next_post_link('<span class="fr" style="width:45%; text-align:right">%link &raquo;</span>'); ?>
                </p>
            
            </div>
            
            </div>

	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria','themnific');?>.</p>

	<?php endif; ?>

    <div style="clear: both;"></div>

