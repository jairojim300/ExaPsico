
<?php
error_reporting(0);
   require_once("../libreria/dac.php");
   
   
  session_start(); 
   
   

$a22=$_SESSION['$cedula231'];



if($a22=="psicometria")
			
			{
			
			$a228="Machala";
			}
				
			
if ( $a22=="psicokattya"){
			
			
			$a228="Kattya";
			
			
			}
			
if ( $a22=="psicofreddy" or $a22=="PSICOFREDDY"){
			
			
			$a228="Freddy";
			
			
			}
			
if ( $a22=="psicokatty"){
			
			
			$a228="Katty";
			
			
			}
			
			
else if($a22=="psicowilson"){
			
			
			$a228="Wilson";
			
			}


//print $a22; 
   
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
 //print $a;
 
 	?>
	

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="836" align="center">
    <tr>
      <th height="152" scope="col"><p>Reporte desde <?=$v?> hasta <?=$a23?></p>
        <div align="center"></div>
        <table width="569" border="1" align="center">
        <tr>
          <th colspan="6" bgcolor="#000066" class="Estilo2" scope="col"><p class="Estilo9">Renovacion - Nombres </p>            </th>
          </tr>
        <tr>
          <td width="31" bgcolor="#FFFF99"><div align="center">#</div></td>
          <td width="55" bgcolor="#FFFF99"><div align="center">Fecha </div></td>
          <th width="69" bgcolor="#FFFF99" scope="row"><div align="center">Cedula </div></th>
          <td width="254" bgcolor="#FFFF99"><div align="center">Nombre </div></td>
          <th width="60" bgcolor="#FFFF99" scope="row"># Cert</th>
          <th width="60" bgcolor="#FFFF99" scope="row"># Fact </th>
        </tr>
		
		<?

   $a=1;
 //and examen.usuario='$a228'
	$busqueda = consultar("select examen.fecha,examen.nu_cedula,examen.certificado,examen.factura,alum_renov.nom_per,alum_renov.ape_per from examen,alum_renov WHERE examen.nu_cedula=alum_renov.nu_cedula and examen.usuario='$a228' and examen.tipo='Renovacion' and date(examen.fecha) BETWEEN '$v' and '$a23' ORDER BY examen.certificado");
  
  
  //date(fecha_des) BETWEEN '$fechaa' and '$cedula'"
   while( $fila = mysql_fetch_array($busqueda)) { 
	 			 
	?>

        <tr>
          <td class="Estilo4"><div align="center"><? print $a; ?></div></td>
          <td class="Estilo4"><div align="center">
              <?=$fila["fecha"]?>
          </div></td>
          <th class="Estilo4" scope="row"><div align="center">
            <?=$fila["nu_cedula"]?>
          </div></th>
		  <td><div align="left" class="Estilo4">
		    <?= ucwords($fila["nom_per"].' '.$fila["ape_per"])?> 
		    </div></td>
          <th class="Estilo4" scope="row"><?=$fila["certificado"]?></th>
          <th class="Estilo4" scope="row"><?=$fila["factura"]?></th>
		  <?
		$a++;
		  }
		  
		
		  ?>
          </tr>
      </table>
        <p>&nbsp;</p>
        <table width="569" border="1" align="center">
          <tr>
            <th colspan="6" bgcolor="#000066" class="Estilo2" scope="col"><p class="Estilo9">Renovacion - Exalumnos </p></th>
          </tr>
          <tr>
            <td width="31" bgcolor="#FFFF99"><div align="center">#</div></td>
            <td width="55" bgcolor="#FFFF99"><div align="center">Fecha </div></td>
            <th width="69" bgcolor="#FFFF99" scope="row"><div align="center">Cedula </div></th>
            <td width="254" bgcolor="#FFFF99"><div align="center">Nombre </div></td>
            <th width="60" bgcolor="#FFFF99" scope="row"># Cert </th>
            <th width="60" bgcolor="#FFFF99" scope="row"># Fact </th>
          </tr>
          <?

   $a=1;
 //and examen.usuario='$a228'
	$busqueda = consultar("select examen.fecha,examen.nu_cedula,examen.certificado,examen.factura,alum_renov.nom_per,alum_renov.ape_per from examen,alum_renov WHERE examen.nu_cedula=alum_renov.nu_cedula and examen.usuario='$a228' and examen.tipo='Ex-alumno' and date(examen.fecha) BETWEEN '$v' and '$a23' ORDER BY examen.certificado");
  
  
  //date(fecha_des) BETWEEN '$fechaa' and '$cedula'"
   while( $fila = mysql_fetch_array($busqueda)) { 
	 			 
	?>
          <tr>
            <td class="Estilo4"><div align="center"><? print $a; ?></div></td>
            <td class="Estilo4"><div align="center">
                <?=$fila["fecha"]?>
            </div></td>
            <th class="Estilo4" scope="row"><div align="center">
                <?=$fila["nu_cedula"]?>
            </div></th>
            <td><div align="left" class="Estilo4">
                <?= ucwords($fila["nom_per"].' '.$fila["ape_per"])?>
            </div></td>
            <th class="Estilo4" scope="row"><?=$fila["certificado"]?></th>
            <th class="Estilo4" scope="row"><?=$fila["factura"]?></th>
            <?
		$a++;
		  }
		  
		
		  ?>
          </tr>
        </table>
        <p>&nbsp;</p>
        <table width="503" border="1" align="center">
          <tr>
            <th colspan="5" bgcolor="#000066" class="Estilo2" scope="col"><p class="Estilo9">Renovacion - Extras </p></th>
          </tr>
          <tr>
            <td width="43" bgcolor="#FFFF99"><div align="center">#</div></td>
            <td width="62" bgcolor="#FFFF99"><div align="center">Fecha </div></td>
            <th width="93" bgcolor="#FFFF99" scope="row"><div align="center">Cedula </div></th>
            <td width="305" bgcolor="#FFFF99"><div align="center">Nombre </div></td>
            <th width="73" bgcolor="#FFFF99" scope="row"> <div align="center">#Cert</div></th>
          </tr>
          <?

   $a=1;
 
	$busqueda = consultar("select examen.fecha,examen.nu_cedula,examen.certificado,examen.factura,alum_renov.nom_per,alum_renov.ape_per from examen,alum_renov WHERE examen.nu_cedula=alum_renov.nu_cedula and examen.usuario='$a228' and examen.tipo='Extra' and date(examen.fecha) BETWEEN '$v' and '$a23' ORDER BY examen.certificado");
  
  
  //date(fecha_des) BETWEEN '$fechaa' and '$cedula'"
   while( $fila3 = mysql_fetch_array($busqueda)) { 
	 			 
	?>
          <tr>
            <td height="22" class="Estilo4"><div align="center"><? print $a; ?></div></td>
            <td class="Estilo4"><div align="center">
                <?=$fila3["fecha"]?>
            </div></td>
            <th class="Estilo4" scope="row"><div align="center">
                <?=$fila3["nu_cedula"]?>
            </div></th>
            <td><div align="left" class="Estilo4">
                <?= ucwords($fila3["nom_per"].' '.$fila3["ape_per"])?>
            </div></td>
            <th class="Estilo4" scope="row"><div align="center">
              <?=$fila3["certificado"]?>
            </div></th>
            <?
		$a++;
		  }
		  
		
		  ?>
          </tr>
        </table>
        <p>&nbsp;</p>
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
 //and usuario='$a228'
	$busqueda = consultar("select * from descuento where ide_des>0 and usuario='$a228' and date(fecha_des) BETWEEN '$v' and '$a23' and ciudad='Machala'");
  
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
	$busqueda23 = consultar("select sum(val_fac_des) from descuento where usuario='$a228' and date(fecha_des) BETWEEN '$v' and '$a23' and ciudad='Machala'");
    $fila23 = mysql_fetch_array($busqueda23);?>
				  
				  
                  <td class="Estilo7"> <div align="right">$ <? print $fila23[0]; ?> </div></td>
                  <td class="Estilo7">&nbsp;</td>
                </tr>
            </table></th>
          </tr>
        </table>
        <table width="750">
          <tr>
            <th scope="col">primero</th>
            <th scope="col">&nbsp;</th>
            <th scope="col">&nbsp;</th>
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
