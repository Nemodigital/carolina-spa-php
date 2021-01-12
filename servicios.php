<?php
  $titulo = 'Servicios';
  include 'templates/header.php';
  include 'templates/navegacion.php';
?>

    <!-- hero -->
    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/servicios.jpg" class="img-fluid">
          <!-- en un dispositivo mediano esto se muestra -->
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">Servicios</h2>
        </div>
      </div>
    </div>

    <!-- contenido principal -->
    <div class="container pt-4">
      <div class="row">
        <main class="col-lg-8 contenido-principal">
          <!-- en un dispositivo mediano esto se oculta -->
          <h2 class="d-block d-md-none text-uppercase text-center">
            Servicios
          </h2>

          <!--collapse-->
          <!-- servicios -->
          <div id="servicios">

            <div class="card">
              <div class="card-header" id="servicio1">
                <h2 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion1" aria-expanded="true" aria-controls="#descripcion1">
                    Servicio 1
                  </button>
                </h2>
              </div><!--card-header-->
              <div id="descripcion1" class="collapse show" aria-labelledby="servicio1" data-parent="#servicios">
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam tenetur accusamus ab nam vero incidunt et eum dolor voluptatibus, reprehenderit necessitatibus, modi recusandae cumque sit perspiciatis modi recusandae cumque sit perspiciatis neque ea aut quod? reprehenderit necessitatibus, ,modi recusandae cumque sit perspiciatis modi recusandae cumque sit perspiciatis neque ea aut quod? reprehenderit necessitatibus modi recusandae cumque sit perspiciatis neque ea aut quod?</p>
                </div>
              </div>
            </div><!--card-->

            <div class="card">
              <div class="card-header" id="servicio2">
                <h2 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion2" aria-expanded="false" aria-controls="#descripcion2">
                    Servicio 2
                  </button>
                </h2>
              </div><!--card-header-->
              <div id="descripcion2" class="collapse" aria-labelledby="servicio2" data-parent="#servicios">
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam tenetur accusamus ab nam vero incidunt et eum dolor voluptatibus, reprehenderit necessitatibus, modi recusandae cumque sit perspiciatis modi recusandae cumque sit perspiciatis neque ea aut quod? reprehenderit necessitatibus, ,modi recusandae cumque sit perspiciatis modi recusandae cumque sit perspiciatis neque ea aut quod? reprehenderit necessitatibus modi recusandae cumque sit perspiciatis neque ea aut quod?</p>
                </div>
              </div>
            </div><!--card-->

            <div class="card">
              <div class="card-header" id="servicio3">
                <h2 class="mb-0">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#descripcion3" aria-expanded="false" aria-controls="#descripcion3">
                    Servicio 3
                  </button>
                </h2>
              </div><!--card-header-->
              <div id="descripcion3" class="collapse" aria-labelledby="servicio3" data-parent="#servicios">
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam tenetur accusamus ab nam vero incidunt et eum dolor voluptatibus, reprehenderit necessitatibus, modi recusandae cumque sit perspiciatis modi recusandae cumque sit perspiciatis neque ea aut quod? reprehenderit necessitatibus, ,modi recusandae cumque sit perspiciatis modi recusandae cumque sit perspiciatis neque ea aut quod? reprehenderit necessitatibus modi recusandae cumque sit perspiciatis neque ea aut quod?</p>
                </div>
              </div>
            </div><!--card-->

          </div><!--servicios-->

        </main>
        <!--sidebar-->
        <aside class="col-lg-4 pt-4 pt-lg-0">
          <div class="sidebar p-3">
            <h2 class="text-center text-uppercase mt-4">Nuevos Clientes</h2>
            <p class="lead text-center mt-4">
              Recibe 20% de descuento con este cupón
            </p>

            <div class="cupon px-2 py-5 mt-5">
              <p class="text-uppercase text-center mb-0">
                <span class="display-4">20% de Descuento</span><br>
                en todos los servicios
              </p>
            </div>

          </div>

        </aside><!--fin sidebar-->
      </div><!--fin row-->
    </div><!--fin contenido principal-->

    <!-- sección realiza una cita -->
    <!-- container-fluid es para que coja todo el ancho -->

    <?php
      include 'templates/citas.php';
      include 'templates/footer.php';
    ?>