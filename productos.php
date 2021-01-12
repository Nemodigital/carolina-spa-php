<?php
  $titulo = 'Productos';
  include 'templates/header.php';
  include 'templates/navegacion.php';
  include 'inc/funciones.php';
?>

    <!-- hero -->
    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/productos.jpg" class="img-fluid">
          <!-- en un dispositivo mediano esto se muestra -->
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">Productos</h2>
        </div>
      </div>
    </div>

    <!-- Contenido principal -->
    <div class="container pt-4 productos">
      <div class="row">
        <main class="col-lg-12 contenido-principal">
          <!-- en un dispositivo mediano esto se oculta -->
          <h2 class="d-block d-md-none text-uppercase text-center">
            Productos
          </h2>

          <!-- aquí va el código de los productos -->
          <div class="row">
            <!-- para mostrar los cards en columnas -->
            <div class="card-columns">
              <?php
                $productos = obtenerProductos();

                while($producto = $productos->fetch_assoc()) {
                // para probar si trae los productos
                /*
                echo "<pre>";
                  var_dump($producto);
                echo "</pre>";
              */
              ?>
              
              <!-- cards producto -->
              <div class="card">
                <a href="producto.php?id=<?php echo $producto['id']; ?>">
                  <img src="img/<?php echo $producto['imagen_mini']; ?>" class="card-img-top img-fluid">
                  <div class="card-body">
                    <h3 class="card-title text-center text-uppercase">
                    <?php echo $producto['nombre']; ?>
                    </h3>
                    <p class="card-text text-uppercase">
                      <?php echo $producto['descripcion_corta']; ?>
                    </p>
                    <p class="precio lead text-center mb-0">
                      <?php echo $producto['precio']; ?>€
                    </p>
                  </div><!--fin card-body-->
                </a>
              </div><!--fin card-->
              <?php } ?>
              
            </div><!--fin card-columns-->

          </div><!--fin segundo row-->

        </main>
        
      </div><!--fin priemr row-->
    </div><!--fin contenido principal-->

    <?php
      include 'templates/footer.php';
    ?>