<html>
<head>
<meta charset='utf-8'>
<?php
require('menulogin.php');
?>
</head>
<body>
<div class='table-responsive'>
<form action='valida.php' method='GET'>
<table class='table table-striped'>
<tr><td colspan=2>
<label for="Login"><h3><b>Login</b></h3></label></td></tr>
<tr><td>
<label for="user">Usuario</label></td>
<td><input name="user" type="text" placeholder="Nombre de usuario" ></td></tr>
<tr><td>
<label for="psw">Password</label></td>
<td><input name="psw" type="password" placeholder="Contraseña" ></td></tr>
<tr><td colspan='2'><input type='submit' value='Entrar'></td></tr>
</table>
</form>
</div>
</body>
</html>