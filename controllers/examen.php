<?php
$idu=$_COOKIE['idu'];
$acceso=$_COOKIE['acceso'];
if($idu=="" or $acceso=="")
{
print"<meta http-equiv='refresh' content='0;
       url=./login.php?msg=1'>";
	   exit; 
	   }
SESSION_start();
$_SESSION['idu']=$idu;
$_SEESION['acceso']=1;
if($idu=="")
{
print"<meta http-equiv='refresh' content='0;
       url=./login.php?msg=$msg=1'>";	   
	   exit; 
}   
?>
<?php
error_reporting(E_ERROR);
require './clases/Examen.php';

$sql="select * from usuario
       where id=$idu";
$consulta=mysql_query($sql) or die("Error consulta");
$nombre=mysql_result($consulta,0,'Nombre');
$app=mysql_result($consulta,0,'ApellidoPaterno');
$apm=mysql_result($consulta,0,'ApellidoMaterno');

$titulo = "Bienvenido(a) al Examen";
$contenido = "Responde las preguntas:";
$nombrec = "$nombre $app $apm";


    //Creamos un objeto.
    $examen = new Examen();

    //Creamos un formulario en el cual mostramos los alumnos y el combo dinámico de los grupos.
    echo"<form action='index.php?url=examen' method=POST>";
    //Mostramos los alumnos ya sea asignados o desasignados de un grupo.
    $examen->muestraExamen();
    //Elemento del formulario 'add_alu_grup'.
    echo"<input type=hidden name=add_exa>";
    echo"<tr><td><input type=submit value=Agregar class=button_sok></td></tr>";
    echo"</form>";
	
	
	$sql02 = "SELECT MAX(aciertos) FROM usuario";
	$consulta02 = mysql_query($sql02)or die("Error de consulta 02");
	$max_aciertos = mysql_result($consulta02,0,'MAX(aciertos)');
	
	$sql03 = "SELECT aciertos FROM usuario where id=$idu";
	$consulta03 = mysql_query($sql03)or die("Error de consulta 03");
	$mis_aciertos = mysql_result($consulta03,0,'aciertos');
	
			//Sólo si recibe el elemento del formulario 'add_exa'.
    if(isset($_REQUEST['add_exa'])){
	$aciertos=0;
        for($y = 0; $y < 10; $y++){
            //Recibimos el checkbox de la posición [$y].
            $respuesta = $_REQUEST["resp$y"];
			$idp=$_REQUEST["idp$y"];
            //Va a llamar al método asignaGrupos sólo si el checkbox está lleno.
				$sql01 = "SELECT * FROM preguntas where idp=$idp";
				$consulta01 = mysql_query($sql01)or die("Error de consulta 01");
				$cuantos01 = mysql_num_rows($consulta01);
				$respuesta01 = mysql_result($consulta01,0,'respuesta');
			if($respuesta==$respuesta01){
				$aciertos=$aciertos+1;
			}
        }
	$taciertos=$aciertos;
		$sql04 = "update usuario set aciertos=$taciertos where id=$idu";
		$consulta04 = mysql_query($sql04)or die("Error de consulta 04");
		
		if($taciertos<6){
	$taciertos="$taciertos Reprobado";
	}
		if($taciertos>$max_aciertos){
	$taciertos="$taciertos Aprobado-Felicidades Nueva Puntuación Maxima";
	}
		if($taciertos>=6 and $taciertos<=$max_aciertos){
	$taciertos="$taciertos Aprobado";
	}
}
	
	$sql05 = "SELECT MAX(aciertos) FROM usuario";
	$consulta05 = mysql_query($sql05)or die("Error de consulta 05");
	$max_aciertos2 = mysql_result($consulta05,0,'MAX(aciertos)');
	
$variables = array('titulo'=>$titulo, 'contenido'=>$contenido, 'nombrec'=>$nombrec, 'mis_aciertos'=>$mis_aciertos, 
'max_aciertos2'=>$max_aciertos2, 'taciertos'=>$taciertos);
view('examen',$variables);
?>