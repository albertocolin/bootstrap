<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 13/10/14
 * Time: 19:01
 */

function view($plantilla,$variables = array()){
    extract($variables);
    require('views/'.$plantilla.'.tlp.php');
}

function controller($nombre){
        if(empty($nombre)){
            $nombre = 'home';
        }
        $archivo = "controllers/$nombre.php";
        if(file_exists($archivo)){
            require("$archivo");
        }
        else
        {
            echo"Error de archivo no encontrado";
        }


    }






