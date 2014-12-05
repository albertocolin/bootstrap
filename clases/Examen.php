<?php

    class Examen{

        public function muestraExamen(){
            echo"<div class='table-responsive'>";
            echo"<table class=table table-bordered>";
            $sql = "SELECT * FROM preguntas ORDER BY RAND() LIMIT 0, 10;";
            $consulta = mysql_query($sql)or die("Error de consulta");
            $cuantos = mysql_num_rows($consulta);
            for($i = 0; $i < $cuantos; $i++){
                $idp = mysql_result($consulta,$i,'idp');
                $pregunta = mysql_result($consulta,$i,'pregunta');
				
                echo"<tr><td>$pregunta</td><td><input type='text' name='resp$i'></td></tr>";   
				echo"<input type=hidden name=idp$i value=$idp>";
			}
		
            echo"</div>";
        }
    }
?>