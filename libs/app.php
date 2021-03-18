<?php
require_once 'controllers/errores.php';

class App{

    function __construct(){
        //echo "<p>Nueva app</p>";

        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        // sin definir controlador
        if(empty($url[0])){
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            $controller->render();
            return false;
        }
        $archivoController = 'controllers/' . $url[0] . '.php';

        if(file_exists($archivoController)){
            require_once $archivoController;

            // inicializar controlador
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            $num_parametros = sizeof($url);
            
            if($num_parametros > 1) {
                if($num_parametros > 2) {
                    $parametros = [];
                    for($i = 2; $i < $num_parametros; $i++) {
                        array_push($parametros, $url[$i]);
                    }
                    $controller->{$url[1]}($parametros);
                } else {
                    $controller->{$url[1]}();
                }

            } else{
                $controller->render();
            }

        }else{
            $controller = new Errores();
        }
    }
}

?>