<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="utf-8" />
<title><?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' ); echo " | $site_description"; if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s','themnific'), max( $paged, $page ) ); ?></title>

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, minimal-ui, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#333333">
<meta name="msapplication-TileColor" content="#ffc40d">
<meta name="theme-color" content="#1d1d1d">


	<script type='application/ld+json'>
	{
		"@context": "https://schema.org",
		"@type": "WebSite",
		"@id": "http://epicocorpo:8888/#website",
		"url": "http://epicocorpo:8888/",
		"name": "Gogo",
		"potentialAction": {
			"@type": "SearchAction",
			"target": "https://epicocorpo:8888/?s={search_term_string}",
			"query-input": "required name=search_term_string"
		}
	}
	</script>



    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <!-- load main css stylesheet -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/build/app.min.css" media="screen" />
    <!--[if gte IE 8]><link
rel="stylesheet" href="wp-content/themes/status/build/ie9.css"> <script>var browser = 'ie9';</script> <![endif]-->

	<script>
        document.documentElement.className = document.documentElement.className + ' yes-js js_active js'
    </script>








<?php wp_head(); ?>
</head>


<body class="is-loading no-user-logged-in">

<?php get_template_part('/includes/defs'); ?>
<?php get_template_part('/includes/home-navigation'); ?>


<div class="image hide-till-m add-to-cart--image">
		<img src=""></div>
	<div class="shadow"></div>
