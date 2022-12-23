<?php /* Template Name: Over ons */ ?>
<?php get_header(); ?>
<?php get_template_part('/template-parts/header_menu');?>
<!-- Banner container -->
<div class="videocontainer-k">
    <!-- Banner velden van AFC voor afbeelding, titel en tekst-->
    <?php $image = get_field('banner_image'); ?>
    <img class="banner-class" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"></img>
    <div class="overlay">
        <div class="sitetitle-k">
            <div class="maintitle ">
                <h1> <?= get_field('banner_title'); ?></h1>
                <p class="subtext"> <?= get_field('banner_text'); ?></p>
            </div>
        </div>
    </div>
</div>
<!-- container velden voor de content "over ons" -->
        <div class="container about-us">
            <div class="row">
                <div class="col-8">
                    <p> <?= get_field('over_ons_bedrijf'); ?></p>    
                <div>
                </div>
                </div>
                <div class="col-4">
                    <?php $image = get_field('over_ons_img'); ?>
                    <img class="image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"></img>
                </div>
            </div>
        </div>    
    </div>
</div>

<?php get_footer(); ?>




