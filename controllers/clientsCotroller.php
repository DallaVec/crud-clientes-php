<?php

require_once('./models/Client.php');

class ClientsController {
    private $model;

    // Construtor da classe
    public function __construct() {
        $this->model = new ClientModel();
    }

    // Método para obter todos os clientes
    public function getAll() {
        $resultData = $this->model->getAll();
        print_r($resultData);
    }
}

?>
