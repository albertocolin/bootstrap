<?php
    function view($plantilla, $variables = array()){
        extract($variables);
        require('views/'.$plantilla.'.tlp.php');
    }

    function controller($nombre){
        if(empty($nombre))
              $nombre = 'examen';

        $archivo = "controllers/$nombre.php";

        if(file_exists($archivo))
            require($archivo);
        else
            echo"Error archivo no encontrado";
    }
?>