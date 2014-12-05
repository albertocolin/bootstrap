<?php
$idu=$_GET['idu'];
setCookie('idu',$idu);
setCookie('acceso',1);
SESSION_start();
$_SESSION['idu']=$idu;
$_SEESION['acceso']=1;
if($idu=="")
{
print"<meta http-equiv='refresh' content='0;
       url=login.php?msg=$msg=1'>";	   
	   exit; 
}
else
{
setCookie('idu',$idu);
setCookie('acceso',1);
print"<meta http-equiv='refresh' content='0;
       url=index.php'>";	   
	   exit;	   
	   }
	   ?>
