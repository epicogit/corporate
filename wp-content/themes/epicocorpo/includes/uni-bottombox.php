            <div class="fifthcol first"> 
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 1") ) : ?>
            
                	<?php get_template_part('/includes/uni-searchformhead'); ?>
                
                    <div class="aboutus">
                        
                        <p><?php echo stripslashes(get_option('themnific_aboutus_text'));?></p>
                    
						<?php if(get_option('themnific_about_img')) { ?>
                        
                        <a href="<?php echo home_url(); ?>/"><img src="<?php echo get_option('themnific_about_img');?>" alt="<?php bloginfo('name'); ?>"/></a><?php } 
                        
                        else {} ?>
                        <div style="clear: both;"></div>
                    
                    </div>
                    
                <?php endif; ?>
            </div>
            
            
            <div class="fifthcol">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 2") ) : ?>
                <?php endif; ?>
            </div>
            
            <div class="fifthcol"> 
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 3") ) : ?>
                <?php endif; ?>
            </div>
            
            <div class="fifthcol"> 
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 4") ) : ?>
                <?php endif; ?>
            </div>
            
            <div class="fifthcol" style="width:20%"> 
            
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer 5") ) : ?>
                <?php endif; ?>
                
            </div>