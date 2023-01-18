<?php
/**
 * 
 * p3's functions and definitions
 * @package p3  
 * @since p3 1.0 
 */ 

if ( ! function_exists( 'myfirsttheme_setup' ) ) :
    function myfirsttheme_setup() {
        load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    }
    endif;
    add_action( 'after_setup_theme', 'myfirsttheme_setup' );



  // support voor woocommerce plugin
    add_action( 'after_setup_theme', 'woocommerce_support' );
    function woocommerce_support() {
       add_theme_support( 'woocommerce' );
    }                               
  
  add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
  // dit zorgt dat geen woocommerce css bestanden laden
  add_filter( 'woocommerce_enqueue_styles', '__return_false' );



// Dit laat de admin bar niet zien als je ingelogd bent
  function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

add_filter('use_block_editor_for_post', '__return_false');
add_action('wp_enqueue_scripts', function(){
    wp_dequeue_style('wp-block-library');
});
// registratie van menu's die gebruikt gaan worden op de website
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );
// Support voor thumbnails, formats en page thumbnails
 add_theme_support( 'post-thumbnails', array( 'page' ) );  // Pages only
 add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
 add_theme_support( 'post-thumbnails' ); 
 //een nieuw post type maken
 add_action( 'init', 'create_posttype' );
  
  function add_theme_scripts() {
// Alle CSS en Scripts worden hier ingeladen en neergezet
    wp_enqueue_style( 'cssreset', get_template_directory_uri() . '/assets/css/reset.css', array(), '');  
    wp_enqueue_style( 'iconlibrary', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
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
  //override van woocommerce naar bootstrap css
  add_action( 'wp_enqueue_scripts', 'themesharbor_disable_woocommerce_block_styles' );
  add_filter( 'woocommerce_show_page_title', '__return_false' );

  // Opties pagina maken in de admin panel om de footer informatie beheerbaar te maken
  if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Footer informatie',
        'menu_title'    => 'Footer informatie',
        'menu_slug'     => 'footer-options',
        'capability'    => 'edit_posts',
        'redirect'      => false
));
}
// Dit filter zorgt dat de add to car text in nederlands koop nu zegt
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Koop nu', 'woocommerce' ); 
}
// To change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'Koop nu', 'woocommerce' );
}
// Veranderen van namen op de admin pannel
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


// Functie om een dropdown te maken voor wordpress custom forms 7 plugin
// Alle producten moeten in een dropdown komen om ze selecteerbaar te maken
function wpcf7_form_dropdown_products ( $scanned_tag, $replace ) {  
  
  if ( $scanned_tag['name'] != 'product' )  
      return $scanned_tag;

  // loop over alle producten
  $rows = get_posts(
    array ( 
     'post_type' => 'product',
     'numberposts' => -1,  
     'orderby' => 'title',  
     'order' => 'ASC' 
      )
  );  


  if ( ! $rows )  
      return $scanned_tag;

  foreach ( $rows as $row ) {  
      $scanned_tag['raw_values'][] = $row->post_title . '|' . $row->post_title;
  }

  $pipes = new WPCF7_Pipes($scanned_tag['raw_values']);

  $scanned_tag['values'] = $pipes->collect_befores();
  $scanned_tag['labels'] = $pipes->collect_afters();
  $scanned_tag['pipes'] = $pipes;

  return $scanned_tag;  
}  
// Voeg toe een tag die je kan roepen in de form plugin overzicht 
add_filter( 'wpcf7_form_tag', 'wpcf7_form_dropdown_products', 10, 2);  