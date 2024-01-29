<?php /* Template Name: Transforma tu vida */
get_header();
?>


<main class="main-content">
    <section class="next-event-banner transform hero">
        <div class="container py-gap">
            <div class="row align-items-center justify-content-center mb-5 ">
                <div class="col-12 col-sm-10 text-center mt-5">
                    <h1 class="h1 display-3 fw-bold my-5">
                        Transformación vital
                    </h1>
                    <h2 class="h1 fw-bold my-3">
                        ¿Anhelas un cambio significativo en cada área de tu vida?
                    </h2>
                    <h4 class="h2">Si la respuesta es ¡Si!, ve el siguiente video</h4>
                </div>
            </div>
            <div class="mt-5 d-flex justify-content-center rounded-3 pt-5">
                <iframe width="650" height="350" src="https://www.youtube.com/embed/CuD7JdDTrsI?si=2QiFnKytn7snQ248" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="border-radius: 1.6rem;"></iframe>
            </div>
            <!-- <div class="d-flex align-items-center justify-content-center mt-5">
                <button type="button" href="#" class="btn myBtn secondary me-md-5" data-bs-toggle="modal" data-bs-target="#videoModal">Ver Video</button>
            </div> -->
        </div>
        <!-- <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content bg-transparent border-0">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close bg-light rounded-circle" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex justify-content-center rounded-3">
                        <iframe width="760" height="515" src="https://www.youtube.com/embed/CuD7JdDTrsI?si=2QiFnKytn7snQ248" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen style="border-radius: 1.6rem;"></iframe>
                    </div>
                </div>
            </div>
        </div> -->
    </section>

    <section class="transform-services">
        <div class="container">
            <div class="row justify-content-center">
                <!-- <div class="col-12 col-sm-6 px-0">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/service-transform.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/service-transform.jpg" alt="Friends with the dawn in the back">
                    </picture>
                </div> -->
                <div class="col-12 col-sm-10">
                    <div class="text service-msg text-center">
                        <p class="text-lg py-gap">
                            Recibe a través de cursos y seminarios en vivo todo el apoyo y las herramientas necesarias
                            para que alcances plenitud y experimentes de forma holística bienestar y calidad en cada
                            área de tu vida: emocional, física, relacional, profesional y financiera.
                        </p>
                        <h2 class="display-5 p-4 h-100 p-sm-5 fw-bold">
                            Transformate y lleva tu vida a otro nivel <br>¡El momento es ahora!
                        </h2>
                    </div>
                </div>
            </div>
            <!-- <div class="row py-gap">
                <div class="col-12 col-sm-10 px-sm-5">
                </div>
                <!-- <div class="col-12 col-sm-6 px-0">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/transform-invited.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/transform-invited.jpg" alt="Climbing a peak">
                    </picture>
                </div> -->
        </div>
        </div>
    </section>
    <section class="transform-products">
        <div class="container-fluid p-0">
            <div class="row px-0 mx-0">
                <div class="col-12 col-sm-6 p-5">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/sky.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/sky.jpg" alt="Climbing a peak">
                    </picture>
                </div>
                <div class="col-12 col-sm-6 p-5 mt-5">
                    <h4 class="subtitle fw-bold">Curso</h4>
                    <h2 class="">
                        Transformación vital
                    </h2>
                    <p class="text">
                        Aprende todo lo necesario para experimentar bienestar y calidad en cada área de tu ser. Este curso te permitirá:
                    </p>
                    <ul class="benefits-wrapper">
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span class="benefits text">
                                Experimenta equilibrio emocional
                            </span>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span class="benefits text">
                                Desarrolla relaciones saludables
                            </span>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span class="benefits text">
                                Mejorar tu salud física
                            </span>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span class="benefits text">
                                Alcanza libertad financiera
                            </span>
                        </li>
                        <li>
                            <i class="far fa-check-circle"></i>
                            <span class="benefits text">
                                Mucho màs...
                            </span>
                        </li>

                    </ul>
                    <div class="text-wrapper mt-5">
                        <p class="text">No más excusas</p>
                        <p class="text">
                            Inicia ahora mismo tu proceso de transformación
                        </p>
                    </div>

                    <div class="d-flex align-items-center justify-content-center mt-5">
                        <button type="button" href="#" class="btn myBtn secondary bg-purple me-md-5">¡Lo quiero!</button>
                        <a href="<?php
                                    $page = new WP_Query(array(
                                        'name' => 'curso-aprendiendo-a-vivir',
                                        'post_type' => 'page',
                                        'posts_per_page' => 1,
                                        'no_found_rows' => true
                                    ));

                                    if ($page->have_posts()) {
                                        $page->the_post();
                                        echo esc_url(get_permalink());
                                        wp_reset_postdata();
                                    }
                                    // echo esc_url(get_permalink(get_page_by_title('Curso: Aprendiendo a vivir'))); 
                                    ?>" class="btn myBtn secondary bg-purple me-md-5">
                            Conoce más</a>
                    </div>


                </div>
            </div>
            <div class="row px-0 mx-0">
                <div class="col-12 col-sm-6 pt-5 px-0 order-1">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/transform-invited.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/transform-invited.jpg" alt="Climbing a peak">
                    </picture>
                </div>
                <div class="col-12 col-sm-6 p-5 mt-5 order-0">
                    <div class="text-wrapper-col ms-5">

                        <h4 class="subtitle fw-bold">Seminario</h4>
                        <h2 class="">
                            Transformación holistica para el bienestar
                        </h2>
                        <p class="text">
                            Aprende todo lo necesario para experimentar bienestar y calidad en cada área de tu ser. Este curso te permitirá:
                        </p>
                        <ul class="benefits-wrapper">
                            <li>
                                <i class="far fa-check-circle"></i>
                                <span class="benefits text">
                                    Experimenta equilibrio emocional
                                </span>
                            </li>
                            <li>
                                <i class="far fa-check-circle"></i>
                                <span class="benefits text">
                                    Desarrolla relaciones saludables
                                </span>
                            </li>
                            <li>
                                <i class="far fa-check-circle"></i>
                                <span class="benefits text">
                                    Mejorar tu salud física
                                </span>
                            </li>
                            <li>
                                <i class="far fa-check-circle"></i>
                                <span class="benefits text">
                                    Alcanza libertad financiera
                                </span>
                            </li>
                            <li>
                                <i class="far fa-check-circle"></i>
                                <span class="benefits text">
                                    Mucho màs...
                                </span>
                            </li>

                        </ul>
                        <div class="text-wrapper mt-5">
                            <p class="text">No más excusas</p>
                            <p class="text">
                                Inicia ahora mismo tu proceso de transformación
                            </p>
                        </div>

                        <div class="d-flex align-items-center justify-content-center mt-5">
                            <button type="button" href="#" class="btn myBtn secondary bg-purple me-md-5">¡Lo quiero!</button>
                            <a href="<?php
                                        $page = new WP_Query(array(
                                            'name' => 'curso-aprendiendo-a-vivir',
                                            'post_type' => 'page',
                                            'posts_per_page' => 1,
                                            'no_found_rows' => true
                                        ));

                                        if ($page->have_posts()) {
                                            $page->the_post();
                                            echo esc_url(get_permalink());
                                            wp_reset_postdata();
                                        }
                                        // echo esc_url(get_permalink(get_page_by_title('Curso: Aprendiendo a vivir'))); 
                                        ?>" class="btn myBtn secondary bg-purple me-md-5">
                                Conoce más</a>
                        </div>
                    </div>


                </div>
            </div>
            <section class="seminary package py-gap bg-purple text-white">
                <div class="container">
                    <div class="row d-flex justify-content-center align-items-center py-gap">

                        <div class="col-12 col-sm-4">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/ebook.webp" type="image/webp">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/ebook.png" alt="Climbing a peak">
                            </picture>
                        </div>
                        <div class="col-12 col-sm-6 text-wrapper text text-center ms-5 text-white ps-5">
                            <div class="mx-auto">
                                <h3 class="h2 text-center">E-book</h3>
                                <h2 class="h1 display-5 fw-bold mb-3 text-center event-title text-white">Alcanzando plenitud y calidad de vida</h2>
                                <p class="mt-5 display-6">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi, distinctio reiciendis. Placeat perferendis ab sapiente. Dolorum, distinctio? Dicta soluta sed accusantium sapiente veritatis iure, voluptates ea harum ut et aliquid?
                                </p>
                                <button type="button" href="#" class="btn myBtn primary me-md-5 mt-5 " data-bs-toggle="modal" data-bs-target="#ebookModal">Descargar</button>
                            </div>
                        </div>
                        <div class="modal fade" id="ebookModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content bg-purple border-0">
                                    <div class="modal-header border-0">
                                        <button type="button" class="btn-close bg-light rounded-circle" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body rounded-3">
                                        <h3 class="display-5 text-white text-center mb-4">Descarga gratis nuestro ebook</h3>
                                        <?php
                                        echo do_shortcode('[contact-form-7 id="89e0326" title="Ebook_form"]');
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <section class="form-section bg-purple py-gap" id="contact">
        <h3 class="display-6 text-white text-center">Si deseas más información</h3>
        <h2 class="text-center mb-5">Estamos listos para atenderte</h2>
        <div class="container">
            <div class="row">
                <div class="col-10 col-md-8 mx-auto">
                    <?php
                    echo do_shortcode('[contact-form-7 id="14dffe2" title="Contacto_transformacion"]');
                    ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>