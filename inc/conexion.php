<?php

try {
    $bd = new mysqli('localhost', 'root', 'root', 'carolina');
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}

// para comprobar si se conecta la BD. Abrir index.php y ver que imprime
/*
if($bd->ping() ) {
    echo 'Todo bien';
} else {
    echo $bd->connect_error;
}
*/