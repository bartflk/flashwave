<div class="container gx-0 header-menu">
    <!-- Dit bestand is de menu van de header -->
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
                    <svg fill="var(--button-color)" class="hamburger" viewbox="0 0 100 100" width="50">
                        <rect class="line top" width="80" height="10" x="10" y="25" rx="5"></rect>
                        <rect class="line middle" width="80" height="10" x="10" y="45" rx="5"></rect>
                        <rect class="line bottom" width="80" height="10" x="10" y="65" rx="5"></rect>
                    </svg>
                </button>
            <div class="collapse navbar-collapse" id="navbarcollapsemenu">
                <!-- Menu wordt met een wp_nav_menu functie aangeroepen met de naam main menu -->
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