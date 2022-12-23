<?php /* Template Name: Design je eige */ ?>

<!-- Header en menu parts -->
<?php get_header(); ?>
<?php get_template_part('/template-parts/header_menu');?>

<!-- Container voor custom print pagina -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 justify-content-center">
            <div class="designblock">
                <h1>Design je eige kleding!</h1>
                <!-- Contact form wordt met een do_shortcode functie aangeroepen -->
                <?php
                echo do_shortcode('[contact-form-7 id="216" title="Custom print"]')
                ?>
            </div>
        </div>
        <div class="col-6">
            <p>
                Met behulp van moderne druktechnieken is het tegenwoordig mogelijk om je eigen unieke kledingontwerpen te printen met je eigen foto's en afbeeldingen. <br>
                Dit is een leuke manier om je persoonlijkheid te laten zien en om te laten zien wat je leuk vindt. <br>
                Het is ook een geweldige manier om cadeaus te geven aan vrienden en familie. <br>
                Er zijn veel verschillende websites en bedrijven die dit soort diensten aanbieden, dus neem even de tijd om rond te kijken en te ontdekken wat er allemaal mogelijk is.<br> 
                Succes met het creëren van je eigen unieke kledingontwerpen!<br>
            </p>
        </div>
    </div>
</div>


<?php get_footer(); ?>