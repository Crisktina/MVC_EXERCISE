<?php

class MemberModel
{
    public $conn;

    public function __construct()
    {
        require_once("/Applications/MAMP/htdocs/MVC_EXERCISE/config/Database.php");
        // require_once("http://localhost:8888/MVC_EXERCISE/config/Database.php");
        $db = new Database();
        $this->conn = $db->connection();
    }
    // extraer datos de la tabla
    public function getMembers()
    {
        // a través del lenguaje sql lo selecciono todo (tiene o no tiene socias?)
        $query = $this->conn->query('SELECT * FROM socias');
        return $query->fetch_all(MYSQLI_ASSOC); //obtener la clave valor
    }
}

// instanciar conexion de la tabla
// $connection =  new MemberModel();
// var_dump($connection->conn);

// instanciar datos
// $connection =  new MemberModel();
// var_dump($connection->getMembers());