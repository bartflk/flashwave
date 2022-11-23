<?php
/**
 * 
 * p3's functions and definitions
 * @package p3  
 * @since p3 1.0 
 */ 

if ( ! function_exists( 'myfirsttheme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function myfirsttheme_setup() {
    
        /**
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         */
        load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );
    
        /**
         * Add default posts and comments RSS feed links to &lt;head&gt;.
         */
        add_theme_support( 'automatic-feed-links' );
    
        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support( 'post-thumbnails' );
        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    }
    endif; // myfirsttheme_setup
    add_action( 'after_setup_theme', 'myfirsttheme_setup' );



  
    add_action( 'after_setup_theme', 'woocommerce_support' );
    function woocommerce_support() {
       add_theme_support( 'woocommerce' );
    }                               
  
  add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
  
  add_filter( 'woocommerce_enqueue_styles', '__return_false' );




  function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

add_filter('use_block_editor_for_post', '__return_false');
add_action('wp_enqueue_scripts', function(){
    wp_dequeue_style('wp-block-library');
});

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

 add_theme_support( 'post-thumbnails', array( 'page' ) );  // Pages only
 add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
 add_theme_support( 'post-thumbnails' ); 

  // Hooking up our function to theme setup
  add_action( 'init', 'create_posttype' );
  
  function add_theme_scripts() {

    wp_enqueue_style( 'cssreset', get_template_directory_uri() . '/assets/css/reset.css', array(), '');  

    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js' );
    wp_enqueue_style( 'flashwave', get_template_directory_uri() . '/assets/css/flashwave.css', array(), '');  
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array (), '' , true );

    
      if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
      }
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts', 'wpbootstrap_enqueue_styles' );

  function themesharbor_disable_woocommerce_block_styles() {
    wp_dequeue_style( 'wc-blocks-style' );
  }
  add_action( 'wp_enqueue_scripts', 'themesharbor_disable_woocommerce_block_styles' );
  add_filter( 'woocommerce_show_page_title', '__return_false' );

  if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Footer informatie',
        'menu_title'    => 'Footer informatie',
        'menu_slug'     => 'footer-options',
        'capability'    => 'edit_posts',
        'redirect'      => false
));
}


// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Koop nu', 'woocommerce' ); 
}

// To change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'Koop nu', 'woocommerce' );
}

function wpb_woo_endpoint_title( $title, $id ) {
           
  if ( is_wc_endpoint_url( 'orders' ) && in_the_loop() ) {
      $title = "Bestellingen";
  }
  elseif ( is_wc_endpoint_url( 'edit-address' ) && in_the_loop() ) {
      $title = "Uw adres"; 
  }
  elseif ( is_wc_endpoint_url( 'payment-methods' ) && in_the_loop() ) {
      $title = "Betaalmethode";  
  }
  elseif ( is_wc_endpoint_url( 'edit-account' ) && in_the_loop() ) {
      $title = "Account informatie"; 
  }
elseif ( is_wc_endpoint_url( 'downloads' ) && in_the_loop() ) {
      $title = "Downloads"; 
  }
  return $title;
}
add_filter( 'the_title', 'wpb_woo_endpoint_title', 10, 2 );