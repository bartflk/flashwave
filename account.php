<?php /* Template Name: Account */ ?>
<?php get_header(); 
?>
<!-- template voor de account pagina -->
<?php get_template_part('/template-parts/header_menu');?>

<div class="container container-items">
    <div class="title">
    <h1>
        <!-- Titel van de pagina if while loop -->
        <?php 
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); 
                //Dit while loop checkt wat de title is van de pagina die echo'd de titel van de string
                echo the_title($title);
                //
            } // end while
        } // end if
         ?>
    </h1>
    </div>
    <div class="cart">

    <!-- Banner container -->
        <div class="fancy-line fancy-padding"></div>
            <?= do_shortcode('[woocommerce_my_account]');?>
        <div class="fancy-line fancy-padding"></div>
    </div>
</div>

<?php get_footer(); ?>




