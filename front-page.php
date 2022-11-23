<?php get_header(); ?>
<div class="videocontainer">
        <?php $image = get_field('banner_image'); ?>
        <video muted autoplay loop playsinline src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"> </video>
        <div class="overlay">
            <?php get_template_part('/template-parts/header_menu'); ?>
            <div class="sitetitle">
                <div class="maintitle ">
                    <h1>Textiel bedrukken op maat!</h1>
                    <p class="subtext">Bestel hier uw custom prints!</p>
                </div>
            </div>
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-8 text-center">
            <div class="content">
                <h1> <?= get_field('content_title'); ?></h1>
                <p class="subtext"> <?= get_field('content_text'); ?></p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>