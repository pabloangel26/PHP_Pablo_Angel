<?php
class LoginController {


    private $conexionDb;

    public function __construct($conexionDb)
    {
        $this->conexionDb = $conexionDb;
    }

    public function loadView()
    {
        include __DIR__ . '/../views/LoginView.php';
    }

    public function login($formData)
    {
        // Preparar la consulta SQL con parámetros
        $query = "SELECT * FROM users WHERE email = :email";
        $params = array(':email' => $formData['email']);

        try {
            // Ejecutar la consulta
            $usuariosDb = $this->conexionDb->runQuery($query, $params);

            // Verificar si se encontró un usuario con ese email
            if(count($usuariosDb) < 1) {
                http_response_code(404); // Usuario no encontrado
                echo "El usuario no existe";
            } else {
                // Verificar la contraseña
                if(password_verify($formData['password'], $usuariosDb[0]['password'])) {
                    http_response_code(200); // OK
                    echo "Usuario logueado exitosamente";
                    session_start(); // Inicia sesión aquí si es necesario
                    $_SESSION['user'] = $usuariosDb[0];
                    // Redireccionar a otra página después del login
                    header("Location: index.php");
                    exit();
                } else {
                    http_response_code(401); // Contraseña incorrecta
                    echo "La contraseña del usuario es incorrecta";            
                }  
            }
        } catch (PDOException $e) {
            // Capturar errores de base de datos
            http_response_code(500); // Error interno del servidor
            echo "Error al ejecutar la consulta: " . $e->getMessage();
        }
    }
}
?>
