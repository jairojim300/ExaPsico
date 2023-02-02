<?
session_start();



$a2=$_SESSION['$cedula231'];
$a4=$_SESSION['nom_usu'];



?> 


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<link rel="stylesheet" type="text/css" media="all" href="jscalendar/calendar-win2k-cold-1.css" title="win2k-cold-1" />
<script type="text/javascript" src="jscalendar/calendar.js"></script>
<script type="text/javascript" src="jscalendar/lang/calendar-	es.js"></script>
<script type="text/javascript" src="jscalendar/calendar-setup.js"></script>	




<style type="text/css">
<!--
.Estilo11 {font-family: Geneva, Arial, Helvetica, sans-serif}
.Estilo12 {
	font-size: 10px;
	color: #FF0000;
}
.Estilo13 {font-size: 10px; color: #0000FF; }
-->
</style>
</head>

<body>

	<? 
	error_reporting(0);
	$fechaa=$_POST['txt_fecha2'];
    $cedula=$_POST["txt_fecha"];
	
	?>
	
<form id="form1" name="form1" method="post" action="">
  <style type="text/css">
<!--
.Estilo23 {color: #003333; font-size: 11px; }
.Estilo5 {color: #FF0000; font-size: 11px; }
.Estilo10 {font-size: 11px; font-family: Geneva, Arial, Helvetica, sans-serif; color: #000000; }
.Estilo11 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	
  </style>
  
  <table width="414" align="center">
    <tr>
      <th height="64" colspan="3" scope="col"><p class="Estilo11">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="197" height="42">
          <param name="SRC" value="/rodar/imagen/reporte_fact_secre.swf" />
          <param name="BGCOLOR" value="" />
          <param name="movie" value="../imagen/reporte diario psico.swf" />
          <param name="quality" value="high" />
          <embed src="/rodar/imagen/reporte_fact_secre.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="197" height="42"></embed>
        </object>
        </p>      </th>
    </tr>
    <tr>
      <th width="159" scope="row"><div align="right" class="Estilo10">Desde</div></th>
      <td width="134"><input name="txt_fecha2" type="text" id="txt_fecha2" value="<?=$fechaa ?>" size="10" readonly="true">
        <img src="/rodar/imagen/reloj2.png" alt="Ver calendario" style="cursor:pointer" name="calendario4" width= "15" height="25" border="0" 
			align="absmiddle" id="calendario4" />
			
			<script type="text/javascript">
		    Calendar.setup({
        	inputField     :    "txt_fecha2",     // id of the input field
		    ifFormat       :    "%Y-%m-%d",      // format of the input field
	        button         :    "calendario4",  // trigger for the calendar (button ID)
	        align          :    "Bl",           // alignment (defaults to "Bl")
    	    singleClick    :    true,
			step           :    1
    	})
		</script>
      <td width="105">&nbsp;</td>
    </tr>
	
	
	
    <tr>
      <th scope="row"><div align="right" class="Estilo10">Hasta</div></th>
      <td><input name="txt_fecha" type="text" id="txt_fecha" value="<?=$cedula?>" size="10" readonly="true">
	  <img src="/rodar/imagen/reloj.png" alt="Ver calendario" style="cursor:pointer" name="calendario" width= "15" height="25" border="0" 
			align="absmiddle" id="calendario" /></td>
			
			<script type="text/javascript">
		    Calendar.setup({
        	inputField     :    "txt_fecha",     // id of the input field
		    ifFormat       :    "%Y-%m-%d",      // format of the input field
	        button         :    "calendario",  // trigger for the calendar (button ID)
	        align          :    "Bl",           // alignment (defaults to "Bl")
    	    singleClick    :    true,
			step           :    1
    	})
		</script>

      <td><strong>
        <input type="submit" name="btnbuscar" id="btnbuscar" value="Buscar" />
      </strong><strong>
      <input type="hidden" name="hiddenField" id="hiddenField" />
      </strong></td>
    </tr>
	
	<? 
	if(isset($_REQUEST['btnbuscar']))
	{
	

		$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
       	mysql_select_db("rodar2", $coneccion) or die(mysql_error());
       	$busqueda23=mysql_query("select COUNT(*) from factura2 where tipo_examen='Ex-alumno' and date(fecha) BETWEEN '$fechaa' and '$cedula'");
       	mysql_close($coneccion);
		
		$fila23 = mysql_fetch_array($busqueda23);		
		
		$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
       	mysql_select_db("rodar2", $coneccion) or die(mysql_error());
       	$busqueda24=mysql_query("select COUNT(*) from factura2 where tipo_examen='Renovacion' and date(fecha) BETWEEN '$fechaa' and '$cedula'");
       	mysql_close($coneccion);	
		
		$fila24 = mysql_fetch_array($busqueda24);
		
		$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
       	mysql_select_db("rodar2", $coneccion) or die(mysql_error());
       	$busqueda25=mysql_query("select COUNT(*) from factura2 where tipo_examen='Cantones' and date(fecha) BETWEEN '$fechaa' and '$cedula'");
       	mysql_close($coneccion);		
		
		$fila25 = mysql_fetch_array($busqueda25);
		
		$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
       	mysql_select_db("rodar2", $coneccion) or die(mysql_error());
       	$busqueda26=mysql_query("select COUNT(*) from factura2 where tipo_examen='Extra' and date(fecha) BETWEEN '$fechaa' and '$cedula'");
       	mysql_close($coneccion);		
		
		$fila26 = mysql_fetch_array($busqueda26);
		
		$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
       	mysql_select_db("rodar2", $coneccion) or die(mysql_error());
       	$busqueda37=mysql_query("select COUNT(*) from factura2 where tipo_examen='EVP Caducado' and date(fecha) BETWEEN '$fechaa' and '$cedula'");
       	mysql_close($coneccion);		
		
		$fila37 = mysql_fetch_array($busqueda37);
				
			
		$busqueda231 = consultar("select *, sum(val_fac_des) from descuento where ide_des>0 and date(fecha_des) BETWEEN '$fechaa' and '$cedula'");
			
		$fila231 = mysql_fetch_array($busqueda231);
		
		/// VALORES CON IVA 14% Y 12% /////////////////
		$fecha_val = $fila231['fecha_des'];
	
		if(($fecha_val <= '2016-05-31') or ($fecha_val >= '2017-06-01'))
		{
			$val_exa = '15';
			$val_ren = '16.80';
			$val_can = '16.80';
			$val_ext = '16.80';		
		}else {
			$val_exa = '15.26';
			$val_ren = '17.10';
			$val_can = '17.10';
			$val_ext = '17.10';		
		}
	 	////////////////////////////////////////
								
		
		if($fila23[0]==0 and $fila24[0]==0 and $fila25[0]==0 and $fila26[0]==0)
					{
							echo "<script LANGUAGE=\"JavaScript\">
								alert (\"No se han HECHO INGRESOS en el dia Seleccionado.\");
								</script>";
					}
		else {
	  	

	  ?> 
	
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
		
    <tr>
      <th scope="row"><div align="right" class="Estilo10">(1)Fact. Ex-alumnos </div></th>
      <td bgcolor="#FFFFFF"><div align="right" class="Estilo23"><? print $fila23[0] ?></div>
      <div align="right" class="Estilo23"></div><div align="right" class="Estilo23"></div></td>
      <td class="Estilo13">($<? print $val_exa; ?>)</td>
    </tr>
    <tr>
      <th scope="row"><div align="right" class="Estilo10">(2)Fact. Renovacion </div></th>
      <td><div align="right" class="Estilo23"><? print $fila24[0] ?></div></td>
      <td class="Estilo13">($<? print $val_ren; ?>)</td>
    </tr>
    <tr>
      <th scope="row"><div align="right" class="Estilo10">(3)Fact. EVP Caducado </div></th>
      <td><div align="right" class="Estilo23"><? print $fila37[0] ?></div></td>
      <td class="Estilo13">($20.52)</td>
    </tr>
    <tr>
      <th scope="row"> <div align="right" class="Estilo10">Fact. Cantones </div></th>
      <td><div align="right" class="Estilo23"><? print $fila25[0] ?></div></td>
      <td class="Estilo13">($<? print $val_can; ?>)</td>
    </tr>
    <tr>
      <th scope="row"><div align="right" class="Estilo10">(4)Fact. Extra </div></th>
      <td><div align="right" class="Estilo23"><? print $fila26[0] ?></div></td>
      <td><span class="Estilo13">($<? print $val_ext; ?>)</span></td>
    </tr>
    <tr>
      <th scope="row"><div align="right" class="Estilo10">Subtotal_1</div></th>
      <td>
        <div align="right" class="Estilo23">
          <? $a=$fila23[0]; $res=$a*$val_exa; print "$".$res;   ?>
        </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row"><div align="right" class="Estilo10">(+) Subtotal_2</div></th>
      <th scope="row"><div align="right" class="Estilo23">
        <? $s=$fila24[0]; $res22=$s*$val_ren; print "$".$res22;   ?>
      </div></th>
      <th scope="row">&nbsp;</th>
    </tr>
    <tr>
      <th scope="row"><div align="right" class="Estilo10">(+) Subtotal_3</div></th>
      <th scope="row"><div align="right" class="Estilo23">
          <? $p=$fila37[0]; $res32=$p*20.52; print "$".$res32;   ?>
      </div></th>
      <th scope="row">&nbsp;</th>
    </tr>
    <tr>
      <th scope="row"><div align="right" class="Estilo10">(+) Subtotal_4</div></th>
      <th scope="row"><div align="right" class="Estilo23"><? $b=$fila26[0]; $res2=$b*$val_ext; print "$".$res2;   ?></div></th>
      <th scope="row">&nbsp;</th>
    </tr>
    <tr>
      <th scope="row"><div align="right"><span class="Estilo10">(-) Desc. </span></div></th>
      <th scope="row"><div align="right" class="Estilo23"><? print "$".$fila231[7];  ?></div></th>
      <th scope="row">&nbsp;</th>
    </tr>
	

    <tr>
      <th scope="row"><div align="right" class="Estilo10">Total</div></th>
      <td> 
        <div align="right" class="Estilo5 Estilo11 Estilo12">
          <? $d=$fila231[7]; $tot= ($res + $res2 + $res22 + $res32) - $d; print "$".round($tot, 2); ?> 
        </div></td>
      <td>&nbsp;</td>
    </tr>
    

	
	<tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th colspan="3" scope="row"><a href="modulos/detalle_fact_secre.php?v=<?=$fechaa?>&a=<?=$cedula?>" target="_blank">Ver Detalle </a></th>
    </tr>

			  <?
  		
		}
	}
	  	
	  ?> 
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>

  
</form>
</body>
</html>

