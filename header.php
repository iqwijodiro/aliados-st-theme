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
                <div class="d-flex justify-content-between container">
                    <div>
                        <i class="fas fa-map-marked-alt me-1"></i>
                        <a href="#">País de Ubicación</a>
                    </div>
                    <div class="d-flex">
                        <div class="me-4">
                            <i class="fab fa-linkedin me-1"></i>
                            <a href="#">LinkedIn</a>
                        </div>
                        <div>
                            <i class="fab fa-facebook me-1"></i>
                            <a href="#">Facebook</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container mt-4">
                <div class="wrapper-offcanvas d-block d-lg-none mb-4">
                    <button class="navbar-toggler border-0 " type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
                        <div class="offcanvas-header bg-blue justify-content-start">
                            <button type="button" class="bg-transparent border-0 text-white" data-bs-dismiss="offcanvas" aria-label="Close">
                                <i class="fas fa-times"></i>
                            </button>

                        </div>
                        <div class="offcanvas-body bg-blue">
                            <ul class="d-flex ps-3 m-0 navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#hero">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#acerca">Conóceme</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#servicios">Servicios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contacto">Contacto</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="navbar__navigation collapse navbar-collapse justify-content-center align-items-center" id="navbarNav">
                    <ul class="d-flex navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#hero">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#conoceme">Conóceme</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contacto</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

    </header>