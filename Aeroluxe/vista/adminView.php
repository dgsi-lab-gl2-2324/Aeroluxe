<main id="main">

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
              <?php
              if (isset($_GET['section'])) {
                $section = $_GET['section'];
                if ($section == 'registroAdminView') {
                  // Incluir el contenido de registroAdminView.php aquí
                  include 'registroAdminView.php';
                } elseif ($section == 'clientes') {
                  echo '<p>Sección de clientes...</p>';
                  // Código para mostrar la información de los clientes
                } elseif ($section == 'galeria') {
                  echo '<p>Sección de galería...</p>';
                  // Código para mostrar la galería
                } elseif ($section == 'otras-cosas') {
                  echo '<p>Sección de otras cosas...</p>';
                  // Código para mostrar otra información relevante
                }
              } else {
                echo '<h3>Hola administrador, desde aquí puedes gestionar tu página.</h3>';
              }
              ?>
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
                <li><a href="#" onclick="cargarContenido('clientes')">Clientes</a></li>
                <li><a href="#" onclick="cargarContenido('galeria')">Galería</a></li>
                <li><a href="#" onclick="cargarContenido('registroAdminView')">Añadir administrador</a></li>
                <li><a href="#" onclick="cargarContenido('otras-cosas')">Otras cosas...</a></li>
              </ul>

            </div><!-- End sidebar categories-->

          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

      </div>

    </div>
  </section><!-- End Blog Single Section -->

  <script>
    function cargarContenido(seccion) {
      const contenido = document.querySelector('.entry-content');
      fetch(`${seccion}.php`) // Cambiado para asumir que los archivos se llaman como las secciones con extensión .php
        .then(response => response.text())
        .then(data => {
          contenido.innerHTML = data;
        })
        .catch(error => console.error('Error al cargar el contenido:', error));
    }
</script>
