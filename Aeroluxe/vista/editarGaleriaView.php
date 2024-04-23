<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="text-primary text-center">GALERÍA</h1>
            </div>

            <?php
            $tipos = $datos['tipos'];
            $fotos = $datos['fotos'];
            $mensaje = $datos['mensaje'];

            $redirige = $datos['redirige'];
            if ($redirige != null) {
            ?>
                <form id="autoSubmitForm" action="<?php echo URL . '/menuAdminGaleria'; ?>" method="POST">
                    <input type="hidden" name="mensaje" value="<?php echo $mensaje; ?>">
                </form>
            <?php
            }

            ?>

            <button class="btn btn-primary" onclick="document.getElementById('fileInput').click()">Añadir Foto</button>

            <form enctype="multipart/form-data" method="post" action="<?php echo URL . '/anadirFoto4'; ?>">
                <input type="file" name="img" id="fileInput" style="display:none">

                <table class="table">
                    <tr>
                        <td>
                            <div id="imagePreview"></div>
                        </td>
                        <td>
                            <!-- Sección de tipo de foto -->
                            <div id="photoTypeSection" class="form-group" style="display:none">
                                <label for="photoType">Tipo de Foto:</label>
                                <select class="form-control" name="photoType" required id="photoType">
                                    <option value="">Selecciona un tipo</option>
                                    <?php

                                    if ($tipos) {
                                        foreach ($tipos as $tipo) {


                                    ?>
                                            <option value="<?php echo $tipo->getId() ?>"><?php echo $tipo->getTipo(); ?></option>

                                    <?php
                                        }
                                    }

                                    ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <!-- Botones de Guardar y Cancelar -->
                            <button id="saveButton" type="submit" class="btn btn-primary" style="display:none">Guardar</button>
                        </td>
                        <td>
                            <button id="cancelButton" type="reset" class="btn btn-primary" style="display:none">Cancelar</button>
                        </td>
                    </tr>
                </table>
            </form>


            <div class="accordion accordion-flush" id="faqlist1">

                <div class="accordion-item">
                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">Añadir Tipo de Foto</button>
                    </h2>
                    <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                        <div class="accordion-body">
                            <form method="post" action="<?php echo URL . '/anadirTipoFoto'; ?>">
                                <div class="form-group">
                                    <label for="textInput">Crear nuevo tipo de foto:</label>
                                    <input type="text" class="form-control" id="textInput" name="nuevoTipo">

                                </div>
                                <button class="btn btn-primary">Guardar</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>


            <section id="galeriaAdmin" class="portfolio">

                <div class="container" data-aos="fade-up">

                    <header class="section-header">
                        <h2>Galería</h2>
                    </header>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">Todo</li>
                                <?php
                                if ($tipos) {
                                    foreach ($tipos as $tipo) {
                                ?>
                                        <li data-filter=".filter-<?php echo $tipo->getId(); ?>"><?php echo $tipo->getTipo(); ?></option>
                                    <?php
                                    }
                                }
                                    ?>
                            </ul>
                        </div>
                    </div>



                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        <?php
                        if ($fotos) {
                            foreach ($fotos as $foto) {
                                // Asegúrate de que aquí solo se produce un conjunto de elementos por foto
                        ?>
                                <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $foto->getTipo(); ?>">
                                    <div class="portfolio-wrap">
                                        <img src="data:image/jpeg;base64,<?php echo base64_encode($foto->getImagen()) ?>" class="img-fluid" alt="">
                                        <div class="portfolio-info">
                                            <div class="portfolio-links">
                                                <!-- Enlace para abrir el modal de edición -->
                                                <a href="#editPhotoModal" data-bs-toggle="modal" class="edit-btn" title="Editar imagen" data-id="<?php echo $foto->getId(); ?>" data-tipo="<?php echo $foto->getTipo(); ?>"><i class="bi bi-pencil"></i></a>
                                                <a href="#deletePhotoModal" data-bs-toggle="modal" class="delete-btn" title="Borrar imagen" data-id="<?php echo $foto->getId(); ?>" data-tipo="<?php echo $foto->getTipo(); ?>"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>


                    <!-- Modal de edición -->
                    <div class="modal fade" id="editPhotoModal" tabindex="-1" aria-labelledby="editPhotoModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editPhotoModalLabel">Editar Tipo de Foto</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="<?php echo URL . '/editarTipoFoto'; ?>">
                                        <div class="form-group">
                                            <label for="photoTypeInput">Tipo de foto:</label>
                                            <select class="form-control" name="idTipo" required id="photoType">
                                                <option value="">Selecciona un tipo</option>
                                                <?php
                                                if ($tipos) {
                                                    foreach ($tipos as $tipo) {
                                                ?>
                                                    <option value="<?php echo $tipo->getId() ?>"><?php echo $tipo->getTipo(); ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                            <input type="hidden" id="photoIdInput" name="idFoto" value=<?php echo $foto->getId() ?>>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Modal de borrado -->
                    <div class="modal fade" id="deletePhotoModal" tabindex="-1" aria-labelledby="editPhotoModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deletePhotoModalLabel">Eliminar foto</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="<?php echo URL . '/eliminarFoto'; ?>">
                                        <div class="form-group">
                                            <label for="photoTypeInput">¿Desea eliminar la foto?</label>
                                            
                                            <input type="hidden" name="id" value=<?php echo $foto->getId() ?>>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Aceptar</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <script>
                        // Asegúrate de que este script se ejecute después de que la página se haya cargado completamente
                        document.addEventListener("DOMContentLoaded", function() {
                            // Añadir evento click a cada botón de edición
                            var editButtons = document.querySelectorAll('.edit-btn');
                            editButtons.forEach(function(btn) {
                                btn.addEventListener('click', function() {
                                    // Rellenar el formulario del modal con los datos de la foto
                                    var fotoId = this.getAttribute('data-id');
                                    var fotoTipo = this.getAttribute('data-tipo');

                                    document.getElementById('photoTypeInput').value = fotoTipo;
                                    document.getElementById('photoIdInput').value = fotoId;
                                });
                            });
                        });
                    </script>



                </div>
            </section>




        </div>
</section>

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('imagePreview');
            output.innerHTML = '<img src="' + reader.result + '" style="max-width: 200px; max-height: 200px;">';
            // Mostrar los botones de guardar, cancelar y el selector del tipo de foto
            document.getElementById('saveButton').style.display = 'inline';
            document.getElementById('cancelButton').style.display = 'inline';
            document.getElementById('photoTypeSection').style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    document.getElementById('fileInput').addEventListener('change', previewImage);
</script>

<script>
    // Script para enviar el formulario automáticamente cuando la página carga
    window.onload = function() {
        document.getElementById('autoSubmitForm').submit();
    };
</script>