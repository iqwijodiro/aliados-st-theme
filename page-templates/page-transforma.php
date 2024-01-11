<?php /* Template Name: Transforma tu vida */
get_header();
?>


<main class="main-content">
    <section class="next-event-banner transform hero">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-sm-6 text-center">
                    <h2 class="h1 fw-bold mb-3">
                        ¿Anhelas un cambio significativo en cada área de tu vida?
                    </h2>
                    <h4 class="h2">Si la respuesta es ¡Si!, ve el siguiente video</h4>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center mt-5">
                <button type="button" href="#" class="btn myBtn secondary me-md-5" data-bs-toggle="modal" data-bs-target="#videoModal">Ver Video</button>
            </div>
        </div>
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
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
        </div>
    </section>

    <section class="transform-services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 px-0">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/service-transform.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/service-transform.jpg" alt="Friends with the dawn in the back">
                    </picture>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="text service-msg d-flex align-items-center h-100">
                        <p>
                            Recibe a través de cursos y seminarios en vivo todo el apoyo y las herramientas necesarias
                            para que alcances plenitud y experimentes de forma holística bienestar y calidad en cada
                            área de tu vida: emocional, física, relacional, profesional y financiera.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 px-sm-5">
                    <h2 class="display-3 d-flex align-items-center p-4 h-100 p-sm-5 ">
                        ¡Transformate y lleva tu vida a otro nivel, el momento es ahora!
                    </h2>
                </div>
                <div class="col-12 col-sm-6 px-0">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/dist/img/transform-invited.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/transform-invited.jpg" alt="Climbing a peak">
                    </picture>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>