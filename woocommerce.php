<?php get_header(); ?>
<?php get_template_part('/template-parts/header_menu'); 
$shop_id = 16;
?>


<div class="videocontainer-k">

    <?php $image = get_field('banner_image', $shop_id); ?>
    <img class="banner-class" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"></img>

    <div class="overlay">
        <div class="sitetitle-k">
            <div class="maintitle ">
                <h1> <?= get_field('banner_title', $shop_id); ?></h1>
                <p class="subtext"> <?= get_field('banner_text', $shop_id); ?></p>
            </div>
        </div>
    </div>
</div>

<div class="container container-items">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-ls-12 col-xl-12 ">
            <div class="search-form">
                <?php aws_get_search_form( true );?>
            </div>
        </div>
    </div>
    <div class="container-shop">
        <div class="sidebar-menu">
            <div class="sidebar">
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
        <div class="shop">
            <?php woocommerce_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>