<div class="flexslider postslider" style="max-height:400px; padding-bottom:0; margin-bottom:25px; overflow:hidden">
        <ul class="slides">
			<?php    
				$large_image =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'fullsize', false, '' ); 
				$args = array(
				'post_type' => 'attachment',
				'numberposts' => -1,
				'post_status' => null,
				'post_parent' => $post->ID,
				);
				
				$attachments = get_posts( $args );
				 if ( $attachments ) {
					foreach ( $attachments as $attachment ) {
					   echo '<li>';
					   echo wp_get_attachment_image( $attachment->ID, 'folio-item' );
					   echo '</li>';
					  }
				 }
             ?>
             
        </ul>
    </div> 