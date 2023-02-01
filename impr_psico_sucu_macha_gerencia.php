<?
session_start();

require_once("libreria/dac.php");

$a2=$_SESSION['$cedula231'];



if($a2=="psicometria")
			
			{
			
			$a2="Machala";
			
			}
				
			
			if ( $a2=="psicohuaquillas"){
			
			
			$a2="Huaquillas";
			
			
			}
			
			
			else if($a2=="psicopiñas"){
			
			
			$a2="Piñas";
			
			}


		//print $a2;



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
-->
</style>
</head>

<body>

	<? 
	error_reporting(0);
	$fechaa=$_POST['txt_fecha2'];
    $cedula=$_POST["txt_fecha"];
	$busqueda = consultar("select * from examen where fecha='$cedula' ");
	
	

//	

//select * from examen where fecha='$cedula' or fecha='$fechaa' and date(fecha) BETWEEN '$fechaa' and '$cedula'
	
    $fila = mysql_fetch_array($busqueda);


	?>
	
<form id="form1" name="form1" method="post" action="">
  <p>
    <style type="text/css">
<!--
.Estilo23 {color: #003333; font-size: 11px; }
.Estilo5 {color: #FF0000; font-size: 11px; }
.Estilo10 {font-size: 11px; font-family: Geneva, Arial, Helvetica, sans-serif; color: #000000; }
.Estilo11 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	
  </style>
    
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="200" border="1" align="center">
    <tr>
      <td><table width="314" align="center">
        <tr>
          <th height="64" colspan="3" scope="col"><p class="Estilo11">
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="367" height="27">
                <param name="movie" value="/rodar/imagen/Copia de reporte diario psico.swf" />
                <param name="quality" value="high" />
                <embed src="/rodar/imagen/Copia de reporte diario psico.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="367" height="27"></embed>
              </object>
          </p></th>
        </tr>
        <tr>
          <th width="91" scope="row"><div align="right" class="Estilo10">Desde</div></th>
          <td width="127"><input name="txt_fecha2" type="text" id="txt_fecha2" value="<?=$fechaa ?>" size="10" readonly="true" />
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
          </td>
          <td width="80">&nbsp;</td>
        </tr>
        <tr>
          <th scope="row"><div align="right" class="Estilo10">Hasta</div></th>
          <td><input name="txt_fecha" type="text" id="txt_fecha" value="<?=$cedula?>" size="10" readonly="true" />
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
	
	//$fecha23=$_POST['txt_fecha2'];
    //$cedula23=$_POST["txt_fecha"];
	
//	$fechaa=$_POST['txt_fecha2'];
//    $cedula=$_POST["txt_fecha"];
	
				
		$busqueda23 = consultar("select COUNT(*) from examen where ciudad = 'Machala' and examen='examen'  and date(fecha) BETWEEN '$fechaa' and '$cedula' ");
		$fila23 = mysql_fetch_array($busqueda23);
		
	
		
		
		$busqueda231 = consultar("select sum(val_fac_des) from descuento where ide_des>0  and date(fecha_des) BETWEEN '$fechaa' and '$cedula' and ciudad='Machala'");
		
		//$a2 es la variable de la ciudad
		
		$fila231 = mysql_fetch_array($busqueda231);
		
		
	 	
		if($fila23[0]==0)
					{
							echo "<script LANGUAGE=\"JavaScript\">
								alert (\"No se han REALIZADO EXAMENES en el dia Seleccionado.\");
								</script>";
					}
		else {
	//}  
	  	
	  ?>
        <tr>
          <th scope="row">&nbsp;</th>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th scope="row"><div align="right" class="Estilo10">Exam Diario </div></th>
          <td bgcolor="#FFFFFF"><div align="right" class="Estilo23"><? print $fila23[0] ?></div>
              <div align="right" class="Estilo23"></div>
            <div align="right" class="Estilo23"></div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th scope="row"> <div align="right" class="Estilo10">Valor </div></th>
          <td><div align="right" class="Estilo23">$12</div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th scope="row"><div align="right" class="Estilo10">Subtotal</div></th>
          <td><div align="right" class="Estilo23">
              <? $a=$fila23[0]; $res=$a*12; print "$".$res;   ?>
          </div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th scope="row"><div align="right"><span class="Estilo10">(-) Desc. </span></div></th>
          <th scope="row"><div align="right" class="Estilo23"><? print "$".$fila231[0];  ?></div></th>
          <th scope="row">&nbsp;</th>
        </tr>
        <tr>
          <th scope="row"><div align="right" class="Estilo10">Total</div></th>
          <td><div align="right" class="Estilo5 Estilo11 Estilo12">
              <? $d=$fila231[0]; $tot= $res - $d; print "$".$tot; ?>
          </div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th colspan="3" scope="row"><a href="modulos/detalle_desc.php?v=<?=$fechaa?>&amp;a=<?=$cedula?>" target="_blank">Ver Detalle </a></th>
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
      </table></td>
    </tr>
  </table>
  <p align="center"><a href="http://10.0.0.3/rodar2/indexgerencia.php?cont=7">Regresar</a></p>
</form>
</body>
</html>
