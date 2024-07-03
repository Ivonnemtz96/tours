<section class="page-header">
    <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/01.jpg);"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title wow animated fadeInLeft" data-wow-delay="0s" data-wow-duration="1500ms">Contacto
        </h2>
        <div class="page-header__breadcrumb-box">
            <ul class="trevlo-breadcrumb">
                <li><a href="index.php">Inicio</a></li>
                <li>Contacto</li>
            </ul><!-- /.trevlo-breadcrumb -->
        </div><!-- /.page-header__breadcrumb-box -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<!-- Contact Page Start -->
<section class="contact-page section-space-top">
    <div class="container">
        <div class="contact-page__info" style="margin-bottom: 9rem;">
            <div class="contact-page__info-container container">
                <div class="contact-page__info-top">
                    <p class="contact-page__info-top-title">Información de contacto</p>
                </div><!-- /.contact-page__info-top -->
                <div class="contact-page__info-row row">
                    <div class="col-lg-4 wow animated fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms">
                        <div class="contact-page__info-box">
                            <div class="contact-page__info-icon-box">
                                <span class="icon-phone-1"></span>
                            </div>
                            <div class="contact-page__info-text-box">
                                <p class="contact-page__info-title">Estamos para servirte</p>
                                <a href="tel:6241436371">
                                    <h4 class="contact-page__info-text contact-page__info-text-link">
                                        624-143- 6371
                                    </h4>
                                </a>
                            </div>
                        </div><!-- /.contact-page__info-box -->
                    </div>
                    <div class="col-lg-3 wow animated fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <div class="contact-page__info-box">
                            <div class="contact-page__info-icon-box">
                                <span class="icon-envelope"></span>
                            </div>
                            <div class="contact-page__info-text-box">
                                <p class="contact-page__info-title">Contáctanos</p>
                                <a href="mailto:info@novotourbcs.com">
                                    <h4 class="contact-page__info-text contact-page__info-text-link">
                                        info@novotourbcs.com
                                    </h4>
                                </a>
                            </div>
                        </div><!-- /.contact-page__info-box -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <div class="sec-title text-center">

            <p class="sec-title__tagline">¿Tienes alguna duda?</p>

            <h2 class="sec-title__title">Novo Tours se pondrá en contacto</h2>
        </div>
        <form class="contact-page__form form-one row gutter-20" method="POST" action="/php/contact.php">
            <div class="col-md-6 wow animated fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms">
                <div class="form-one__group">
                    <input type="text" name="nombre"  placeholder="Nombre"
                        class="form-one__input" required>
                </div><!-- /.form-one__group -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 wow animated fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                <div class="form-one__group">
                    <input type="email" name="correo"  placeholder="Correo" required
                        class="form-one__input">
                </div><!-- /.form-one__group -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 wow animated fadeInUp" data-wow-delay="0s" data-wow-duration="1500ms">
                <div class="form-one__group">
                    <input type="tel" name="tel"  placeholder="Teléfono" required
                        class="form-one__input">
                </div><!-- /.form-one__group -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6 wow animated fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                <div class="form-one__group">
                    <input type="text" name="asunto"  placeholder="Asunto" required
                        class="form-one__input">
                </div><!-- /.form-one__group -->
            </div><!-- /.col-md-6 -->
            <div class="col-12 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                <div class="form-one__group">
                    <textarea name="msj" cols="30" rows="10" required
                        placeholder="Escriba su mensaje" class="form-one__message form-one__input"></textarea>
                </div><!-- /.form-one__group -->
            </div><!-- /.col-12-->
            <div class="col-12 col-md-5">
                <div class="g-recaptcha" data-sitekey="6Lf92OAfAAAAAEy9m8sf2kbU0ojkdDs5CNOnaNYS" required></div>
            </div>
            <div class="col-12 wow animated fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                <div class="form-one__btn-box">
                    <button type="submit" class="form-one__btn trevlo-btn trevlo-btn--base"><span>
                            Enviar
                        </span></button>
                </div><!-- /.form-one__btn-box -->
            </div><!-- /.col-12-->
        </form><!-- /.row -->
    </div><!-- /.container -->


    <!-- /.google-map -->
</section>
<!-- Contact Page End -->