<?php get_header(); ?>
<!-- Template voor de header en de menu -->
<?php get_template_part('/template-parts/header_menu'); 
//ID van de post, moet op elke archive pagina om de ACF velden te laten werken
$shop_id = 16;
?>

<!-- Banner container -->
<div class="videocontainer-k">
    <!-- ACF veld voor de banner -->
    <?php $image = get_field('banner_image', $shop_id); ?>
    <img class="banner-class" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"></img>

    <!-- Overlay van de banner met ACF veld voor de titel en text -->
    <div class="overlay">
        <div class="sitetitle-k">
            <div class="maintitle ">
                <h1> <?= get_field('banner_title', $shop_id); ?></h1>
                <p class="subtext"> <?= get_field('banner_text', $shop_id); ?></p>
            </div>
        </div>
    </div>
</div>

<!-- Container -->
<div class="container container-items">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-ls-12 col-xl-12 ">
            <!-- Search bar functie wordt aangeroepen om het te laten zien in de div "search-form" -->
            <div class="search-form">
                <?php aws_get_search_form( true );?>
            </div>
        </div>
    </div>
    <!-- Container van de winkel -->
    <div class="container-shop">
        <div class="sidebar-menu">
            <div class="sidebar">
                <!-- Navigatie menu opgehald van wordpress met de naam "sidebar" -->
                <h2>- Kleding</h2>
                    <?php
                        wp_nav_menu(
                        array(
                            'menu' => 'sidebar',
                            'link_before' => '<span class="screen-reader-text">',
                            'link_after' => '</span>',
                        ));
                    ?>
            </div>
        </div>
        <!-- Producten overzicht wordt opgeroepen met een functie -->
        <div class="shop">
            <?php woocommerce_content(); ?>
        </div>
    </div>
</div>
<!-- get footer functie -->
<?php get_footer(); ?>