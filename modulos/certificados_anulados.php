<?
session_start();



$a2=$_SESSION['$cedula231'];



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
      <th height="64" colspan="3" scope="col"><p class="Estilo11">Certificados Anulados </p>      </th>
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
	

		
       	$busqueda23=consultar("select COUNT(*) from certificados_eliminados where date(fecha) BETWEEN '$fechaa' and '$cedula'");
       			
		$fila23 = mysql_fetch_array($busqueda23);		
		
				
		
		if($fila23[0]==0)
					{
							echo "<script LANGUAGE=\"JavaScript\">
								alert (\"No se han ANULADO CERTIFICADOS el dia Seleccionado.\");
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
      <th scope="row"><div align="right" class="Estilo10">Certificados Anulados</div></th>
      <td bgcolor="#FFFFFF"><div align="right" class="Estilo23"><? print $fila23[0] ?></div>
      <div align="right" class="Estilo23"></div><div align="right" class="Estilo23"></div></td>
     
    </tr>
    
    

	
	<tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th colspan="3" scope="row"><a href="modulos/detalle_anulados.php?v=<?=$fechaa?>&a=<?=$cedula?>" target="_blank">Ver Detalle </a></th>
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

