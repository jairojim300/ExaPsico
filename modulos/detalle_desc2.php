
<?php
error_reporting(0);
   require_once("../libreria/dac.php");
   
   
  session_start(); 
   

$a22=$_SESSION['$cedula231'];
$a4=$_SESSION['nom_usu'];

   
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
	font-size: 9px;
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
        <table width="676" border="1" align="center">
        <tr>
          <th colspan="8" bgcolor="#000066" class="Estilo2" scope="col"><p class="Estilo9">Reporte Facturas </p>            </th>
          </tr>
        <tr>
          <td width="25" bgcolor="#FFFF99"><div align="center">#</div></td>
          <td width="59" bgcolor="#FFFF99"><div align="center">Fecha </div></td>
          <th width="64" bgcolor="#FFFF99" scope="row"><div align="center">Cedula </div></th>
          <td width="217" bgcolor="#FFFF99"><div align="center">Nombre </div></td>
          <th width="55" bgcolor="#FFFF99" scope="row"><div align="center"># Fact </div></th>
          <th width="47" bgcolor="#FFFF99" scope="row"><div align="center">Valor</div></th>
          <th width="67" bgcolor="#FFFF99" scope="row"><div align="center"># Examen </div></th>
          <th width="90" bgcolor="#FFFF99" scope="row"><div align="center">Tipo Examen </div></th>
        </tr>
		
		<?

   $a=1;
 
	
	
	$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
    mysql_select_db("rodar2", $coneccion) or die(mysql_error());
    $busqueda=mysql_query("select * from factura2 where date(fecha) BETWEEN '$v' and '$a23' order by num_cert");
    mysql_close($coneccion);
	
	
			
		
	
   while( $fila = mysql_fetch_array($busqueda)) { 
	 		
			$ced= $fila['num_cedu'];
			
		
		$busqueda55 = consultar("select * from alum_renov where nu_cedula='$ced'");
		
			$fila55 = mysql_fetch_array($busqueda55);
			
	$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
    mysql_select_db("rodar2", $coneccion) or die(mysql_error());
   	$busqueda66=mysql_query("select max(factura2.num_fact) from factura2 where num_cedu='$ced' and date(fecha) > '2018-02-01' and estado='impresa'");
   	mysql_close($coneccion);	
			
			$fila66 = mysql_fetch_array($busqueda66);
			//$feca = $fila66['fecha'];
			$fat = $fila66[0];
		
		$busqueda77 = consultar("select max(examen.certificado) from examen where nu_cedula='$ced' and factura='$fat'");
		//date(fecha)='$feca'
			$fila77 = mysql_fetch_array($busqueda77);
			$cer = $fila77[0];
		
	$tipex= $fila['tipo_examen'];	
	
	if($tipex == 'Anulado')
	{
		$cer2 = ' ';
	}else
	{
		$cer2 = $cer;
	}	
	
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
		    <?= ucwords($fila55["nom_per"].' '.$fila55["ape_per"])?> 
		    </div></td>
          <th class="Estilo4" scope="row"><div align="center">
            <?=$fila["num_fact"]?>
          </div></th>
          <th class="Estilo4" scope="row"><?=$fila["valor"]?></th>
          <th class="Estilo4" scope="row"><? print $cer2; ?></th>
          <th class="Estilo4" scope="row"><?=$fila["tipo_examen"]?></th>
		  <?
		$a++;
		  }
		  
		
		  ?>
          </tr>
      </table>
	  
        
        
        <table width="677">
          <tbody>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td align="right"><? print $a4; ?></td>
            </tr>
          </tbody>
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


