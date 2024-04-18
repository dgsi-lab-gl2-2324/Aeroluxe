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
                                        <h3><?php echo $cliente->getNombre() ?></h3>
                                    </button>
                                </h2>
                                <div id="faq-content-<?php echo $i ?>" class="accordion-collapse collapse" data-bs-parent="#faqlist<?php echo $i ?>">
                                    <div class="accordion-body">
                                        <p><?php echo $cliente->getNombre() ?></p>
                                        <p><?php echo $cliente->getApellido1() ?></p>
                                        <p><?php echo $cliente->getApellido2() ?></p>
                                        <p><?php echo $cliente->getDni() ?></p>
                                        <p><?php echo $cliente->getEmail() ?></p>
                                        <p><?php echo $cliente->getTelef() ?></p>
                                        <p><?php echo $cliente->getFechaAlta() ?></p>

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