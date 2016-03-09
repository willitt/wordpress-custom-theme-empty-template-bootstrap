<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url') ?>/images/favicon.ico">
    <?php wp_head(); ?>
</head>
<body>

<nav class="navbar navbar-default" id="top-nav">
  <div class = "container-fluid">
    <div class = "navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navitems">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>       
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
    </div>
        <?php
        wp_nav_menu(array('menu'=>'MainMenu','container'=>'div','container_class'=>'collapse navbar-collapse','container_id'=>'navitems','menu_class'=>'nav navbar-nav navbar-right'));
        ?>
  </div>
</nav>