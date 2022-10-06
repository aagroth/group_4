<?php
add_action('wp_enqueue_scripts', 'fyrklovern_enqueue');

function fyrklovern_enqueue()
{
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_theme_support('post-thumbnails');

register_nav_menus(array('main-menu-left' => 'Main menu left'));
register_nav_menus(array('main-menu-right' => 'Main menu right'));
register_nav_menus(array('footer-menu-right' => 'Footer menu right'));
register_nav_menus(array('footer-menu-left' => 'Footer menu left'));

// Iniziate acf blocks
add_action('acf/init', 'my_acf_init_block_types');

function my_acf_init_block_types()
{

  // Check function exists.
  if (function_exists('acf_register_block_type')) {

    // register a hero block.
    acf_register_block_type(array(
      'name'              => 'hero',
      'title'             => __('Hero'),
      'description'       => __('A block for fullwidth hero image'),
      'render_template'   => 'page-blocks/hero.php',
      'category'          => 'formatting',
      'icon'              => 'format-image',
      'keywords'          => array('hero', 'heroimage'),
    ));
    acf_register_block_type(array(
      'name'              => 'info_block',
      'title'             => __('Info block'),
      'description'       => __('A block for with heading and paragraph'),
      'render_template'   => 'page-blocks/info-block.php',
      'category'          => 'formatting',
      'icon'              => 'format-image',
      'keywords'          => array('info block'),
    ));
    acf_register_block_type(array(
      'name'              => 'fullwidth_image_block',
      'title'             => __('Fullwidth image block'),
      'description'       => __('A block with a fullwidth image with heading and paragraph'),
      'render_template'   => 'page-blocks/fullwidth-image-block.php',
      'category'          => 'formatting',
      'icon'              => 'format-image',
      'keywords'          => array('fullwidth image block'),

    ));
    acf_register_block_type(array(
      'name'              => 'product_category_block',
      'title'             => __('Product category block'),
      'description'       => __('A block that display product categories'),
      'render_template'   => 'page-blocks/product-category-block.php',
      'category'          => 'formatting',
      'icon'              => 'format-image',
      'keywords'          => array( 'product category block' ),
    ));
    acf_register_block_type(array(
      'name'              => 'info_block_image_left',
      'title'             => __('Info block image left'),
      'description'       => __('A block with a image and information'),
      'render_template'   => 'page-blocks/info-block-image-left.php',
      'category'          => 'formatting',
      'icon'              => 'format-image',
      'keywords'          => array( 'left image block' ),
    ));
    acf_register_block_type(array(
      'name'              => 'info_block_image_right',
      'title'             => __('Info block image right'),
      'description'       => __('A block with a image and information'),
      'render_template'   => 'page-blocks/info-block-image-right.php',
      'category'          => 'formatting',
      'icon'              => 'format-image',
      'keywords'          => array( 'right image block' ),
    ));
    acf_register_block_type(array(
      'name'              => 'recommended_category_block',
      'title'             => __('Recommended category block'),
      'description'       => __('A block that display product categories'),
      'render_template'   => 'page-blocks/recommended-category-block.php',
      'category'          => 'formatting',
      'icon'              => 'format-image',
      'keywords'          => array( 'recommended category block' ),
    ));
    acf_register_block_type(array(
      'name'              => 'recommended_products_block',
      'title'             => __('Recommended products block'),
      'description'       => __('A block that display two recommended products'),
      'render_template'   => 'page-blocks/recommended-product-block.php',
      'category'          => 'formatting',
      'icon'              => 'format-image',
      'keywords'          => array( 'recommended products block' ),

      'keywords'          => array('right image block'),
    ));
    acf_register_block_type(array(
      'name'              => 'product_block_image_left',
      'title'             => __('Product block image left'),
      'description'       => __('A block with a product and information'),
      'render_template'   => 'page-blocks/product-block-image-left.php',
      'category'          => 'formatting',
      'icon'              => 'format-image',
      'keywords'          => array('product image block'),
    ));
  }
}

// Create custom post types 
function create_posttype()
{
  register_post_type(
    'wpll_store',
    array(
      'labels' => array(
        'name' => __('Stores'),
        'singular_name' => __('Store')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'store'),
    )
  );
}
add_action('init', 'create_posttype');

// Add theme support for post image 
add_theme_support('post-thumbnails');

// Customize the excerpt for blogs 
function wpdocs_custom_excerpt_length()
{
  return 17;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);

function wpdocs_excerpt_more()
{
  return '';
}
add_filter('excerpt_more', 'wpdocs_excerpt_more');


// woocommerce 
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start()
{
  echo '<section id="main">';
}

function my_theme_wrapper_end()
{
  echo '</section>';
}

function mytheme_add_woocommerce_support()
{
  add_theme_support('woocommerce', array(
    'thumbnail_image_width' => 300,
    'single_image_width'    => 300,

    'product_grid'          => array(
      'default_rows'    => 3,
      'min_rows'        => 2,
      'max_rows'        => 8,
      'default_columns' => 4,
      'min_columns'     => 2,
      'max_columns'     => 5,
    ),
  ));
}

add_action('after_setup_theme', 'mytheme_add_woocommerce_support');
add_filter('woocommerce_enqueue_styles', '__return_false');
// add_filter('woocommerce_show_page_title', '__return_false');
add_filter('woocommerce_category_description_heading', '__return_false');
add_filter( 'woocommerce_show_page_title', '__return_false' ); 
add_action( 'woocommerce_archive_description', 'begining_of_header', 1 );
add_action( 'woocommerce_archive_description', 'end_of_header' );


function begining_of_header() {
  echo "<div class='woocommerceHeader'>";

  echo "<h1 class='page-title'>";
  echo woocommerce_page_title();
  echo "</h1>";

}
function end_of_header() {
  echo "</div>";
}



add_action('woocommerce_after_shop_loop_item', 'woo_show_excerpt_shop_page', 5);
function woo_show_excerpt_shop_page()
{
  global $product;

  echo $product->post->post_excerpt;
}

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

// unset fields for billing company and billing adress 2
add_filter( 'woocommerce_checkout_fields' , 'remove_billing_fields_checkout' );
 
function remove_billing_fields_checkout( $fields ) {
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_2']);

  return $fields;
}