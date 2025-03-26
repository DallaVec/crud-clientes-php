<?php

    require_once('./controllers/clientsCotroller.php');

    $action = !empty($_GET['a']) ? $_GET['a'] : 'getAll';

    $controller = new ClientsController();

    // Verifica se o método existe e chama dinamicamente
    if (method_exists($controller, $action)) {
        $controller->$action();  
    } else {
        echo "Action not found!";
    }

?>
