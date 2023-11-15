<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="container-fluid top-navbar navbar">
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
        <div class="main-navbar container-fluid navbar">
            <nav class="container d-flex justify-content-center align-items-center">
                <ul class="d-flex m-0">
                    <li class="nav-item"><a href="google.com" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Conóceme</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Servicios</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contacto</a></li>
                </ul>
            </nav>
        </div>

    </header>