<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

		<title><?php echo get_bloginfo('name');?></title>

		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/skitter.styles.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/media.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/rslides.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/font-awesome.min.css">

    <style>
      <?php if(!is_front_page()) {  ?>
          main {margin-top:20px;}
            main h1 {text-align: left;}
            main, main p {text-align: justify;}

          @media only screen
          and (max-width : 600px) {
            main, main p {text-align: left;}
          }
      <?php } ?>

      <?php if(is_page('sitemap')){ ?>
        .sidebar {display: none;}
        .page_content {width:100%;}
      <?php } ?>
    </style>

		<?php wp_head(); ?>
	</head>
	<body>
		<div class="protect-me">
			<div class="clearfix">
