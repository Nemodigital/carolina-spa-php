<?php
  $titulo = 'Nombre página';
  include 'templates/header.php';
  include 'templates/navegacion.php';
?>

    <!-- hero -->
    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/nosotros.jpg" class="img-fluid">
          <!-- en un dispositivo mediano esto se muestra -->
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">Título aquí</h2>
        </div>
      </div>
    </div>

    <!-- Contenido principal -->
    <div class="container pt-4">
      <div class="row">
        <main class="col-lg-8 contenido-principal">
          <!-- en un dispositivo mediano esto se oculta -->
          <h2 class="d-block d-md-none text-uppercase text-center">
            Título aquí
          </h2>
        </main>
        <!-- sidebar -->
        <aside class="col-lg-4 pt-4 pt-lg-0">
          <div class="sidebar">
            <h2 class="text-center text-uppercase mt-4">Algo aquí</h2>
          </div>
        </aside><!--fin sidebar-->
      </div><!--fin row-->
    </div><!--fin contenido principal-->

    <?php
      include 'templates/footer.php';
    ?>