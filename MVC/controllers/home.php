<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 13/10/14
 * Time: 19:02
 */

$titulo = 'Bienvenidos al Home';
$contenido = '.....';

$variables = array('titulo'=>$titulo, 'contenido'=> $contenido,);

view('home',$variables);
