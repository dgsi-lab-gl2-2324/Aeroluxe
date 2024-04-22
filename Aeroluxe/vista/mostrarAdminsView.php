<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="text-primary text-center">ADMINISTRADORES</h1>

            </div>

            <div class='admin'>
                <div class="accordion accordion-flush" id="faqlist1">

                    <?php
                    $admins = $datos['admins'];

                    if ($admins != null) {
                        $i = 1;
                        foreach ($admins as $admin) {

                    ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-<?php echo $i ?>">
                                        <h3><?php echo $admin->getNombre(); ?></h3>
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
                                                    <p><?php echo $admin->getNombre() ?></p>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <p>DNI (usuario)</p>
                                                </td>
                                                <td>
                                                    <p><?php echo $admin->getDni() ?></p>
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
                        echo '<h3>No hay administradores que mostrar.</h3>';
                    }

                    ?>
                </div>

            </div>

        </div>
    </div>
</section>