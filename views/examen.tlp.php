<html>
<head></head>
    <body>
		<h4><?php echo"<center>$titulo $nombrec</center>"; ?></h4>
		<h4><?php echo"<center>Aciertos Ultima Evaluación: <font color='blue'>$mis_aciertos</font>,    Maxima Puntuación Actual: 
		<font color='blue'>$max_aciertos2</font></center>"; ?></h4>
		<h4><?php 
				if($taciertos!=false){
				echo"<center>Aciertos: <font color='blue'>$taciertos</font></center>";
				}
		?></h4>
		<h4><?php echo"$contenido"; ?></h4>
    </body>
</html>
