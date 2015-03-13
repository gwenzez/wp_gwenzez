<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'> 
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>


<div class="navbar clearfix">
    <div class="wrapper">
      <div class="burger">&#9776;</div>
      <?php wp_nav_menu(array(
        'container' => false,
        'theme_location'=>'primary'
        )); ?>
    </div><!--wrapper-->
  </div><!--navbar-->

