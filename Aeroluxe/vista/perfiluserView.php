<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <?php
    $nombre = $datos['username'];
    $usuario = $datos['usuario'];
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">¡Bienvenido de nuevo, <?php echo $nombre ?>!</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Aquí puedes ver y editar tu perfil</h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <a href="#perfil" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Ver Perfil</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="text-center text-lg-start">
                        <a href="#editar-perfil" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Ver Editar Perfil</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="assets/img/user-profile.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section>
<!-- End Hero -->

<!-- ======= Perfil Section ======= -->
<section id="perfil" class="perfil d-flex align-items-center">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Tu Perfil</h2>
            <p>Aquí están tus datos actuales</p>
        </header>

        <div class="container">
            <div class="row justify-content-center align-items-center text-center gy-6">
                <div class="col-lg-6">
                    <div class="info-box">
                        <i class="bi bi-person"></i>
                        <h3>Nombre</h3>
                        <p><?php echo $usuario->getNombre() ?> <?php echo $usuario->getApellido1() ?> <?php echo $usuario->getApellido2() ?></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info-box">
                        <i class="bi bi-envelope"></i>
                        <h3>Correo Electrónico</h3>
                        <p><?php echo $usuario->getEmail() ?></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info-box">
                        <i class="bi bi-telephone"></i>
                        <h3>Teléfono</h3>
                        <p><?php echo $usuario->getTelef() ?></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info-box">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Dirección</h3>
                        <p><?php echo $usuario->getDireccion() ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section><!-- End Perfil Section -->


<!-- ======= Editar Perfil Section ======= -->
<section id="editar-perfil" class="editar-perfil">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Editar Perfil</h2>
            <p>Actualiza tus detalles personales</p>
        </header>

        <div class="container">
            <div class="row justify-content-center align-items-center text-center gy-4">
                    <div class="form-container">

                        <form action="<?php echo URL . '/actualizarperfil'; ?>" method="post" class="php-email-form">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" value=<?php echo $usuario->getNombre() ?> required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="apellido1" placeholder="Primer apellido" value=<?php echo $usuario->getApellido1() ?> required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="apellido2" placeholder="Segundo apellido" value=<?php echo $usuario->getApellido2() ?> required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Correo Electrónico" value=<?php echo $usuario->getEmail() ?> required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="telefono" placeholder="Teléfono" value=<?php echo $usuario->getTelef() ?> required>
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" name="direccion" rows="6" placeholder="Dirección" required><?php echo $usuario->getDireccion() ?></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Guardar Cambios</button>
                                </div>
                                <?php if (isset($data['mensaje'])) : ?>
                                    <div class="alert alert-<?php echo ($inserto ? 'success' : 'danger'); ?>" role="alert">
                                        <?php echo $data['mensaje']; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </form>
                </div>
            </div>
        </div>


    </div>

    </div>

</section><!-- End Editar Perfil Section -->

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>