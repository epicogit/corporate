<div id="folio-wrap">
<!--<div id="portfolio-filter">
    
    <ul>
        <li><?php _e('Get More','themnific');?> </li>
        <li><a class="current" href="<?php echo stripslashes(get_option('themnific_url_portfolio'));?>">
        <?php _e('All','themnific');?></a></li>
        <?php wp_list_categories('taxonomy=categories&orderby=ID&title_li='); ?> 
    </ul>

</div>
-->
<ul id="portfolio-list" class="centerrow">
		
        <?php query_posts( array( 'post_type' => 'myportfoliotype', 'paged' => $paged, 'posts_per_page' => 9));
		
		if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            
            <?php
				$large_image =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'fullsize', false, '' ); 
				$large_image = $large_image[0]; 
				$another_image_1 = get_post_meta($post->ID, 'themnific_image_1_url', true);
				$video_input = get_post_meta($post->ID, 'themnific_video_url', true);
            ?>
            
            <li id="post-<?php the_ID(); ?>" class="centerfourcol item_full">
            
                <span class="imgwrap">
                        
                    <?php the_post_thumbnail('folio',array('title' => "")); ?>
                    
                    <a class="hoverstuff-zoom" rel="prettyPhoto[gallery]" href="<?php if($video_input) echo $video_input; else echo $large_image; ?>"><i class="icon-zoom-in"></i></a>
                    <a class="hoverstuff-link" href="<?php the_permalink(); ?>"><i class="icon-link"></i></a>
                        
                </span>	
                
                <div style="clear:both"></div>
    
                <h3><a href="<?php the_permalink(); ?>"><?php echo short_title('...', 6); ?></a></h3>
                
                <?php echo themnific_excerpt( get_the_excerpt(), '150'); ?>
                    
            </li><!-- #post-<?php the_ID(); ?> -->
		<?php endwhile; endif; ?> 
        </ul>	
        <div class="clear"></div>

	<a class="blogmore" href="<?php echo stripslashes(get_option('themnific_url_portfolio'));?>"><?php _e('Browse Our Portfolio','themnific');?></a>

	<?php wp_reset_query(); ?>
	
</div>