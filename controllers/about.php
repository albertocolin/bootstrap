<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 13/10/14
 * Time: 19:59
 */

$titulo = 'Bienvenido al About';
$contenido = '.....Conocenos.......';

$variables = array('titulo'=>$titulo, 'contenido'=>$contenido);

view('about',$variables);
?>