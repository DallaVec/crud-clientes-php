<?php
    define('HOST', 'localhost');
    define('DBNAME', 'crud-cliente-php');
    define('USER', 'root');
    define('PASSWORD', '');

    //classe para fazer conexao com o mySQL
    class Connect{
        protected $connection;

        function __construct(){
            $this->connectDatabase();
        }

        private function connectDatabase(){
            try 
            {
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASSWORD);
            } 
            catch (PDOException $e) 
            {
                echo "Error to connect with Database!".$e->getMessage();
                die();
            }
        } 

    }
?>