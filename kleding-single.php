<?php get_header(); ?>

<div class="banner">
    <?php $image = get_field('banner_image'); ?>
    <img class="bannerimage" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
</div>

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <div class="content">
            single page voor kleding producten

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>