<?php /* Template Name: Cart */ ?>
<?php get_header(); ?>
<?php get_template_part('/template-parts/header_menu');?>
<!-- container cart pagina -->
<div class="container container-items">
    <div class="title">
    <h1>Winkelwagen</h1>
    </div>
    <div class="cart">
        <!-- winkel karretje wordt aangeroepen met een shortcode  -->
        <div class="fancy-line fancy-padding"></div>
            <?= do_shortcode('[woocommerce_cart]');?>
        <div class="fancy-line fancy-padding"></div>
    </div>
</div>

<?php get_footer(); ?>




