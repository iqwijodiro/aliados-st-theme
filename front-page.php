<?php
get_header();
?>


<main class="main-content">
    <section class="hero">
        <!-- Hero y Background -->
        <div class="image-bg">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/bg-hero-2.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/bg-hero-2.jpg" class="skip-lazy" alt="Lights background">
            </picture>
            <div class="overlay">
            </div>
        </div>
        <div class="hero-wrapper">
            <div class="hero-image-wrapper">
                <div class="ring-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/img/ring.svg" class="skip-lazy" alt="Ring decoration">
                </div>
                <div class="member-bg">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/rbg-img_cutted.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/rbg-img_cutted.png" alt="Member">
                    </picture>
                </div>
            </div>
        </div>
        <div class="hero-content p-5">
            <h1 class="page-title">
                Nombre del aliado
            </h1>
            <p class="mb-5">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae cumque recusandae placeat perferendis earum aperiam!
            </p>
            <a href="#" class="btn myBtn primary me-5">Servicios</a>
            <a href="#" class="btn myBtn secondary">
                <i class="far fa-play-circle"></i>
                Estoy listo para...
            </a>
        </div>

    </section>

    <!-- Member features -->
    <section class="features d-flex justify-content-center align-items-center">
        <div class="container mx-auto d-flex justify-content-center align-items-center">
            <div class="d-grid grid">

                <div class="row">
                    <div class="col">
                        <div class="card custom-card">
                            <div class="card-icon">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                            <div class="card-title">
                                <h2>Asesor y Mentor Corporativo</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card custom-card">
                            <div class="card-icon">
                                <i class="fas fa-pen-alt"></i>
                            </div>
                            <div class="card-title">
                                <h2>Autor de diversos libros</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card custom-card">
                            <div class="card-icon">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <div class="card-title">
                                <h2>Conferencista internacional</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card custom-card">
                            <div class="card-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="card-title">
                                <h2>Empresario Activo</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card custom-card">
                            <div class="card-icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <div class="card-title">
                                <h2>Transformación digital educativa</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card custom-card">
                            <div class="card-icon">
                                <i class="fas fa-school"></i>
                            </div>
                            <div class="card-title">
                                <h2>Ex-decano administrativo en UTI</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Commitment section -->
    <section class="commitment d-flex justify-content-center align-items-center">
        <div class="container mx-auto">
            <div class="row">
                <div class="col">
                    <div class="com-card">
                        <div class="img1">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/stairs.webp" type="image/webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/stairs.png" alt="Member">
                            </picture>
                        </div>
                        <div class="img2">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/world.webp" type="image/webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/world.png" alt="Member">
                            </picture>
                        </div>
                        <div class="img3">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/sky.webp" type="image/webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/sky.png" alt="Member">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="com-content container p-5 ms-4">
                        <h2 class="com-title mt-3">
                            Mi compromiso
                        </h2>
                        <div class="row align-items-center">
                            <div class="col col-2">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="col">
                                <p class="text">
                                    Personas: estoy comprometido con la excelencia personal, con tu bienestar y calidad de vida, por ello voy a guiarte, inspirarte y empoderarte en tu viaje hacia una vida más plena y saludable.
                                </p>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col col-2">
                                <i class="far fa-building"></i>
                            </div>
                            <div class="col">
                                <p class="text">
                                    Organizaciones: estoy comprometido con la excelencia organizacional, con el aumento sostenible de la productividad, rentabilidad y crecimiento de la organización cliente, a través de un acompañamiento organizado y profesional.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Allies Banner -->
    <section class="banner d-flex justify-content-center align-items-center">
        <div class="container mx-5">
            <div class="row">
                <div class="col text-center px-5">
                    <h3 class="banner-title mb-5">
                        SOY UN ALIADO ESTRATÉGICO SEGO TRAINING PARA COSTA RICA Y CENTRO AMÉRICA
                        </h2>
                        <a href="#" class="btn myBtn primary">Conoce más</a>
                </div>
                <div class="col px-5">
                    <div class="logo-brand-wrapper p-5">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/logo-brand.webp" type="image/webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo-brand.png" alt="Sego training Logo">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services py-gap">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="bg-card py-gap">
                        <h2 class="text-center mb-5">Servicios</h2>
                        <div class="services-grid px-5 mt-5">
                            <div class="service-card">
                                <div class="card-img">
                                    <picture>
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/mentorship.webp" type="image/webp">
                                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/mentorship.jpg" alt="Mentorship Image">
                                    </picture>
                                </div>
                                <div class="card-body p-4">
                                    <h4 class="subtitle">
                                        Mentoreo
                                    </h4>
                                    <h3 class="card-title">
                                        Tu mentor de vida
                                    </h3>
                                    <p class="card-text">
                                        Recibe apoyo personalizado que promueva tu equilibrio físico, mental y emocional, y que fomente un sentido de propósito y satisfacción en todas las áreas de tu vida.
                                    </p>
                                </div>

                            </div>
                            <div class="service-card">
                                <div class="card-img">
                                    <picture>
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/corp-mentor.webp" type="image/webp">
                                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/corp-mentor.jpg" alt="Mentorship Image">
                                    </picture>
                                </div>
                                <div class="card-body p-4">
                                    <h4 class="subtitle">
                                        Mentoreo
                                    </h4>
                                    <h3 class="card-title">
                                        Tu mentor corporativo
                                    </h3>
                                    <p class="card-text">
                                        Recibe orientación experta y estratégica para aumentar sosteniblemente la productividad, rentabilidad y crecimiento de la organización a la que representas.
                                    </p>
                                </div>

                            </div>
                            <div class="service-card">
                                <div class="card-img">
                                    <picture>
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/training.webp" type="image/webp">
                                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/training.jpg" alt="Mentorship Image">
                                    </picture>
                                </div>
                                <div class="card-body p-4">
                                    <h4 class="subtitle">
                                        Formación
                                    </h4>
                                    <h3 class="card-title">
                                        Formación Empresarial
                                    </h3>
                                    <p class="card-text">
                                        Proveemos formación empresarial para el desarrollo efectivo de actitudes y habilidades blandas orientadas al fortalecimiento del liderazgo y la cultura organizacional de excelencia.
                                    </p>
                                </div>

                            </div>
                            <div class="service-card">
                                <div class="card-img">
                                    <picture>
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/workshops.webp" type="image/webp">
                                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/workshops.jpg" alt="Mentorship Image">
                                    </picture>
                                </div>
                                <div class="card-body p-4">
                                    <h4 class="subtitle">
                                        Seminario
                                    </h4>
                                    <h3 class="card-title">
                                        Seminarios y Talleres
                                    </h3>
                                    <p class="card-text">
                                        Proveemos experiencias educativas diseñadas para brindar conocimientos especializados y desarrollar actitudes y habilidades para la excelencia personal, profesional y organizacional.
                                    </p>
                                </div>

                            </div>
                            <div class="service-card">
                                <div class="card-img">
                                    <picture>
                                        <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/certification.webp" type="image/webp">
                                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/certification.jpg" alt="Mentorship Image">
                                    </picture>
                                </div>
                                <div class="card-body p-4">
                                    <h4 class="subtitle">
                                        Certificación
                                    </h4>
                                    <h3 class="card-title">
                                        Certificación SEGO
                                    </h3>
                                    <p class="card-text">
                                        Formate con nosotros en un programa de 10 meses y recibe una certificación de excelencia actitudinal capaz de proyectar tu vida y carrera profesional a otro nivel.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <div class="row latest">
                <div class="blog-card">
                    <div class="blog-card-img">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>