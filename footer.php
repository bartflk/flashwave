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
                        <h3></h3>
                        <p>footer menu</p>
                        <p>footer menu</p>
                        <p>footer menu</p>
                        <p>footer menu</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <div class="colbox">
                        <h3></h3>
                        <p><?= get_field('straat', 'options'); ?></p>
                        <p><?= get_field('plaats_en_postcode', 'options'); ?></p>
                        <a href="mailto:<?= get_field('email', 'options'); ?>"><?= get_field('email', 'options'); ?></a>
                        <a href="tel:<?= get_field('telefoonnummer', 'options'); ?>"><?= get_field('telefoonnummer', 'options'); ?></a>
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