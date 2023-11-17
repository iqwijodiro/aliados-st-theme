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
        <div class="hero-wrapper mt-5">
            <div class="hero-image-wrapper">
                <div class="row align-items-end">
                    <div class="col-12 col-lg-6">
                        <div class="ring-bg">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/ring.svg" class="skip-lazy" alt="Ring decoration">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="member-bg mb-md-0 pb-5">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/gustavo-rmbg.webp" type="image/webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/gustavo-rmbg.png" alt="Gustavo picture" class="mx-auto">
                            </picture>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="hero-content p-5">
            <h1 class="page-title mt-5">
                Gustavo Campos
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
    <section class="features d-flex justify-content-center align-items-center py-gap">
        <div class="container mx-auto d-flex justify-content-center align-items-center">
            <div class="d-grid grid my-5">

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
            <div class="row justify-content-center mb-5">

                <div class="col-12 col-sm-10 col-lg-4">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/sky.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/sky.png" alt="Member">
                    </picture>
                </div>

                <div class="col-12 col-10 col-lg-6">
                    <div class="com-content container p-5 ms-4">
                        <h3 class="subtitle">
                            Mi compromiso con las
                        </h3>
                        <h2 class="com-title mt-3">
                            Personas
                        </h2>
                        <p class="text">
                            Estoy comprometido con la excelencia personal, con tu bienestar y calidad de vida, por ello voy a guiarte, inspirarte y empoderarte en tu viaje hacia una vida más plena y saludable.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center my-5">

                <div class="col-12 col-10 col-lg-6 order-1 order-lg-0">
                    <div class="com-content container p-5 ms-4">
                        <h3 class="subtitle">
                            Mi compromiso con las
                        </h3>
                        <h2 class="com-title mt-3">
                            Organizaciones
                        </h2>
                        <p class="text">
                            Estoy comprometido con la excelencia organizacional, con el aumento sostenible de la productividad, rentabilidad y crecimiento de la organización cliente, a través de un acompañamiento organizado y profesional.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-sm-10 col-lg-4 order-0 order-lg-1">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/sky.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/sky.png" alt="Member">
                    </picture>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Allies Banner -->
    <section class="banner d-flex justify-content-center align-items-center py-gap">
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
                    <div class="bg-card py-gap container">
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

    <section class="blog py-gap">
        <div class="section-header text-center mb-5">
            <h3 class="text">
                Te puede interesar los siguientes
            </h3>
            <h2>Artículos</h2>
        </div>
        <div class="container my-5">
            <!-- <div class="row"> -->
            <div class="latest">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/steps.webp" type="image/webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/steps.jpg" alt="Woman jumping">
                        </picture>
                    </div>
                    <div class="blog-card-body py-4 px-2">
                        <h4 class="subtitle ms-3">
                            <i class="fas fa-user me-1"></i>
                            Gustavo Campos
                        </h4>
                        <h3 class="card-title my-3">
                            7 pasos esenciales para mejorar tu calidad de vida
                        </h3>
                        <div class="actions d-flex justify-content-end">
                            <a href="#" class="btn btn-lg complementary">
                                Leer más
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="blog-card-img">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/productivity.webp" type="image/webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/productivity.jpg" alt="Woman jumping">
                        </picture>
                    </div>
                    <div class="blog-card-body py-4 px-2">
                        <h4 class="subtitle ms-3">
                            <i class="fas fa-user me-1"></i>
                            Gustavo Campos
                        </h4>
                        <h3 class="card-title my-3">
                            Aumenta la productividad y rentabilidad en las organizaciones
                        </h3>
                        <div class="actions d-flex justify-content-end">
                            <a href="#" class="btn btn-lg complementary">
                                Leer más
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="blog-card-img">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/talent.webp" type="image/webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/talent.jpg" alt="Woman jumping">
                        </picture>
                    </div>
                    <div class="blog-card-body py-4 px-2">
                        <h4 class="subtitle ms-3">
                            <i class="fas fa-user me-1"></i>
                            Gustavo Campos
                        </h4>
                        <h3 class="card-title my-3">
                            ¿Por qué las organizaciones deben priorizar la formación de su talento?
                        </h3>
                        <div class="actions d-flex justify-content-end">
                            <a href="#" class="btn btn-lg complementary">
                                Leer más
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="blog-card">
                    <div class="blog-card-img">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/program.webp" type="image/webp">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/program.jpg" alt="Woman jumping">
                        </picture>
                    </div>
                    <div class="blog-card-body py-4 px-2">
                        <h4 class="subtitle ms-3">
                            <i class="fas fa-user me-1"></i>
                            Gustavo Campos
                        </h4>
                        <h3 class="card-title my-3">
                            Implementa un programa de formación empresarial en 4 pasos
                        </h3>
                        <div class="actions d-flex justify-content-end">
                            <a href="#" class="btn btn-lg complementary">
                                Leer más
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- </div> -->
        </div>
    </section>


    <section class="form-section py-gap">
        <h2 class="text-center mb-5">Estoy listo para atenderte</h2>
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto">
                    <?php
                    echo do_shortcode('[contact-form-7 id="dc6a403" title="Formulario de contacto"]');
                    ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>