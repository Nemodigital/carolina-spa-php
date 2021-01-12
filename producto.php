<?php
  // este código es para validar la url y que no inyecten codigo malicioso. Es un filtro. Para prevenir ataques.
  if(isset( $_GET['id'] ) ) {
    if( filter_var( $_GET['id'], FILTER_VALIDATE_INT ) ) {
      $producto_id = $_GET['id'];
    }else {
      header('Location: 404.html');
      exit;
    }
  }

  $titulo = 'Productos';
  include 'templates/header.php';
  include 'templates/navegacion.php';
  include 'inc/funciones.php';

  // este código trae el producto seleccionado (uno solo)
  $resultado = obtenerProducto( $producto_id );

  // este if es para verificar que si meten un número más alto de los productos que hay en la bd por la url, salga un error de producto no encontrado
  if($resultado->num_rows > 0) {
    while( $producto = $resultado->fetch_assoc() ) {
      // para probar si trae los productos
                /*  
                  echo "<pre>";
                    var_dump($producto);
                  echo "</pre>";
                */
?>

      <!-- hero -->
      <div class="container pt-4">
        <div class="row no-gutters">
          <div class="col-12 hero">
            <img src="img/<?php echo $producto['imagen_completa']; ?>" class="img-fluid">
            <!-- en un dispositivo mediano esto se muestra -->
            <h2 class="text-uppercase d-none d-md-block py-3 px-5"><?php echo $producto['nombre']; ?></h2>
          </div>
        </div>
      </div>

      <!-- Contenido principal -->
      <div class="container pt-4">
        <div class="row no-gutters">
          <main class="col-lg-8 contenido-principal">
            <!-- en un dispositivo mediano esto se oculta -->
            <h2 class="d-block d-md-none text-uppercase text-center">
              <?php echo $producto['nombre']; ?>
            </h2>
            <p>
              <?php echo $producto['descripcion']; ?>
            </p>
          </main>
          <!-- sidebar -->
          <aside class="col-lg-4 pt-4 pt-lg-0">
            <div class="sidebar pt-5 descripcion_producto">
              <h2 class="text-center text-uppercase mt-4">Descripción</h2>
              <p class="text-center m-3">
                <?php echo $producto['descripcion_corta']; ?>
              </p>
              <h3 class="text-uppercase text-center mt-5">Precio</h3>
              <p class="display-4 text-center">
                <?php echo $producto['precio']; ?>€
              </p>
            </div>
          </aside><!--fin sidebar-->
        </div><!--fin row-->
      </div><!--fin contenido principal-->

    <?php
    }// fin del while

  //Fin del if para verificar si introducen un número más alto 
  } else {
    echo '<h2 class="text-center text-uppercase mt-4">Producto no encontrado</h2>';
  }
      include 'templates/footer.php';
    
    ?>