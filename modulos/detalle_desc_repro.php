
<?php
error_reporting(0);
   require_once("../libreria/dac.php");
   
   
  session_start(); 
   
   

$a22=$_SESSION['$cedula231'];



if($a22=="psicometria")
			
			{
			
			$a22="Machala";
			}
				
			
			if ( $a22=="psicohuaquillas"){
			
			
			$a22="Huaquillas";
			
			
			}
			
			
			else if($a22=="psicopiñas"){
			
			
			$a22="Piñas";
			
			}


//print $a22; 
   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reprobados</title>
<style type="text/css">
<!--
.detalle1 {font-family: Geneva, Arial, Helvetica, sans-serif}
.Estilo2 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 14px; }
.Estilo4 {
	font-size: 9px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.Estilo9 {color: #FFFFFF; font-size: 12px; }
.Estilo10 {font-size: 14px}
-->
</style>
</head>

<? 

 $v= $_REQUEST['v'];
 $a23= $_REQUEST['a'];
 //print $a;
 
 	?>
	

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="836" align="center">
    <tr>
      <th height="152" scope="col"><p>Reporte desde <?=$v?> hasta <?=$a23?></p>
        <div align="center"></div>
        <table width="654" border="1" align="center">
        <tr>
          <th colspan="6" bgcolor="#000066" class="Estilo2" scope="col"><p class="Estilo9 Estilo10">Reprobados - Nombres </p>            </th>
          </tr>
        <tr>
          <td width="17" bgcolor="#FFFF99"><div align="center">#</div></td>
          <td width="46" bgcolor="#FFFF99"><div align="center">Fecha </div></td>
          <th width="58" bgcolor="#FFFF99" scope="row"><div align="center">Cedula </div></th>
          <td width="235" bgcolor="#FFFF99"><div align="center">Nombre </div></td>
          <th width="59" bgcolor="#FFFF99" scope="row"><div align="center">Teléfono</div></th>
          <th width="199" bgcolor="#FFFF99" scope="row"><div align="center">Observacion </div></th>
        </tr>
		
		<?

   $a=1;
 
	$busqueda = consultar("select * from reprobado where date(fecha) BETWEEN '$v' and '$a23' ORDER BY cedula");
  
  
  //date(fecha_des) BETWEEN '$fechaa' and '$cedula'"
   while( $fila = mysql_fetch_array($busqueda)) { 
	 			 
	?>

        <tr>
          <td class="Estilo4"><div align="center"><? print $a; ?></div></td>
          <td class="Estilo4"><div align="center">
              <?=$fila["fecha"]?>
          </div></td>
          <th class="Estilo4" scope="row"><div align="center">
            <?=$fila["cedula"]?>
          </div></th>
		  <td><div align="left" class="Estilo4">
		    <?= ucwords($fila["nombre"].' '.$fila["apellido"])?> 
		    </div></td>
          <th class="Estilo4" scope="row"><div align="center">
            <?=$fila["telefono"]?>
          </div></th>
          <th class="Estilo4" scope="row">
            <div align="left">
              <?=$fila["observacion"]?>
              </div></th><?
		$a++;
		  }
		  
		
		  ?>
          </tr>
      </table>       
  <p align="center">
    <label>
    <input type="button" name="Submit" value="Cerrar Ventana" onclick="window.close()" />
    </label>
  </p>
</form>
</body>
</html>

