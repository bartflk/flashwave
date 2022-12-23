

<?php /* Template Name: Checkout */ ?>
<?php get_header(); ?>
<!-- template voor de checkout pagina -->
<?php get_template_part('/template-parts/header_menu');?>

<div class="container container-items">
    <div class="title">
    <h1>Checkout</h1>
    </div>
    <!-- shortcode die roept de checkout sherm aan -->
    <div class="checkout">
        <div class="fancy-line fancy-padding"></div>
            <?= do_shortcode('[woocommerce_checkout]');?>
        <div class="fancy-line fancy-padding"></div>
    </div>
</div>

<?php get_footer(); ?>




