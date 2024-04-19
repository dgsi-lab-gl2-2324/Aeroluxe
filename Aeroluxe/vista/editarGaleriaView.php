<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="text-primary text-center">GALERÍA</h1>
            </div>

            <button class="btn btn-primary" onclick="document.getElementById('fileInput').click()">Añadir Foto</button>

            <form enctype="multipart/form-data" method="post" action="<?php echo URL . '/anadirFoto'; ?>">
                <input type="file" name="img" id="fileInput" style="display:none">

                <table class="table">
                    <tr>
                        <td>
                            <div id="imagePreview"></div>
                        </td>
                        <td>
                            <!-- Sección de tipo de foto, inicialmente oculta -->
                            <div id="photoTypeSection" class="form-group" style="display:none">
                                <label for="photoType">Tipo de Foto:</label>
                                <select class="form-control" name="photoType" required id="photoType">
                                    <option value="">Selecciona un tipo</option>
                                    <?php
                                    $tipos = $datos['tipos'];
                                    if ($tipos) {
                                        $i = 1;
                                        foreach ($tipos as $tipo) {

                                    ?>
                                            <option value="<?php echo $i ?>"><?php echo $tipo->getTipo(); ?></option>

                                    <?php
                                            $i++;
                                        }
                                    }

                                    ?>
                                </select>
                            </div>
                        </td>
                        <td>
                            <!-- Botones de Guardar y Cancelar, inicialmente ocultos -->
                            <button id="saveButton" class="btn btn-success" style="display:none">Guardar</button>
                        </td>
                        <td>
                            <button id="cancelButton" class="btn btn-danger" style="display:none">Cancelar</button>
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