<?php

//require_once __DIR__ . '/../models/IndexModel.php';

class NosotrosController {
    public function nosotros() {
       

       

        // Incluye la vista para mostrar los datos
        //require_once __DIR__ . '/../views/indexView.php';
        include __DIR__ . '/../views/NosotrosView.php';
        //include __DIR__ . '/../views/ContactoView.php';

        // Devuelve los datos para que puedan ser utilizados en la vista
        
    }
}

?>
