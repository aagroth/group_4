<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <?php wp_head(); ?>
</head>
<header class="headerpage">

    <div class="style-header__left">
        <?php wp_nav_menu(array('theme_location' => 'main-menu-left')); ?>
    </div> 

    <div class="style-header__title">
        <h2><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h2>
    </div>

    <div class="style-header__right">
        <?php wp_nav_menu(array('theme_location' => 'main-menu-right')); ?>
    </div>

</header>
<body <?php body_class(); ?>>