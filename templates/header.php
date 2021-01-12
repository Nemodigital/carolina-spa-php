<!-- creamos una carpeta caché para que funcione este script -->
<!-- también ponemos código en el footer para que funcione - template/footer.php -->
<?php
    // Definir un nombre para cachear
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);

    // Definir archivo para cachear (puede ser .php también)
    // este if es para que cuando muestre producto.php no muestre siempre la misma página, ya que el caché guarda el primer producto visto
    if(isset($_GET['id'])) {
      $archivoCache = 'cache/'.$pagina."-".$_GET['id'].'.html';
    } else {
      $archivoCache = 'cache/'.$pagina.'.html';
    }
	
	// Cuanto tiempo deberá estar este archivo almacenado
	$tiempo = 36000;
	// Checar que el archivo exista, el tiempo sea el adecuado y muestralo
	if (file_exists($archivoCache) && time() - $tiempo < filemtime($archivoCache)) {
   	  include($archivoCache);
    	exit;
	}
	// Si el archivo no existe, o el tiempo de cacheo ya se venció genera uno nuevo
	ob_start();
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/fontawesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Italianno&family=Lato:ital,wght@0,400;0,900;1,700&family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <title><?php echo $titulo ?> | CarolinaSpa</title>
  </head>
  <body>

    <header class="encabezado-sitio container">
        <div class="row justify-content-md-between align-items-center">
            <div class="col-lg-4">
              <a href="index.php">
                <img src="img/logo.svg" class="img-fluid mx-auto d-block pt-4 pb-4">
              </a>
            </div>
            <div class="col-lg-4">
              <nav class="sociales text-center text-lg-right">
                <ul>
                  <li>
                    <a href="http://facebook.com"> 
                      <span class="sr-only"> Facebook</span>
                    </a>
                  </li>
                  <li>
                    <a href="http://twitter.com"> 
                      <span class="sr-only"> Twitter</span>
                    </a>
                  </li>
                  <li>
                    <a href="http://instagram.com">
                      <span class="sr-only"> Instagram</span>
                    </a>
                  </li>
                  <li>
                    <a href="http://pinterest.com"> 
                      <span class="sr-only"> Pinterest</span>
                    </a>
                  </li>
                  <li>
                    <a href="http://youtube.com"> 
                      <span class="sr-only"> YouTube</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
        </div>
    </header>