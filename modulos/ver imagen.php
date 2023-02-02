<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>
<? 		
require_once("../libreria/dac.php");

@session_start();//sesion capturar los datos de la sesion
	 $cedula=$_SESSION['nu_cedula'];
	  echo $cedula;
	 ?>
<body>
<div align="center">
</div>
</body>
</html>
