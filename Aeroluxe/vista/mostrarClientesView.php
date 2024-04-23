<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="text-primary text-center">CLIENTES</h1>

            </div>

            <div class='client'>
                <div class="accordion accordion-flush" id="faqlist1">

                    <?php
                    $clientes = $datos['clientes'];

                    if ($clientes != null) {
                        $i = 1;
                        foreach ($clientes as $cliente) {

                    ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-<?php echo $i ?>">
                                        <h3><?php echo $cliente->getNombre() ?>: <?php echo $cliente->getDni() ?></h3>
                                    </button>
                                </h2>
                                <div id="faq-content-<?php echo $i ?>" class="accordion-collapse collapse" data-bs-parent="#faqlist<?php echo $i ?>">
                                    <div class="accordion-body">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <p>Nombre</p>
                                                </td>
                                                <td>
                                                    <p><?php echo $cliente->getNombre() ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Primer apellido</p>
                                                </td>
                                                <td>
                                                    <p><?php echo $cliente->getApellido1() ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Segundo apellido</p>
                                                </td>
                                                <td>
                                                    <p><?php echo $cliente->getApellido2() ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>DNI (usuario)</p>
                                                </td>
                                                <td>
                                                    <p><?php echo $cliente->getDni() ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Email</p>
                                                </td>
                                                <td>
                                                    <p><?php echo $cliente->getEmail() ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Teléfono</p>
                                                </td>
                                                <td>
                                                    <p><?php echo $cliente->getTelef() ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Fecha de alta</p>
                                                </td>
                                                <td>
                                                    <p><?php echo $cliente->getFechaAlta() ?></p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    <?php
                            $i++;
                        }
                    } else {
                        echo '<h3>No hay clientes que mostrar.</h3>';
                    }

                    ?>
                </div>

            </div>

        </div>
    </div>
</section>