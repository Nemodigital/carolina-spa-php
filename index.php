<?php
  $titulo = 'Inicio';
  include './templates/header.php';
  include './templates/navegacion.php';
  include './inc/funciones.php';
?>

    <!-- slider -->
    <!-- el data-ride se encarga de decirle al archivo js que es el carousel -->
    <div class="container">
        <div id="slider-principal" class="carousel slider mt-4" data-ride="carousel">
          <!-- aquí colocamos la paginación del slider -->
          <ol class="carousel-indicators">
            <li data-target="#slider-principal" data-slide-to="0" class="active"></li>
            <li data-target="#slider-principal" data-slide-to="1"></li>
            <li data-target="#slider-principal" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">

            <!-- hay que tener un div activo para que funcione -->
            <div class="carousel-item active">
              <img src="img/slide_01.jpg" alt="Nuestras instalaciones">
              <div class="carousel-caption">
                <h3 class="text-uppercase">Nuevas Instalaciones</h3>
              </div>
            </div><!--fin carousel-item-->

            <div class="carousel-item">
              <img src="img/slide_02.jpg" alt="Conoce nuestros servicios">
              <div class="carousel-caption">
                <h3 class="text-uppercase">Conoce nuestros servicios</h3>
              </div>
            </div><!--fin carousel-item-->

            <div class="carousel-item">
              <img src="img/slide_03.jpg" alt="Promoción">
              <div class="carousel-caption">
                <h3 class="text-uppercase">Nuevo sitio web, 2x1 en todos los servicios</h3>
              </div>
            </div><!--fin carousel-item-->

          </div> <!--fin carousel-inner-->
          <!-- flechas izquierda, derecha -->
          <a href="#slider-principal" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a href="#slider-principal" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
        </div> <!--fin slide-principal-->
    </div><!--container-->

    <!-- sección bienvenidos -->
    <section class="nuevo-sitio py-5">
      <h1 class="text-center text-uppercase mt-4 encabezado">
        <span class="text-lowercase d-block">bienvenidos a nuestro</span> Sitio web
      </h1>
      <p class="text-center mt-4">Te sentirás como nuevo(a) con nuestros<br> masajistas profesionales</p>
    </section>

    <!-- sección servicios -->

    <div class="container mb-5">
      <div class="row">

        <!-- primer servicio -->
        <div class="col-md-4 text-center mb-4">
          <!-- esta clase es el padre de la seccion. Lo de arriba es el bootstrap -->
          <div class="imagen-servicio">
            <img src="img/servicio_01.jpg" alt="servicios" class="img-fluid">
            <!-- el justify-content-center centra "conoce sobre nosotros"-->
            <!-- la clase no-gutters elimina los espacios de los lados del botón -->
            <div class="row no-gutters justify-content-center">
              <!-- servicio-info es el cuadradito de dentro -->
              <div class="col-md-10 pt-4 servicio-info">
                <h2 class="text-center text-uppercase encabezado">
                  <span class="text-lowercase d-block">Conoce sobre</span>nosotros
                </h2>
                <!-- botón -->
                <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
              </div>
            </div><!--row-->
          </div><!--imagen-destacada-->
        </div><!--cold-md-4-->

        <!-- segundo servicio -->
        <div class="col-md-4 text-center mb-4">
          <!-- esta clase es el padre de la seccion. Lo de arriba es el bootstrap -->
          <div class="imagen-servicio">
            <img src="img/servicio_02.jpg" alt="servicios" class="img-fluid">
            <!-- el justify-content-center centra "conoce sobre nosotros"-->
            <!-- la clase no-gutters elimina los espacios de los lados del botón -->
            <div class="row no-gutters justify-content-center">
              <!-- servicio-info es el cuadradito de dentro -->
              <div class="col-md-10 pt-4 servicio-info">
                <h2 class="text-center text-uppercase encabezado">
                  <span class="text-lowercase d-block">Nuestros</span>servicios
                </h2>
                <!-- botón -->
                <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
              </div>
            </div><!--row-->
          </div><!--imagen-destacada-->
        </div><!--cold-md-4-->

        <!-- tercer servicio -->
        <div class="col-md-4 text-center">
          <!-- esta clase es el padre de la seccion. Lo de arriba es el bootstrap -->
          <div class="imagen-servicio">
            <img src="img/servicio_03.jpg" alt="servicios" class="img-fluid">
            <!-- el justify-content-center centra "conoce sobre nosotros"-->
            <!-- la clase no-gutters elimina los espacios de los lados del botón -->
            <div class="row no-gutters justify-content-center">
              <!-- servicio-info es el cuadradito de dentro -->
              <div class="col-md-10 pt-4 servicio-info">
                <h2 class="text-center text-uppercase encabezado">
                  <span class="text-lowercase d-block">Visita nuestra</span>tienda
                </h2>
                <!-- botón -->
                <a href="#" class="btn btn-primary btn-block text-uppercase mt-4 py-3">Leer más</a>
              </div>
            </div><!--row-->
          </div><!--imagen-destacada-->
        </div><!--cold-md-4-->
      </div>
    </div>

    <!-- sección horario -->
    <div class="horario ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 p-4">
            <h2 class="text-center text-uppercase mt-4">Horarios</h2>
            <!-- lead crea un texto un poco más grande de lo normal -->
            <p class="text-center mt-3 lead">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid labore sapiente similique odit, architecto aperiam error, eum soluta quo quod nulla earum exercitationem, consectetur eaque voluptates nihil doloremque tenetur! Inventore.
            </p>
            <!-- tabla de precios -->
            <table class="table table-hover text-center mt-3">
              <thead>
                  <tr>
                      <th class="text-center">Día</th>
                      <th class="text-center">De</th>
                      <th class="text-center">Hasta</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                     <td>Lunes</td>
                      <td>09:00</td>
                      <td>19:00</td>
                  </tr>
                  <tr>
                      <td>Martes</td>
                      <td>09:00</td>
                      <td>19:00</td>
                  </tr>
                  <tr>
                      <td>Miércoles</td>
                      <td>09:00</td>
                      <td>19:00</td>
                  </tr>
                  <tr>
                      <td>Jueves</td>
                      <td>09:00</td>
                      <td>19:00</td>
                  </tr>
                  <tr>
                      <td>Viernes</td>
                      <td>09:00</td>
                      <td>19:00</td>
                  </tr>
                  <tr>
                      <td>Sábado</td>
                      <td>10:00</td>
                      <td>14:00</td>
                  </tr>
                  <tr>
                      <td>Domingo</td>
                      <td>Cerrado</td>
                      <td>Cerrado</td>
                  </tr>
              </tbody>
            </table>
          </div><!--col-md-6-->
          <div class="col-md-6 bg-horario"></div>
        </div><!--row-->
      </div><!--container-->
    </div><!--horario-->

    <!-- sección productos -->
    <section class="productos container py-5">
      <h2 class="encabezado text-center text-uppercase mt-4">
        <span class="text-lowercase d-block">nuestros</span> productos
      </h2>
      <div class="row py-5">
        
      <?php
        $productos = obtenerProductos(4);

        while($producto = $productos->fetch_assoc()) {
        // para probar si trae los productos
        /*
        echo "<pre>";
          var_dump($productos);
        echo "</pre>";
        */
      ?>

        <!-- producto 1 -->
        <div class="col-md-3 mb-4">
          <!-- cards -->
          <div class="card">
            <a href="producto.php?id=<?php echo $producto['id']; ?>">
              <img class="card-img-top" src="img/<?php echo $producto['imagen_mini']; ?>">
              <div class="card-body">
                <h3 class="card-title text-center text-uppercase">
                <?php echo $producto['nombre']; ?>
                </h3>
                <p class="card-text text-uppercase">
                  <?php echo $producto['descripcion_corta']; ?>
                </p>
                <p class="precio mb-0 lead text-center">
                  <?php echo $producto['precio']; ?>€
                </p>
              </div>
            </a>
          </div><!--card-->
        </div><!--col-md-3-->
        <?php } ?>

      </div><!--row-->
    </section>

    <!-- sección realiza una cita -->
    <!-- container-fluid es para que coja todo el ancho -->
    

    <?php
      include './templates/citas.php';
      include './templates/footer.php';
    ?>