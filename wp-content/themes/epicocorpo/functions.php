<?php


if ( ! isset( $content_width ) )
	$content_width = 787;
	
	
/*-----------------------------------------------------------------------------------
- Start Themnific Functions - Please refrain from editing this section 
----------------------------------------------------------------------------------- */

// Set path to Themnific Framework and theme specific functions
$functions_path = get_template_directory() . '/functions/';
$includes_path = get_template_directory() . '/functions/';

// Framework
require_once ($functions_path . 'admin-init.php');						// Framework Init

// Theme specific functionality
require_once ($includes_path . 'theme-options.php'); 					// Options panel settings and custom settings
require_once ($includes_path . 'theme-actions.php');					// Theme actions & user defined hooks
require_once ($includes_path . 'theme-scripts.php'); 					// Load JavaScript via wp_enqueue_script


//Add Custom Post Types
require_once ($includes_path . 'posttypes/ptype-portfolio.php'); 		// portfolio post type
require_once ($includes_path . 'posttypes/ptype-layout.php'); 			// layout post type
require_once ($includes_path . 'posttypes/ptype-slider.php'); 			// slider post type
require_once ($includes_path . 'posttypes/ptype-services.php'); 		// services post type
require_once ($includes_path . 'posttypes/ptype-clients.php'); 			// clients post type
require_once ($includes_path . 'posttypes/ptype-pricing-tabs.php'); 	// pricing tabs post type
require_once ($includes_path . 'posttypes/post-metabox.php'); 			// custom meta box

/*-----------------------------------------------------------------------------------
- Loads all the .php files found in /admin/widgets/ directory
----------------------------------------------------------------------------------- */

	$preview_template = _preview_theme_template_filter();

	if(!empty($preview_template)){
		$widgets_dir = WP_CONTENT_DIR . "/themes/".$preview_template."/functions/widgets/";
	} else {
    	$widgets_dir = WP_CONTENT_DIR . "/themes/".get_option('template')."/functions/widgets/";
    }
    
    if (@is_dir($widgets_dir)) {
		$widgets_dh = opendir($widgets_dir);
		while (($widgets_file = readdir($widgets_dh)) !== false) {
  	
			if(strpos($widgets_file,'.php') && $widgets_file != "widget-blank.php") {
				include_once($widgets_dir . $widgets_file);
			
			}
		}
		closedir($widgets_dh);
	}



// Post thumbnail support
if (function_exists('add_theme_support')) {
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(640, 265, true); // Normal post thumbnails
			// first try
				add_image_size('block_1', 320, 200, true ); //(cropped)
				add_image_size('block_2', 428, 400, true ); //(cropped)
				add_image_size('block_3', 212, 200, true ); //(cropped)
				add_image_size('block_4', 428, 200, true ); //(cropped)
				add_image_size('block_5', 320, 400, true ); //(cropped)
	add_image_size('format-gallery', 622, 400, true);
	add_image_size('format-image', 622, 9999);
	add_image_size('format-single', 622, 220, true); //(cropped)
	add_image_size('folio', 300, 230, true ); //(cropped)
	add_image_size('folio_slider', 960, 450, true ); //(cropped)
	add_image_size('clients', 239, 200, true); //(cropped)
	add_image_size('tabs', 50, 40, true); //(cropped)
}

function thumb_url(){
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 2100,2100 ));
return $src[0];
}


// Add Theme Support Functions
add_editor_style();
add_theme_support( 'post-formats', array( 'video','audio', 'gallery', 'image', 'quote', 'link' ) );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );

// widgets
if ( function_exists('register_sidebar') ) 
{ 

// sidebar widget
register_sidebar(array('name' => 'Sidebar','before_widget' => '','after_widget' => '','before_title' => '<h2>','after_title' => '</h2>')); 
}

// Make theme available for translation
	load_theme_textdomain( 'themnific', get_template_directory() . '/lang' );



// Shordcodes
require_once (get_template_directory().'/functions/admin-shortcodes.php' );				// Shortcodes
require_once (get_template_directory().'/functions/admin-shortcode-generator.php' ); 	// Shortcode generator 

// Use shortcodes in text widgets.
add_filter('widget_text', 'do_shortcode');

// navigation menu
function register_main_menus() {
	register_nav_menus(
		array(
			'home-menu' => "Home Menu" ,
			'main-menu' => "Main Menu"
		)
	);
};
if (function_exists('register_nav_menus')) add_action( 'init', 'register_main_menus' );



// Shorten post title
function short_title($after = '', $length) {
	$mytitle = explode(' ', get_the_title(), $length);
	if (count($mytitle)>=$length) {
		array_pop($mytitle);
		$mytitle = implode(" ",$mytitle). $after;
	} else {
		$mytitle = implode(" ",$mytitle);
	}
	return $mytitle;
}


