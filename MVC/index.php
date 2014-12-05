<?php
/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 13/10/14
 * Time: 19:01
 */

require('helpers.php');

if(empty($_GET['url'])){
    $_GET['url']='home';

controller($_GET['url']);
}else {
    controller($_GET['url']);
}

?>

