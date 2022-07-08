<div class="tab-post">

	<?php if ( has_post_thumbnail()) : ?>
    
         <a href="<?php the_permalink(); ?>" title="<?php the_title();?>" >
         <?php the_post_thumbnail( 'tabs',array('title' => "")); ?>
         </a>
         
    <?php endif; ?>

        <h3><a href="<?php the_permalink(); ?>"><?php echo short_title('...', 10);?></a></h3>
        
        <p class="widgetmeta"><?php the_time('M j, y') ?> &bull; <?php comments_popup_link(); ?></p>
        
</div>