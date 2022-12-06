<footer>
    <div class="container footer-container">
        <div class="row">
            <div class="col-12 col-md-2 col-xl-3 text-center">
                <div class="colbox">
                    <a class="copyrighttext" href="">Textiel drukkerij</a>
                </div>
            </div>
                <div class="col-12 col-sm-6 offset-md-2 col-md-4  offset-xl-3 col-xl-3 ">
                    <div class="colbox">

                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <div class="colbox">
                        <div class="fancyline"></div>
                        <p class="" ><?= get_field('straat', 'options'); ?></p>
                        <p class="" ><?= get_field('plaats_en_postcode', 'options'); ?></p>
                        <a class="" href="mailto:<?= get_field('email', 'options'); ?>"><?= get_field('email', 'options'); ?></a>
                        <a class="" href="tel:<?= get_field('telefoonnummer', 'options'); ?>"><?= get_field('telefoonnummer', 'options'); ?></a>
                        <div class="fancyline"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p class="copyrighttext">Copyright© 2022 Bartek Filik. Alle rechten voorbehouden.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </footer>
    <?php wp_footer();?>
    </body>

    </html>