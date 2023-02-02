
<?php
error_reporting(0);
   require_once("../libreria/dac.php");
   
   
  session_start(); 
   

$a22=$_SESSION['$cedula231'];

   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reporte Psicometria</title>
<style type="text/css">
<!--
.detalle1 {font-family: Geneva, Arial, Helvetica, sans-serif}
.Estilo2 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 14px; }
.Estilo4 {
	font-size: 11px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.Estilo6 {font-size: 13px}
.Estilo7 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 13px; }
.Estilo9 {color: #FFFFFF; font-size: 12px; }
-->
</style>
</head>

<? 

 $v= $_REQUEST['v'];
 $a23= $_REQUEST['a'];
 
 
 	?>
	

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="836" align="center">
    <tr>
      <th height="152" scope="col"><p>Reporte desde <?=$v?> hasta <?=$a23?></p>
        <div align="center"></div>
        <table width="618" border="1" align="center">
        <tr>
          <th colspan="8" bgcolor="#000066" class="Estilo2" scope="col"><p class="Estilo9">Reporte Examenes Anulados </p>            </th>
          </tr>
        <tr>
          <td width="25" bgcolor="#FFFF99"><div align="center">#</div></td>
          <td width="69" bgcolor="#FFFF99"><div align="center">Fecha </div></td>
          <th width="65" bgcolor="#FFFF99" scope="row"><div align="center">Cedula </div></th>
          <td width="262" bgcolor="#FFFF99"><div align="center">Nombre </div></td>
          <th width="67" bgcolor="#FFFF99" scope="row"><div align="center"># Examen </div></th>
          <th width="90" bgcolor="#FFFF99" scope="row"><div align="center">Tipo Examen </div></th>
        </tr>
		
		<?

   $a=1;
 
	
	
	
    $bus=consultar("select * from certificados_eliminados where date(fecha) BETWEEN '$v' and '$a23' order by observacion");			
		
	
   while( $fila = mysql_fetch_array($bus)) { 
	 		

	
	?>

        <tr>
          <td class="Estilo4"><div align="center"><? print $a; ?></div></td>
          <td class="Estilo4"><div align="center">
               <?=$fila["fecha"]?>
          </div></td>
          <th class="Estilo4" scope="row"><div align="center">
            <?=$fila["num_cedu"]?>
          </div></th>
		  <td><div align="left" class="Estilo4">
		    <?= ucwords($fila["nombre"])?> 
		    </div></td>
          <th class="Estilo4" scope="row"><div align="center">
            <?=$fila["observacion"]?>
          </div></th>
          <th class="Estilo4" scope="row"><?=$fila["curso"]?></th>
		  <?
		$a++;
		  }
		  
		
		  ?>
          </tr>
      </table>
	  
        
        
        <table width="622" align="center">
          <tr>
            <th scope="col"></th>
          </tr>
        </table>
        <table width="750">
          
        </table>
      </th>
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



