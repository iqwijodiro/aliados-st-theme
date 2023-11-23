    <footer class="footer py-5 text-center">

        <div class="footer-content container">
            <div class="row justify-content-around mx-3 mx-md-1">
                <div class="col-12 col-md-4 align-self-center text-start d-flex justify-content-between mb-5 pb-2 order-1 order-md-0">
                    <div>
                        <i class="fab fa-whatsapp me-1"></i>
                        <a href="https://wa.me/+50670176705">Contactame</a>
                    </div>
                    <div class="me-4">
                        <i class="fab fa-linkedin me-1"></i>
                        <a href="https://www.linkedin.com/in/gustavo-adolfo-campos-tabares-589851112/">LinkedIn</a>
                    </div>
                    <div>
                        <i class="fab fa-facebook me-1"></i>
                        <a href="https://www.facebook.com/gustavo.campostabares">Facebook</a>
                    </div>
                    <!-- <div class="d-flex">
                    </div> -->
                </div>
                <div class="col-12 col-md-6 align-self-center order-0 order-md-1">
                    <div class="form-section text-center text-md-start">
                        <h3>Suscribete a nuestro Newsletter</h3>
                        <?php
                        echo do_shortcode('[contact-form-7 id="1aa3b61" title="newsletter"]');
                        ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="">
            <p class="copyright">Todos los derechos reservados. SEGO Training <?php echo date('Y'); ?></p>
        </div>
    </footer>

    <?php wp_footer(); ?>
    </body>

    </html>