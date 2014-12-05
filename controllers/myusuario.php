<?php
require('./clases/Usuario.php');
$usuario = new Usuario();

$titulo = "Bienvenido al Myusuario";
$contenido = "Contenido de la variable";

$variables = array('titulo'=>$titulo,'contenido'=>$contenido,'nombre'=>$usuario->setUsuario());

view('myusuario',$variables);
?>