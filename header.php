<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="80">
    <header class="header">

        <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark flex-column">
            <div class="container-fluid top-navbar">
                <ul class="d-flex justify-content-between container mt-2">
                    <li>
                        <i class="fab fa-whatsapp me-1"></i>
                        <a href="https://wa.me/+50670176705">Contactame</a>
                    </li>
                    <li class="d-flex">
                        <div class="me-4">
                            <i class="fab fa-linkedin me-1"></i>
                            <a href="https://www.linkedin.com/in/gustavo-adolfo-campos-tabares-589851112/">LinkedIn</a>
                        </div>
                        <div>
                            <i class="fab fa-facebook me-1"></i>
                            <a href="https://www.facebook.com/gustavo.campostabares">Facebook</a>
                        </div>
                    </li>
                </ul>

            </div>

            <div class="container mt-4">
                <div class="wrapper-offcanvas d-block d-lg-none mb-4">
                    <button class="navbar-toggler border-0 " type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel" data-bs-scroll="true" data-bs-backdrop="false">
                        <div class="offcanvas-header justify-content-start">
                            <button type="button" class="bg-transparent border-0 text-white" data-bs-dismiss="offcanvas" aria-label="Close">
                                <i class="fas fa-times"></i>
                            </button>

                        </div>
                        <div class="offcanvas-body bg-blue">
                            
                            <?php
                            $args = array(
                                'theme_location' => 'main-menu',
                                'container' => 'ul',
                                'container_class' => 'd-flex'
                            );

                            wp_nav_menu($args);
                            ?>
                        </div>
                    </div>
                </div>

                <div class="navbar__navigation collapse navbar-collapse justify-content-center align-items-center" id="navbarNav">
                    <?php
                    $args = array(
                        'theme_location' => 'main-menu',
                        'container' => 'nav',
                        'container_class' => 'navbar-nav',
                        'menu_class' => 'mt-2',
                        'items_wrap' => '<ul class="d-flex">%3$s</ul>'
                    );

                    wp_nav_menu($args);
                    ?>
                    
                </div>

            </div>
        </nav>

    </header>