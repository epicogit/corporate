<?php
/*
Template Name: Homepage - No Scroll
*/
?>
<?php get_header(); ?>

	<div id="main">
        

        <?php if (get_option('themnific_slider_dis') <> "true") { ?>    
        <div id="home" class="section">
            
            <?php get_template_part('/includes/homeblocks/flex-full');?>
        
        </div>
        <?php } ?>    
            
        
    	<?php $loop = new WP_Query( array( 'post_type' => 'mylayouttype') ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php 
		$large_image =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'fullsize', false, '' ); 
		$large_image = $large_image[0]; 
		$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),false, '' );
		$bg_color = get_post_meta($post->ID, 'colorSelector', true);
		$hash = get_post_meta($post->ID, 'themnific_navigation_anchor', true);
		$video_input = get_post_meta($post->ID, 'themnific_video_url', true);
		$map_input = get_post_meta($post->ID, 'themnific_map', true);
		$respo = get_post_meta($post->ID, 'themnific_responsive_section', true);
		?> 
      
           <div id="<?php if($hash) {echo $hash;} else {?>layoutpost-<?php the_ID();} ?>" class="section resmode-<?php echo $respo; ?>"
           style="  <?php if($large_image) { ?>background-image:url(<?php echo $src[0] ?>);<?php } else {}?> <?php if($bg_color) { ?>background-color:<?php echo $bg_color ?>;<?php } else {}?> ">
           
           
           		
				<?php if($map_input) {?>
                        <?php echo ($map_input); ?>
                <?php } else {?>
           
            	<div class="container"> 
                
                
                        
                        <h2><?php echo short_title('...', 9); ?></h2>
                                            
                        <?php the_content() ?>
                            
                            
                        <div style="clear: both;"></div>
                        
                        </div>
                        
           		<?php }?>
           
           </div>
        <?php endwhile; ?>
    
        <?php wp_reset_query(); ?>
            
	</div><!-- [END] #main -->
        
<?php get_footer(); ?>