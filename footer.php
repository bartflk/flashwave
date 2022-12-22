<footer>
    <div class="container footer-container">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-6 text-center">
                <div class="colbox">
                    <a class="copyrighttext" href="">Textiel drukkerij</a>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </div>
            </div>
                <div class="col-12 col-sm-12 col-md-6 col-xl-6">
                    <div class="colbox">
                        <div class="fancyline"></div>
                        <p class="footerinfo" ><?= get_field('straat', 'options'); ?></p>
                        <p class="footerinfo" ><?= get_field('plaats_en_postcode', 'options'); ?></p>
                        <a class="footerinfo" href="mailto:<?= get_field('email', 'options'); ?>"><?= get_field('email', 'options'); ?></a>
                        <a class="footerinfo" href="tel:<?= get_field('telefoonnummer', 'options'); ?>"><?= get_field('telefoonnummer', 'options'); ?></a>
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