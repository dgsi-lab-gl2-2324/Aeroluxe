<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="text-primary text-center">INICIAR SESIÓN</h1>

                <?php
                $mensaje = $datos['mensaje'];
                if ($mensaje != null) {
                    echo $mensaje;
                }   
                ?>

            </div>


            <form method="post" action="<?php echo URL . '/iniciasesion'; ?>">

                <div class="form-group">
                    <label for="inputName">DNI</label>
                    <input type="text" name="dni" maxlength="10" required class="form-control" id="inputEmail4">
                </div>
                <div class="form-group">
                    <label for="inputPassword4">Contraseña</label>
                    <input type="password" name="contrasena" maxlength="100" required class="form-control" id="inputPassword4">
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block">Registrarse</button>

            </form>
        </div>
    </div>
</section>
