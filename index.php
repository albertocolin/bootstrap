<?php
   require'helpers.php';
    require 'template/header.php';
	require 'menuexamen.php';
    require 'template/footer.php';
    require 'clases/Usuario.php';
    require 'bd/bd.php';

    if(isset($_GET['url'])){

        controller($_GET['url']);
    }
    else{
        $_GET['url']='examen';

        controller($_GET['url']);
    }

?>