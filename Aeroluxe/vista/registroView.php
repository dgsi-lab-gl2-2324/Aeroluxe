<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="text-primary text-center">REGISTRARSE</h1>

                <?php
                $mensaje = $datos['mensaje'];
                if ($mensaje != null) {
                    echo $mensaje;
                }
                ?>

            </div>


            <form method="post" action="<?php echo URL . '/registrarse'; ?>">

                <div class="form-group">
                    <label for="inputName">Usuario</label>
                    <input type="text" name="nombre" maxlength="50" required class="form-control" id="inputEmail4">
                </div>
                <div class="form-group">
                    <label for="inputName">Apellido 1</label>
                    <input type="text" name="ape1" maxlength="50" required class="form-control" id="inputEmail4">
                </div>
                <div class="form-group">
                    <label for="inputName">Apellido 2</label>
                    <input type="text" name="ape2" maxlength="50" required class="form-control" id="inputEmail4">
                </div>
                <div class="form-group">
                    <label for="inputNumber">dni</label>
                    <input type="text" name="dni" maxlength="50" required class="form-control" id="inputEmail4">
                </div>
                <div class="form-group">
                    <label for="inputPassword4">Contraseña</label>
                    <input type="password" name="contrasena" maxlength="100" required class="form-control" id="inputPassword4">
                </div>

                <div class="form-group">
                    <label for="inputPassword4">Repite la contraseña</label>
                    <input type="password" name="contrasenaRep" maxlength="100" required class="form-control" id="inputPassword4">
                </div>

                <div class="form-group">
                    <label for="inputAddress">Email</label>
                    <input type="email" name="email" class="form-control" maxlength="50" required id="inputAddress" placeholder="prueba@prueba.com">
                </div>
                <div class="form-group">
                    <label for="inputCity">Teléfono</label>
                    <input type="tel" name="telef" pattern="(\d){9}" maxlength="9" required class="form-control" id="inputCity">
                </div>



                <button type="submit" class="btn btn-primary btn-lg btn-block">Registrarse</button>

            </form>
        </div>
    </div>
</section>
