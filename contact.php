<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>
<!-- Dit is een template voor de contact pagina -->
<?php get_template_part('/template-parts/header_menu');?>

<div class="videocontainer-k">
    <!-- Banner container -->
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
        <div class="col-6">
            <div class="form">
                <!-- een do_shortcode functie voor de contact formulier -->
                <?php
                echo do_shortcode('[contact-form-7 id="75" title="Contact form 1"]');
                ?>
            </div>
        </div>
        <div class="col-6">
            <div class="info">
                <p>Adres:</p>
                <a href="mailto:bartek.filik@hotmail.com">
                    <img src="http://p3.local/wp-content/themes/flashwave/assets/images/icons8-mail.svg" width="25" height="25">
                    bartek.filik@hotmail.com</a>
                <a href="tel:012 3456789">
                <img src="http://p3.local/wp-content/themes/flashwave/assets/images/icons8-phone.svg" width="25" height="25">    
                +012 3456789</a>
            </div>
        </div>
        <div class="col-12">
            <div class="emailform">
                <p>Meld je zelf aan voor onze mail list!!!</p>
                <!-- shortcode functie die roept een mailchimp mail list aanmelding form -->
            <?php echo do_shortcode('[yikes-mailchimp form="1"]'); ?>
            </div>
        </div>
        <div class="col-12">
            <!-- Google maps map iframe -->
            <div class="locatie">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39606.721753865044!2d5.243216731030162!3d51.65214419554635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6eec8e0e9a72b%3A0x603ab98882725f7c!2sVught!5e0!3m2!1snl!2snl!4v1668699771678!5m2!1snl!2snl" 
                  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>


