<div class="container gx-0 header-menu">

        <div class="row d-flex m-0">
            <div class="col-12 px-0 m-0">
            <div class="phone">
                <a class="tel" href="tel:024 76 00 515 ">024 76 00 515</a>
                </div>
            <nav class="navbar navbar-expand-lg" aria-label="navbar">
            <div class="container px-0">
                <a class="navbar-brand" href="">Textiel drukkerij</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarcollapsemenu"
                aria-controls="navbarcollapsemenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarcollapsemenu">
                <?php
                        wp_nav_menu(
                        array(
                            'menu' => 'Main menu',
                            'link_before' => '<span class="screen-reader-text">',
                            'link_after' => '</span>',
                        ));
                    ?>
                </div>
            </div>
        </nav>
            </div>
        </div>
    </div>