<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 13/10/14
 * Time: 19:02
 */

$titulo = 'Bienvenido al Inicio';
$contenido = '....PASA....';

$variables = array('titulo'=>$titulo, 'contenido'=>$contenido);

view('inicio',$variables);
?>