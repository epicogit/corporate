<?php $type_slider_mag = get_option('themnific_type_slider_mag'); ?>
<?php if($type_slider_mag == 'multislider'){
	get_template_part('/includes/sliders/multislider' );
	}elseif($type_slider_mag == 'flexslider'){
	get_template_part('/includes/sliders/flexslider' );
	} else {
	get_template_part('/includes/sliders/multislider' );
}?>