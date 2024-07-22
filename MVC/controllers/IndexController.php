<?php

require_once __DIR__ . '/../models/IndexModel.php';

class IndexController {
    public function index() {
        // Carga el modelo
        $model = new IndexModel();

        // Obtiene los datos necesarios para la vista
        $data = $model->getServices();

        // Incluye la vista para mostrar los datos
        include __DIR__ . '/../views/IndexView.php';
       
    }
}

?>
