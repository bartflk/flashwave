<?php /* Template Name: Account */ ?>
<?php get_header(); 
?>
<?php get_template_part('/template-parts/header_menu');?>

<div class="container container-items">
    <div class="title">
    <h1>
        <?php 
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); 
                //
                echo the_title($title);
                //
            } // end while
        } // end if
         ?>
    </h1>
    </div>
    <div class="cart">
        <div class="fancy-line fancy-padding"></div>
            <?= do_shortcode('[woocommerce_my_account]');?>
        <div class="fancy-line fancy-padding"></div>
    </div>
</div>

<?php get_footer(); ?>




