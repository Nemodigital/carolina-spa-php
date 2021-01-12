<?php
  $titulo = 'Contacto';
  include 'templates/header.php';
  include 'templates/navegacion.php';
?>

    <!-- hero -->
    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/contacto.jpg" class="img-fluid">
          <!-- en un dispositivo mediano esto se muestra -->
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">Contacto</h2>
        </div>
      </div>
    </div>

    <!-- Contenido principal -->
    <div class="container pt-4">
      <div class="row justify-content-center">
        <main class="col-lg-8 contenido-principal">
          <!-- en un dispositivo mediano esto se oculta -->
          <h2 class="d-block d-md-none text-uppercase text-center">
            Contacto
          </h2>
          <!-- formulario -->
          <!-- Esta clase needs-validation debe de ir en form y required tienen que ir en los campos para validar -->
          <form action="" class="p-5 mt-5 formulario-contacto needs-validation" novalidate>
            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" id="nombre" placeholder="Tu nombre" required>
              <div class="invalid-feedback">
                El nombre es obligatorio
              </div>
              <div class="valid-feedback">
                El nombre es correcto
              </div>
            </div><!--fin div-->

            <div class="form-group">
              <label for="email">E-mail:</label>
              <input type="email" class="form-control" id="email" placeholder="Tu email" required>
              <div class="invalid-feedback">
                El email es obligatorio
              </div>
              <div class="valid-feedback">
                El email es correcto
              </div>
            </div><!--fin div-->

            <div class="form-group">
              <label for="mensaje">Mensaje:</label>
              <textarea id="mensaje" class="form-control" cols="10" rows="3" required></textarea>
              <div class="invalid-feedback">
                El mensaje es obligatorio
              </div>
              <div class="valid-feedback">
                El mensaje es correcto
              </div>
            </div><!--fin div-->
            <input type="submit" class="btn btn-primary tex-uppercase" value="Enviar">

          </form>
        </main>
        
      </div><!--fin row-->
    </div><!--fin contenido principal-->

    <?php
      include 'templates/footer.php';
    ?>