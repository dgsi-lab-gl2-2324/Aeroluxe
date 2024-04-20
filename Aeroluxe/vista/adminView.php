<main id="main">
<?php
 $mensaje = $datos['mensaje'];
?>
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <h2>Panel de administración</h2>
    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Blog Single Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">

          <article class="entry entry-single">

            <div class="entry-content">

              <div class="entry-content">


                <?php
                if ($mensaje != null) {
                  echo $mensaje;
                }
                $opcion = $datos['opcion'];
                if ($opcion != null) {
                  if ($opcion == "admin") {
                    require_once 'registroAdminView.php';
                  } else if ($opcion == "clientes") {
                    require_once 'mostrarClientesView.php';
                  } else if ($opcion == "galeria") {
                    require_once 'editarGaleriaView.php';
                  }
                } else {
                  echo '<h3>Hola administrador, desde aquí puedes gestionar tu página.</h3>';
                }
                ?>
              </div>

            </div>

          </article><!-- End blog entry -->

        </div><!-- End blog entries list -->

        <div class="col-lg-4">
          <div class="sidebar">

            <h3 class="sidebar-title">Buscar</h3>
            <div class="sidebar-item search-form">
              <form action="">
                <input type="text">
                <button type="submit"><i class="bi bi-search"></i></button>
              </form>
            </div><!-- End sidebar search formn-->

            <h3 class="sidebar-title">Acciones</h3>
            <div class="sidebar-item categories">
              <ul>
                <li><a href="<?php echo URL . '/menuAdminAdmin' ?>">Añadir administrador</a></li>
                <li><a href="<?php echo URL . '/menuAdminClientes' ?>">Clientes</a></li>
                <li><a href="<?php echo URL . '/menuAdminGaleria' ?>">Galería</a></li>
              </ul>
            </div><!-- End sidebar categories-->


          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

      </div>

    </div>
  </section><!-- End Blog Single Section -->