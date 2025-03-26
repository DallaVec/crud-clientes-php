<?php

require_once('./configuration/connect.php');

class ClientModel extends Connect {
    private $table;

    public function __construct() {
        parent::__construct(); // Chama o construtor da classe pai (Connect)
        $this->table = 'clients'; 
    }

    public function getAll() {
        $sqlSelect = $this->connection->query("SELECT * FROM {$this->table}");
        $resultQuery = $sqlSelect->fetchAll(PDO::FETCH_ASSOC);
        return $resultQuery;
    }
}

?>
