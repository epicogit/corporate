<?php get_header(); ?>

<div class="container"> 

    <div id="content" class="eightcol">

			<h2 class="singletitle"><?php _e('Search Results for','themnific');?> "<?php echo $s; ?>"</h2>

		<?php if (have_posts()) : ?>

            <div class="hrline"><span></span></div>        

      		<ul class="archivepost">
          
    			<?php while (have_posts()) : the_post(); ?>
                                              		
            		<?php get_template_part('/includes/post-types/archivepost');?>
                    
   				<?php endwhile; ?>   <!-- end post -->
                    
     		</ul><!-- end latest posts section-->
            
            <div style="clear: both;"></div>
            
					<div class="pagination"><?php pagination('&laquo;', '&raquo;'); ?></div>

					<?php else : ?>
                    
						<!-- Not Found Handling -->
                        
                        <div class="hrlineB"></div>
                        
                        <h2 class="heading"><?php _e('Sorry, no posts matched your criteria.','themnific');?></h2>
                        
           				<h4><?php _e('Perhaps You will find something interesting form these lists...','themnific');?></h4>
                        
            			<div class="hrline"></div>
                        
						<?php get_template_part('/includes/uni-404-content');?>
                        
                        
					<?php endif; ?>

        </div><!-- end #homesingle-->

        <div id="sidebar"  class="fourcol">
               <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) : ?>
               <?php endif; ?>
        </div><!-- #sidebar -->
        
   
</div>
   

<?php get_footer(); ?>