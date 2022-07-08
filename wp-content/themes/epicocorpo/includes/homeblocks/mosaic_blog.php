<div class="block-wrap">
<ul class="block">

    <?php 	$my_query = new WP_Query('&showposts=1');	 
			while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
    
    		<?php get_template_part('/includes/sliders-types/blocks1');?>
    
    <?php endwhile; ?> 
    
    
    <?php 	$my_query = new WP_Query('&showposts=1&offset=1');	 
			while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
    
    		<?php get_template_part('/includes/sliders-types/blocks2');?>
    
    <?php endwhile; ?>
   
   
    <?php 	$my_query = new WP_Query('&showposts=1&offset=2');	 
			while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
    
    		<?php get_template_part('/includes/sliders-types/blocks3');?>
    
    <?php endwhile; ?>
    
    <?php 	$my_query = new WP_Query('&showposts=1&offset=3');	 
			while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
    
    		<?php get_template_part('/includes/sliders-types/blocks4');?>
    
    <?php endwhile; ?> 
        
    <?php 	$my_query = new WP_Query('&showposts=1&offset=4');	 
			while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
    
    		<?php get_template_part('/includes/sliders-types/blocks5');?>
    
    <?php endwhile; ?> 
    
    <?php 	$my_query = new WP_Query('&showposts=1&offset=5');	 
			while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
    
    		<?php get_template_part('/includes/sliders-types/blocks6');?>
    
    <?php endwhile; ?> 
    
        <?php 	$my_query = new WP_Query('&showposts=1&offset=6');	 
			while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID; ?>	
    
    		<?php get_template_part('/includes/sliders-types/blocks7');?>
    
    <?php endwhile; ?> <?php wp_reset_query(); ?>
    
    
</ul>	

<a class="blogmore" href="<?php echo stripslashes(get_option('themnific_url_blog'));?>"><?php _e('Browse All Articles','themnific');?></a>

</div>
<div class="clear"></div>