<?php get_header(); ?>
<div class="container container_alt">

<div id="folio-wrap">
<div id="portfolio-filter">
    
    <ul>
        <li><a class="current" href="<?php echo stripslashes(get_option('themnific_url_portfolio'));?>">
        <?php _e('All','themnific');?></a></li>
        <?php wp_list_categories('taxonomy=categories&orderby=ID&title_li='); ?> 
    </ul>

</div>
	<ul id="portfolio-list" class="centerrow">
		
       	<?php while (have_posts()) : the_post(); ?>
            
            <?php
				$large_image =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'fullsize', false, '' ); 
				$large_image = $large_image[0]; 
				$another_image_1 = get_post_meta($post->ID, 'themnific_image_1_url', true);
				$video_input = get_post_meta($post->ID, 'themnific_video_url', true);
            ?>
            
            <li id="post-<?php the_ID(); ?>" class="centerthreecol item_full">
            
                <span class="imgwrap">
                        
                    <?php the_post_thumbnail('clients',array('title' => "")); ?>
                    
                    <a class="hoverstuff-zoom" rel="prettyPhoto[gallery]" href="<?php if($video_input) echo $video_input; else echo $large_image; ?>"><i class="icon-zoom-in"></i></a>
                    <a class="hoverstuff-link" href="<?php the_permalink(); ?>"><i class="icon-link"></i></a>
                        
                </span>	
                
                <div style="clear:both"></div>
    
                <h3><a href="<?php the_permalink(); ?>"><?php echo short_title('...', 6); ?></a></h3>
                
                <?php echo themnific_excerpt( get_the_excerpt(), '150'); ?>
                    
            </li><!-- #post-<?php the_ID(); ?> -->
            
		<?php endwhile; ?> 
    
   </ul>	
        
        <div class="clear"></div>

		<div class="pagination"><?php pagination('«', '»'); ?></div>
        
	<?php wp_reset_query(); ?>
    
</div>  
            
</div>

<?php get_footer(); ?>