<?php
get_header();
?>


<main class="main-content">

    <section class="next-event-banner px-5">
        <h2 class="h2 text-center fw-bold event-caption mb-5">Nuestro Próximo Evento</h2>
        <h3 class="h2 text-center">Seminario</h3>
        <h2 class="h1 fw-bold mb-3 text-center event-title">Aprendiendo a Vivir</h2>
        <div class="text-wrapper text-center mt-5">
            <p class="mt-5">
                Aprende todo lo necesario para experimentar bienestar y calidad en cada área de tu vida
            </p>
            <p>
                Sesiones en vivo de 3 horas c/u durante 5 martes seguidos
            </p>
            <p>
                Iniciamos el 20 de febrero
            </p>

        </div>
        <div class="container mx-auto mt-5">
            <div class="row align-items-center justify-content-center row-list">
                <div class="col-12 col-sm-4">
                    <ul>
                        <li>
                            <i class="far fa-check-circle"></i>
                            Experimenta equilibrio emocional
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            Experimenta equilibrio emocional
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            Desarrolla relaciones saludables
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-4">
                    <ul>
                        <li>
                            <i class="far fa-check-circle"></i>
                            Recupera tu salud física
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            Alcanza libertad financiera
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            Desarrolla tu potencial profesional
                        </li>
                    </ul>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center mt-5">
                <a href="#" class="btn myBtn secondary me-md-5 mt-5">Conoce más</a>
            </div>
        </div>
    </section>


    <section class="hero" id="hero">
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
                <div class="row align-items-center align-items-sm-end">
                    <div class="col-12 col-lg-6">
                        <div class="ring-bg">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/ring.svg" class="skip-lazy" alt="Ring decoration">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="member-bg mb-md-0">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/gustavo-rmbg.webp" type="image/webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/gustavo-rmbg.png" alt="Gustavo picture" class="mx-auto d-none d-md-block">
                            </picture>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="hero-content p-5">
            <h1 class="page-title mt-5">
                Gustavo Campos T.
            </h1>
            <h3 class="fw-bold h2 mb-3">
                Mi propósito:
            </h3>
            <p class="mb-5">
                Educar y acompañar a personas para que alcancen plenitud y calidad de vida.
                Mejorar la productividad de las organizaciones.
            </p>
            <a href="#" class="btn myBtn primary m-0 me-md-5">Conóceme</a>
            <!-- <a href="#" class="btn myBtn secondary">
                <i class="far fa-play-circle"></i>
                Estoy listo para...
            </a> -->
        </div>

    </section>

    <!-- Member features -->
    <section class="features d-flex justify-content-center align-items-center py-gap" id="conoceme">
        <div class="container mx-auto d-flex justify-content-center align-items-center">
            <div class="grid my-5 py-5">

                <div class="row justify-content-center">
                    <div class="col-12 col-sm-4 ">
                        <div class="card custom-card">
                            <div class="card-icon">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                            <div class="card-title">
                                <h2>Líder transformacional</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 ">
                        <div class="card custom-card">
                            <div class="card-icon">
                                <i class="fas fa-pen-alt"></i>
                            </div>
                            <div class="card-title">
                                <h2>Autor de diversos libros</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 ">
                        <div class="card custom-card">
                            <div class="card-icon">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <div class="card-title">
                                <h2>Conferencista motivacional</h2>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-12 col-sm-4 ">
                        <div class="card custom-card">
                            <div class="card-icon">
                                <i class="fas fa-fire-alt"></i>
                            </div>
                            <div class="card-title">
                                <h2>Coach y mentor de vida</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 ">
                        <div class="card custom-card">
                            <div class="card-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="card-title">
                                <h2>Coach y mentor corporativo</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 ">
                        <div class="card custom-card">
                            <div class="card-icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <div class="card-title">
                                <h2>Especialista en educación digital</h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>


    <!-- Commitment section -->
    <section class="commitment d-flex justify-content-center align-items-center py-gap">
        <div class="container mx-auto">
            <div class="row justify-content-center mb-sm-5">
                <div class="col-12 col-sm-8 text-center">
                    <div class="com-content py-4 px-3 p-sm-5 ms-sm-4">
                        <h2 class="com-title mb-5">
                            Mi compromiso
                        </h2>
                        <h2 class="com-subtitle mt-3">
                            Con las Personas
                        </h2>
                        <p class="text">
                            Estoy comprometido con tu bienestar y calidad de vida, por ello
                            voy a guiarte, inspirarte y empoderarte en tu viaje hacia una vida más plena y exitosa en cada área de tu ser.
                        </p>
                        <h2 class="com-subtitle mt-5">
                            Organizaciones
                        </h2>
                        <p class="text">
                            Estoy comprometido con el aumento de la
                            productividad, rentabilidad y crecimiento de las organizaciones a través de un modelo
                            humano y sostenible.
                        </p>
                        <div class="sign mt-4">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/gustavo-firma.webp" type="image/webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/gustavo-firma.png" alt="Gustavo picture" class="mx-auto d-none d-md-block">
                            </picture>
                            <!--<p class="text">
                                Gustavo Campos Tabares
                            </p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Allies Banner -->
    <section class="banner d-flex justify-content-center align-items-center py-gap">
        <div class="container mx-5">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 text-center px-5 order-0">
                    <h3 class="banner-title mb-5">
                        Soy un aliado estratégico de SEGO Training para Costa Rica y Centro América
                    </h3>
                    <!-- <a href="#" class="btn myBtn primary">Conoce más</a> -->
                </div>
                <div class="col-12 col-md-6 px-5 order-1">
                    <div class="logo-brand-wrapper p-5">
                        <a href="#">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/logo-new.webp" type="image/webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo-new.png" alt="Sego training Logo">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services py-gap" id="services">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="bg-card py-gap container">
                        <h2 class="text-center pb-5">Estoy listo para ayudarte</h2>
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
                                        Seminario
                                    </h4>
                                    <h3 class="card-title">
                                        Transforma tu vida
                                    </h3>
                                    <p class="card-text">
                                        Recibirás a través de cursos y seminarios en vivo todo el apoyo y las herramientas necesarias para que alcances plenitud y experimentes de forma holística bienestar y calidad en cada área de tu vida: emocional, física, relacional, profesional y financiera.
                                    </p>
                                    <button class="button-link">
                                        Conoce más
                                    </button>
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
                                        Mentoreo
                                    </h4>
                                    <h3 class="card-title">
                                        Transforma tu organización
                                    </h3>
                                    <p class="card-text">
                                        Recibirás a través de cursos y seminarios en vivo orientación experta y estratégica para aumentar sosteniblemente la productividad, rentabilidad y crecimiento de la organización a la que representas (emprendimientos u organizaciones en general)
                                    </p>
                                    <button class="button-link">
                                        Conoce más
                                    </button>
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
                                        Recibirás a través de cursos y seminarios en vivo orientación experta y estratégica para aumentar sosteniblemente la productividad, rentabilidad y crecimiento de la organización a la que representas (emprendimientos u organizaciones en general).
                                    </p>
                                    <button class="button-link">
                                        Conoce más
                                    </button>
                                </div>

                            </div>
                            <!-- <div class="service-card">
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

                            </div> -->

                            <!-- <div class="service-card">
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

                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog py-gap mt-5">
        <div class="section-header text-center mb-5">
            <h3 class="h2 mb-5">
                Disfruta de un poderoso contenido para tu desarrollo personal
            </h3>
            <h2>Podcasts</h2>
        </div>
        <div class="container my-5 mx-auto">
            <div class="latest mx-auto d-flex flex-column flex-md-row justify-content-start align-items-center flex-wrap">
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
            </div>
    </section>

    <section class="self-video py-gap mb-5">
        <h2 class="text-center fw-bold mb-5">
            ¡Tengo un poderoso mensaje para ti!
        </h2>
        <div class="container mx-auto">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-sm-8 my-5 px-4">
                    <iframe src="https://www.youtube.com/embed/m4zmj_uqnZs?si=zDx9OwSVC87STIFo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="rounded-3"></iframe>
                </div>
            </div>
        </div>
    </section>


    <section class="form-section bg-purple py-gap mt-5" id="contact">
        <h2 class="text-center my-5">Estoy listo para atenderte</h2>
        <div class="container">
            <div class="row">
                <div class="col-10 col-md-8 mx-auto">
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