// icons - font awesome
function tmnf_icon() {
	
	if(has_post_format('video')) {return '<i class="icon-play-circle"></i>';
	}elseif(has_post_format('audio')) {return '<i class="icon-music"></i>';
	}elseif(has_post_format('gallery')) {return '<i class="icon-picture"></i>';	
	}elseif(has_post_format('link')) {return '<i class="icon-signout"></i>';	
	}elseif(has_post_format('image')) {return '<i class="icon-camera"></i>';		
	}elseif(has_post_format('quote')) {return '<i class="icon-quote-right"></i>';	
	} else {'';}	
	
}


// icons ribbons - font awesome
function tmnf_ribbon() {
	
	if(has_post_format('video')) {return '<span class="ribbon"></span><span class="ribbon_icon"><i class="icon-play-circle"></i></span>';
	}elseif(has_post_format('audio')) {return '<span class="ribbon"></span><span class="ribbon_icon"><i class="icon-music"></i></span>';
	}elseif(has_post_format('gallery')) {return '<span class="ribbon"></span><span class="ribbon_icon"><i class="icon-picture"></i></span>';
	}elseif(has_post_format('link')) {return '<span class="ribbon"></span><span class="ribbon_icon"><i class="icon-signout"></i></span>';
	}elseif(has_post_format('image')) {return '<span class="ribbon"></span><span class="ribbon_icon"><i class="icon-camera"></i></span>';
	}elseif(has_post_format('quote')) {return '<span class="ribbon"></span><span class="ribbon_icon"><i class="icon-quote-right"></i></span>';
	} else {'';}	
	
}



// managed excerpt

function tmnf_excerptlength_teaser($length) {
    return 90;
    }
function tmnf_excerptlength_index($length) {
    return 13;
    }
function tmnf_excerptmore($more) {
    return '...';
    }

add_filter( 'wp_get_attachment_link', 'gallery_prettyPhoto');

// new excerpt function

function tmnf_excerpt($length_callback='', $more_callback='') {
    global $post;
    if(function_exists($length_callback)){
    add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
    add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>'.$output.'</p>';
    echo $output;
    }



// Old Shorten Excerpt text for use in theme
function themnific_excerpt($text, $chars = 1620) {
	$text = $text." ";
	$text = substr($text,0,$chars);
	$text = substr($text,0,strrpos($text,' '));
	$text = $text."...";
	return $text;
}

function trim_excerpt($text) {
  return rtrim($text,'[...]');
}
add_filter('get_the_excerpt', 'trim_excerpt');




// automatically add prettyPhoto rel attributes to embedded images

function gallery_prettyPhoto ($content) {

	// add checks if you want to add prettyPhoto on certain places (archives etc).

	return str_replace("<a", "<a rel='prettyPhoto[gallery]'", $content);

}

function insert_prettyPhoto_rel($content) {
	$pattern = '/<a(.*?)href="(.*?).(bmp|gif|jpeg|jpg|png)"(.*?)>/i';
  	$replacement = '<a$1href="$2.$3" rel=\'prettyPhoto\'$4>';
	$content = preg_replace( $pattern, $replacement, $content );
	return $content;
}
add_filter( 'the_content', 'insert_prettyPhoto_rel' );


// pagination

function pagination($prev = '&laquo;', $next = '&raquo;') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    $pagination = array(
        'base' => @add_query_arg('paged','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'prev_text' => __('Previous','themnific'),
        'next_text' => __('Next','themnific'),
        'type' => 'plain'
);
    if( $wp_rewrite->using_permalinks() )
        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

    if( !empty($wp_query->query_vars['s']) )
        $pagination['add_args'] = array( 's' => get_query_var( 's' ) );

    echo paginate_links( $pagination );
};



//Breadcrumbs
function the_breadcrumb() {
	if (!is_home()) {

		echo '<a href="'. home_url().'">';
		echo '<i class="icon-home"></i> ';
		echo "</a> &raquo; ";
		if (is_category() || is_single()) {
		the_category(', ');
		if (is_single()) {
		echo " &raquo; ";
	echo short_title('...', 6);
	}
	} elseif (is_page()) {
	echo the_title();}
	}
}





function attachment_toolbox($size = thumbnail) {

	if($images = get_children(array(
		'post_parent'    => get_the_ID(),
		'post_type'      => 'attachment',
		'numberposts'    => -1, // show all
		'post_status'    => null,
		'post_mime_type' => 'image',
	))) {
		foreach($images as $image) {
			$attimg   = wp_get_attachment_image($image->ID,$size);
			$atturl   = wp_get_attachment_url($image->ID);
			$attlink  = get_attachment_link($image->ID);
			$postlink = get_permalink($image->post_parent);
			$atttitle = apply_filters('the_title',$image->post_title);

			echo '<p><strong>wp_get_attachment_image()</strong><br />'.$attimg.'</p>';
			echo '<p><strong>wp_get_attachment_url()</strong><br />'.$atturl.'</p>';
		}
	}
}



?>