


<!-- inizio -->
<div class="highlights-carousel  grid--no-edge" data-component="highlights-carousel" data-module="product-highlight">
                  <div class="row">
                     <div class="h-image-carousel image  grid--no-edge--msm col-xs-12 col-sm-12">
                        <div class="h-image-carousel__inner js-h-image-carousel">




						   <?php $i = 0; $loop = new WP_Query( array( 'post_type' => 'myslidertype', 'posts_per_page' => '3' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php


					$large_image =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'fullsize', false, '' );
					$large_image = $large_image[0];
					$block_1 =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'home_thumb', false, '' );
					$block_1 = $block_1[0];
	    			$block_2 =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'home_small', false, '' );
	    			$block_2 = $block_2[0];
	    			$block_3 =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'home_medium', false, '' );
	    			$block_3 = $block_3[0];
	    			$block_4 =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'home_large', false, '' );
	    			$block_4 = $block_4[0];
	    			$block_5 =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'home_big', false, '' );
	    			$block_5 = $block_5[0];


		?>

                    	<div class="h-image-carousel__item">
                              <div class="h-carousel-image-item">
                                 <div class="product-highlight__image">
                                    <div class="product-highlight__slide">
                                       <div class="intrinsic intrinsic--cinema" data-component="lazy" data-imgsrc='[{"width":400,"height":267,"src":"<?php echo $block_1 ?>"},{"width":700,"height":467,"src":"<?php echo $block_2 ?>"},{"width":900,"height":600,"src":"<?php echo $block_3 ?>"},{"width":1200,"height":800,"src":"<?php echo $block_4 ?>"},{"width":1600,"height":1067,"src":"<?php echo $block_5 ?>"}]'></div>
                                    </div>
                                 </div>
                              </div>
															<div class="h-text-carousel__item grid--padding">
	                               <div class="h-carousel-text-item grid--padding-top">
																	 <p class="small caps upper bold spaced text--dark-epicoplay">
																		 <?php echo $i+1;  ?> &bull; <?php the_title(); ?>
																	 </p>
																	 <h1 class="h7 bold text--dark-epicoplay">





	 																		 <?php the_title(); ?>







	 																</h1>
																	<p class="text--dark-epicoplay">
																		<?php the_content(); ?>
																	</p>


	                               </div>
	                            </div>
                           </div>

													 <?php $i++;  ?>
                    <?php endwhile; ?>



        <?php wp_reset_query(); ?>






                        </div>

                     </div>



                  </div>
               </div>
