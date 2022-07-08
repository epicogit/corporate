<div class="flexfull_wrap">

<div class="flexfull flexslider body2">

	<ul class="slides">
    	<?php $loop = new WP_Query( array( 'post_type' => 'myslidertype', 'posts_per_page' => '4' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php 
		
					$large_image =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'fullsize', false, '' ); 
					$large_image = $large_image[0]; 
					$another_image_1 = get_post_meta($post->ID, 'themnific_image_1_url', true);
					$size = get_post_meta($post->ID, 'themnific_size', true);
					$slider_url = get_post_meta($post->ID, 'themnific_slider_url', true);
					$slider_content = get_post_meta($post->ID, 'themnific_slider_inside', true);
		?> 
                
                    
                        <li>
                           
                           		<div class="slider_full">
                           
                                    <a href="<?php echo $slider_url; ?>">
                                    
                                        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'main-single' ); } ?>
                                    
                                    </a>
                                
                                </div>
                                
                                
                                <?php if($slider_content == 'Yes')  {?>
                                
                        			<div class="inside">
                                        
                                        <div class="stuff2">
                                        
											<?php if (get_post_meta($post->ID, 'themnific_slider_url', true)) { ?>
                                            
                                                <h1><a href="<?php echo $slider_url; ?>"><?php echo short_title('...', 9); ?></a></h1>
                                                
                                            <?php } else { ?>
                                            
                                                <h1><?php echo short_title('...', 9); ?></h1>
                                                
                                            <?php } ?> 
                                            
                                            <?php the_content(); ?>
                                            
                                        </div>
                                     
                                     </div> 
                            	
                                <?php } else ?>
                                
                            
                        <div style="clear: both;"></div>
                        </li>
                        
                    <?php endwhile; ?>
                    
                </ul>
                
            </div>
    
        <?php wp_reset_query(); ?>
		
</div>