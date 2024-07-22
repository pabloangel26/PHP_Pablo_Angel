<?php

class IndexModel {
    public function getServices() {
        // Simula la obtención de datos de una base de datos o API
        $services = array(
            array('id' => 1, 'name' => 'Audio', 'description' => 'Sumérgete en un sonido excepcional...'),
            array('id' => 2, 'name' => 'Video', 'description' => 'Diseñamos y instalamos sistemas de video...'),
            array('id' => 3, 'name' => 'Iluminación', 'description' => 'Controla la atmósfera de tus espacios...'),
            array('id' => 4, 'name' => 'Control', 'description' => 'Haz que tu espacio trabaje para ti...')
        );

        return $services;
    }
}

?>
