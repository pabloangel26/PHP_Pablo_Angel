<?php
class Conexion {


    private $pdo;

    public function __construct()
    {        
        $dbName = "crearcontactos";
        $host = "localhost:3307";
        $username = "root";
        $dbPassword = "";
        $this->pdo = new PDO("mysql:host=".$host.";dbname=".$dbName,$username,$dbPassword);
    }


    public function runQuery(string $query,$params = [])
    {
        $smt = $this->pdo->prepare($query);

        foreach($params as $key =>  $value) {           
            $smt->bindParam($key,$value, PDO::PARAM_STR);
        }        
       
        $smt->execute();

        return $smt->fetchAll();
    }
}