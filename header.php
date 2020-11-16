<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta content="<?php echo is_singular()
		    ? get_the_excerpt()
		    : get_bloginfo('description'); ?>"
		    name="description">
    <meta content="<?php echo get_bloginfo('name'); ?> - <?php echo is_single()
	        ? get_the_title()
	        : get_bloginfo('description'); ?>"
		    property="og:title">
    <meta content="<?php echo is_singular()
			        ? get_the_excerpt()
			        : get_bloginfo('description'); ?>"
		    property="og:description">
    <meta content="<?php echo get_bloginfo('name'); ?>  - <?php echo is_single()
			    ? get_the_title()
			    : get_bloginfo('description'); ?>"
		    property="twitter:title">
    <meta content="<?php echo is_singular()
			        ? get_the_excerpt()
			        : get_bloginfo('description'); ?>"
		    property="twitter:description">
    <meta property="og:type" content="website">

    <?php
        $imgURL = !is_singular()
	        ? get_template_directory_uri() . "/assets/images/meta.png"
	        : get_the_post_thumbnail_url();

        $imgTYPE = !is_singular()
	        ? "png"
	        : "jpeg";
    ?>
    <meta property="og:image" content="<?php echo $imgURL; ?>" />
    <meta property="og:image:secure_url" content="<?php echo $imgURL; ?>" />
    <meta property="og:image:type" content="image/<?php echo $imgTYPE;?>" />

    <meta content="summary_large_image" name="twitter:card">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <title> <?php echo get_bloginfo(); ?> - <?php echo is_singular()
		    ? get_the_title()
		    : get_bloginfo('description'); ?> </title>

    <link href="<?php echo get_bloginfo('template_url'); ?>/assets/images/favicon-32x32.svg"
		    rel="shortcut icon"
		    type="image/x-icon">
	
    <link href="<?php echo get_bloginfo('template_url'); ?>/assets/images/favicon-256x256.svg"
		    rel="apple-touch-icon">

    <meta name="author" content="tu154">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
</head>

<body class="body">