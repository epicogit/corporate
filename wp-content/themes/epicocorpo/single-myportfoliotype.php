<?php get_header(); ?>
<?php
$large_image =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'fullsize', false, '' ); 
$large_image = $large_image[0]; 
$video_input = get_post_meta($post->ID, 'themnific_video_embed', true);
$project_url = get_post_meta($post->ID, 'themnific_project_url', true);
$attachments = get_children( array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image') );
?>



    <?php the_post(); ?>
    
    <div class="container container_alt">
            
            <?php if($video_input) { echo ($video_input); 
			
			
            } elseif ($attachments) { echo get_template_part( '/includes/folio-types/gallery-slider' );


			} else {
				
				echo the_post_thumbnail('folio_slider' );
				
    		 }?>

	<div style="clear: both;"></div>

    <div id="foliosidebar">
    
         	<h2 class="singletitle"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    		
            <div class="hrline"><span></span></div>

            <p class="meta sserif">
            
                <i class="icon-time"></i> <span><?php _e('on','themnific');?></span>  <?php the_time('M j') ?><br/>
                <i class="icon-copy"></i> <span><?php _e('in','themnific');?></span> <?php $terms_of_post = get_the_term_list( $post->ID, 'categories', '',' &bull; ', ' ', '' ); echo $terms_of_post; ?><br/>
                <i class="icon-tags"></i> <?php $terms_of_post = get_the_term_list( $post->ID, 'specifics', '',' &bull; ', ' ', '' ); echo $terms_of_post; ?><br/>
                <?php if($project_url) : ?>
                <i class="icon-signout"></i> <a href="<?php echo $project_url; ?>"><?php _e('Visit Project','themnific');?></a>
               	<?php endif; ?>
            </p>

            <div class="hrlineB"><span></span></div>
            
            <a href="<?php echo stripslashes(get_option('themnific_url_portfolio'));?>">&times; <?php _e('Back To The Portfolio','themnific');?></a><br/>
            <a href="<?php echo home_url(); ?>/">&times; <?php _e('Back Home','themnific');?></a>
    </div>
    
    
    
    
    <div id="foliocontent">    
            
            <div class="entry entry_item">
             
				<?php the_content(); ?>
                
                <div class="hrline"><span></span></div>  
                      
                <?php previous_post_link('<span class="fl postnav">&laquo; %link</span>'); ?>
                
                <?php next_post_link('<span class="fr postnav">%link &raquo;</span>'); ?>
                
                <div class="hrlineB"><span></span></div> 
                
                <?php comments_template( '', true ); ?>
            
            </div>
  
     </div>
     
</div>
        
<?php get_footer(); ?>