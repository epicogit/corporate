<?php 
	$feature_cat = get_option('themnific_slider_category');
?>
<div class="block-wrap">
<ul class="block">

    <?php 	$my_query = new WP_Query('&showposts=1&category_name='. $feature_cat .'');	 
			while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
    
    		<?php get_template_part('/includes/sliders-types/blocks1');?>
    
    <?php endwhile; ?> 
    
    
    <?php 	$my_query = new WP_Query('&showposts=1&offset=1&category_name='. $feature_cat .'');	 
			while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
    
    		<?php get_template_part('/includes/sliders-types/blocks2');?>
    
    <?php endwhile; ?>
   
   
    <?php 	$my_query = new WP_Query('&showposts=1&offset=2&category_name='. $feature_cat .'');	 
			while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
    
    		<?php get_template_part('/includes/sliders-types/blocks3');?>
    
    <?php endwhile; ?>
    
    <?php 	$my_query = new WP_Query('&showposts=1&offset=3&category_name='. $feature_cat .'');	 
			while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
    
    		<?php get_template_part('/includes/sliders-types/blocks4');?>
    
    <?php endwhile; ?> 
        
    <?php 	$my_query = new WP_Query('&showposts=1&offset=4&category_name='. $feature_cat .'');	 
			while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
    
    		<?php get_template_part('/includes/sliders-types/blocks5');?>
    
    <?php endwhile; ?> 
    
    <?php 	$my_query = new WP_Query('&showposts=1&offset=5&category_name='. $feature_cat .'');	 
			while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
    
    		<?php get_template_part('/includes/sliders-types/blocks6');?>
    
    <?php endwhile; ?> 
    
        <?php 	$my_query = new WP_Query('&showposts=1&offset=6&category_name='. $feature_cat .'');	 
			while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
    
    		<?php get_template_part('/includes/sliders-types/blocks7');?>
    
    <?php endwhile; ?> 
    
    
</ul>

			<?php if(is_home() ||is_page_template('homepage.php'))  { ?>
                <a class="blogmore" href="<?php echo stripslashes(get_option('themnific_url_blog'));?>"><?php _e('Browse All Articles','themnific');?></a>
            <?php } else {}?>


	
</div>
<div class="clear"></div>