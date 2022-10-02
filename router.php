
<?php

//require_once 'tabla.php'; //trae el php automatico (entonces hay q meterlo en un metodo "showindex" para que no lo muestre en seguida a menos q lo llame)

require_once 'src/funciones.php';


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// lee la acción
if (!empty($_GET['action'])) {  //si viene definina la reemplazamos
    $action = $_GET['action'];
}
else {
    $action = 'home'; //accion por defecto si no envían
}
// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode ('/', $action);


// determina que camino seguir según la acción
switch ($params[0]) {
    case 'calcular':
        showtabla($params[1]);
        break;
    case 'calcular5':
        showtabla(5);
        break;
    case 'calcular10':
        showtabla(10);
        break;
    case 'calcular20':
        showtabla(20);
        break;
    case 'home':
        showhome1();
        break;
 
    default:
        echo ('404 Page not found');
        break;
}

?>

