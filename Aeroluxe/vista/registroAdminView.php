<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="text-primary text-center">REGISTRAR NUEVO ADMINISTRADOR</h1>

            </div>
            <div class="form-container">

                <form method="post" action="<?php echo URL . '/registraradmin'; ?>">
                    <div class="form-group">
                        <label for="inputName">Nombre</label>
                        <input type="text" name="nombre" maxlength="50" required class="form-control" id="inputEmail4">
                    </div>
                    <div class="form-group">
                        <label for="inputNumber">DNI</label>
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

                    <button type="submit" class="btn btn-primary btn-lg btn-block btn-center">Registrar</button>

                </form>
            </div>
        </div>
    </div>
</section>