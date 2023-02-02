
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
        <table width="844" border="1" align="center">
        <tr>
          <th colspan="8" bgcolor="#000066" class="Estilo2" scope="col"><p class="Estilo9">Reporte Facturas </p>            </th>
          </tr>
        <tr>
          <td width="27" bgcolor="#FFFF99"><div align="center">#</div></td>
          <td width="63" bgcolor="#FFFF99"><div align="center">Fecha </div></td>
          <th width="67" bgcolor="#FFFF99" scope="row"><div align="center">Cedula </div></th>
          <td width="326" bgcolor="#FFFF99"><div align="center">Nombre </div></td>
          <th width="71" bgcolor="#FFFF99" scope="row"><div align="center"># Fact </div></th>
          <th width="58" bgcolor="#FFFF99" scope="row"><div align="center">Valor</div></th>
          <th width="90" bgcolor="#FFFF99" scope="row"><div align="center"># Examen </div></th>
          <th width="90" bgcolor="#FFFF99" scope="row"><div align="center">Tipo Examen </div></th>
        </tr>
		
		<?

   $a=1;
 
	
	
	$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
    mysql_select_db("rodar2", $coneccion) or die(mysql_error());
    $busqueda=mysql_query("select * from factura2 where date(fecha) BETWEEN '$v' and '$a23' order by num_fact");
    mysql_close($coneccion);
	
	
			
		
	
   while( $fila = mysql_fetch_array($busqueda)) { 
	 		
			$ced= $fila['num_cedu'];
			$tiex = $fila['tipo_examen'];
			
		
		$busqueda55 = consultar("select * from alum_renov where nu_cedula='$ced'");
		
			$fila55 = mysql_fetch_array($busqueda55);
			
	$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
    mysql_select_db("rodar2", $coneccion) or die(mysql_error());
   	$busqueda66=mysql_query("select max(factura2.num_fact) from factura2 where num_cedu='$ced' and date(fecha) > '2018-01-01' and estado='impresa'");
   	mysql_close($coneccion);	
			
			$fila66 = mysql_fetch_array($busqueda66);
			//$feca = $fila66['fecha'];
			$fat = $fila66[0];
		
		$busqueda77 = consultar("select max(examen.certificado) from examen where nu_cedula='$ced' and factura='$fat'");
		//date(fecha)='$feca'
			$fila77 = mysql_fetch_array($busqueda77);
			$cer = $fila77[0];
			
			if($tiex <> 'Anulado')
			{
				$cert = $cer;
			}else
			{
				$cert = ' ';
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
          <th class="Estilo4" scope="row"><? print $cert; ?></th>
          <th class="Estilo4" scope="row"><?=$fila["tipo_examen"]?></th>
		  <?
		$a++;
		  }
		  
		
		  ?>
          </tr>
      </table>
	  <? 
				 
	$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
    mysql_select_db("rodar2", $coneccion) or die(mysql_error());
    $busqueda23=mysql_query("select COUNT(*) from factura2 where tipo_examen='Ex-alumno' and date(fecha) BETWEEN '$v' and '$a23'");
    mysql_close($coneccion);
		
	$fila23 = mysql_fetch_array($busqueda23);		
	$ex = $fila23[0] * 13.39;	
	
	$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
    mysql_select_db("rodar2", $coneccion) or die(mysql_error());
    $busqueda24=mysql_query("select COUNT(*) from factura2 where tipo_examen='Renovacion' and date(fecha) BETWEEN '$v' and '$a23'");
    mysql_close($coneccion);	
		
	$fila24 = mysql_fetch_array($busqueda24);
	$re = $fila24[0] * 15;
		
	$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
    mysql_select_db("rodar2", $coneccion) or die(mysql_error());
    $busqueda26=mysql_query("select COUNT(*) from factura2 where tipo_examen='Extra' and date(fecha) BETWEEN '$v' and '$a23'");
    mysql_close($coneccion);
	
	$fila26 = mysql_fetch_array($busqueda26);
	$ext = $fila26[0] * 15;
	
	$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
    mysql_select_db("rodar2", $coneccion) or die(mysql_error());
    $busqueda32=mysql_query("select COUNT(*) from factura2 where tipo_examen='EVP Caducado' and date(fecha) BETWEEN '$v' and '$a23'");
    mysql_close($coneccion);
	
	$fila32 = mysql_fetch_array($busqueda32);
	$cad = $fila32[0] * 18;
	
	$valor_total= $ex + $re +  $ext + $cad;
			
	
	?>
        <p>TOTAL FACTURAS = $ <? print $valor_total; ?> (valor sin iva)</p>
        
        <table width="622" align="center">
          <tr>
            <th scope="col"><table width="590" border="1">
                <tr>
                  <th colspan="4" bgcolor="#000066" class="Estilo2" scope="col"><p class="Estilo9">Cuadre Caja - Detalle. </p>                      </th>
                </tr>
                <tr>
                  <th width="72" bgcolor="#FFFF99" scope="row"># Fact </th>
                  <td width="272" bgcolor="#FFFF99"><div align="center">Detalle </div></td>
                  <td width="58" bgcolor="#FFFF99"><div align="center">Cant</div></td>
                  <td width="58" bgcolor="#FFFF99"><div align="center">Fecha</div></td>
                </tr>
                <?

   $a=1;
 
	$busqueda = consultar("select * from descuento where ide_des>0 and date(fecha_des) BETWEEN '$v' and '$a23'");
  
   while( $fila = mysql_fetch_array($busqueda)) { 
	 			 
	?>
                <tr>
                  <th class="Estilo4" scope="row"><div align="left">
                    <?=$fila["num_fac_des"]?>
                  </div></th>
                  <td><div align="left" class="Estilo4">
                      <?=$fila["desc_des"]?>
                  </div></td>
                  <td class="Estilo4"><div align="right">$
                      <?=$fila["val_fac_des"]?>
                  </div></td>
                  <td class="Estilo4"><div align="center">
                    <?=$fila["fecha_des"]?>
                  </div></td>
                  <?
		$a++;
		  }
		  
		
		  ?>
                </tr>
                <tr>
                  <th class="Estilo4" scope="row">&nbsp;</th>
                  <td><div align="right" class="Estilo6">Total</div></td>
				  
				  <? 
				  //usuario='$a228' and
	$busqueda23 = consultar("select sum(val_fac_des) from descuento where date(fecha_des) BETWEEN '$v' and '$a23'");
    $fila23 = mysql_fetch_array($busqueda23);?>
				  
				  
                  <td class="Estilo7"> <div align="right">$ <? print $fila23[0]; ?> </div></td>
                  <td class="Estilo7">&nbsp;</td>
                </tr>
            </table></th>
          </tr>
        </table>
        <table width="750">
          <tr>
            <th scope="col">&nbsp;</th>
            <th scope="col">&nbsp;</th>
            <th align="right" scope="col"><? print $a4; ?></th>
          </tr>
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

