<section id="entrada" class="entrada-section">

    <div class="container" data-aos="fade-up">

        <div class="form-container">
            <header class="section-header">
                <p>Su entrada</p>
            </header>

            <div class="cliente-info">
                <div class="form-group">
                    <label for="inputAddress">Tipo de entrada</label>
                    <input type="text" name="direccion" maxlength="100" required class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="inputName">Nombre</label>
                    <input type="text" name="nombre" maxlength="50" required class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" name="email" maxlength="100" required class="form-control" readonly>
                </div>

                <div class="form-group">
                    <label for="inputPhone">Teléfono</label>
                    <input type="tel" name="telefono" maxlength="15" required class="form-control" readonly>
                </div>
            </div>

            <!-- Código QR -->
            <div class="qr-code">
                <label>Código qr</label><br>
                <img src="<?php echo URL ?>/assets/img/Rickrolling_QR_code.png" alt="Código QR" class="img-fluid" style="display: block; margin: 0 auto;">
            </div>

            <button class="btn btn-primary btn-lg btn-block btn-center" onclick="window.print()">Imprimir Entrada</button>

        </div>

    </div>

</section><!-- End Cliente Section -->