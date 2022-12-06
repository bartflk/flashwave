<?php get_header(); ?>
<div class="videocontainer">
        <?php $image = get_field('banner_image'); ?>
        <video muted autoplay loop playsinline src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"> </video>
        <div class="overlay">
            <?php get_template_part('/template-parts/header_menu'); ?>
            <div class="sitetitle">
                <div class="maintitle ">
                <h1> <?= get_field('main_page_title'); ?></h1>
                <a href="#category" class="subtext"> 
                    <?= get_field('main_page_text'); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/> </svg>
                </a>
                </div>
            </div>
        </div>
    </div>

<div class="container my-5">
    <div class="row justify-content-center" id="category">
        <div class="col-12 col-md-6">
            <p class="overonstext"> <?php echo get_field('over_ons'); ?> </p>
        </div>
    </div>
</div>

<div class="container-fluid my-5">
    <div class="row justify-content-center" id="category">
        <div class="col-12 g-0">
        <?php $image = get_field('banner'); ?>
        <img class="banner-image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"></img>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center" id="category">
        <?php
            if( have_rows('category_field') ):
                while( have_rows('category_field') ) : the_row();
                    $image = get_sub_field('category_image'); ?>
                <div class="col-6 col-md-3 mb-3 image-container">
                    <div class="image">
                        <img class="category-image" src="<?= esc_url($image['sizes']["medium"]);  ?>" alt="">
                        <div class="card-title">
                            <?php $link = get_sub_field('category_title'); ?>
                           <a href="<?php echo $link['url']?>"><?php echo $link['title']?></a>
                        </div>
                    </div>
                </div>
            <?php endwhile;?>
       <?php endif;?>
    </div>
</div>



<?php get_footer(); ?>