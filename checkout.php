

<?php /* Template Name: Checkout */ ?>
<?php get_header(); ?>
<?php get_template_part('/template-parts/header_menu');?>

<div class="container container-items">
    <div class="title">
    <h1>Checkout</h1>
    </div>
    <div class="checkout">
        <div class="fancy-line fancy-padding"></div>
            <?= do_shortcode('[woocommerce_checkout]');?>
        <div class="fancy-line fancy-padding"></div>
    </div>
</div>

<?php get_footer(); ?>




