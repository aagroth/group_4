<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width" />
  <?php wp_head(); ?>
</head>
<header class="headerpage">

    <div class="style-header__left">
        <?php wp_nav_menu(array('theme_location' => 'main-menu-left')); ?>
    </div> 

    <div class="style-header__title">
        <h2 ><?php echo get_bloginfo( 'name' ); ?></h2>
    </div>

    <div class="style-header__right">
        <?php wp_nav_menu(array('theme_location' => 'main-menu-right')); ?>
    </div>

</header>
<body <?php body_class(); ?>>