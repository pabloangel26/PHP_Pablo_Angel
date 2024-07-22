<?php
class ContactoController {


    private $conexionDb;

    public function __construct($conexionDb)
    {
        $this->conexionDb = $conexionDb;
    }

    public function Contactoindex()
    {
        include __DIR__ . '/../views/ContactoView.php';
    }

    /**
     * 
     * Se va a encargar de crear en la base de datos los contactos
     * @return void
     */
    public function crearContacto($dataForm)
    {
     
        
        $query = "INSERT INTO contacto (id,nombre,asunto,email,texto) VALUES(null,
        '".$dataForm['nombre']."',
        '".$dataForm['asunto']."',
        '".$dataForm['email']."',
        '". $dataForm['texto']."')";     
        /* 
        $params = [
            ':nombre' => $dataForm['nombre'],
            ':asunto' => $dataForm['asunto'],
            ':email' => $dataForm['email'],
            ':texto' => $dataForm['texto']
        ];
        */
        $this->conexionDb->runQuery($query);


        ///Se inserto correctmente
        $_SESSION['form_contacto_index'] = 'Contacto enviado al administrador.';
        header("Location:contactoindex.php");
        
    }
}