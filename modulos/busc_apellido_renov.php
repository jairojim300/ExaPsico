<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" media="all" href="jscalendar/calendar-win2k-cold-1.css" title="win2k-cold-1" />
<script type="text/javascript" src="jscalendar/calendar.js"></script>
<script type="text/javascript" src="jscalendar/lang/calendar-	es.js"></script>
<script type="text/javascript" src="jscalendar/calendar-setup.js"></script>
<style type="text/css">
<!--
.Estilo24 {font-size: 10px}
.Estilo27 {color: #FFFFFF}
.Estilo30 {color: #003300}
-->
</style>
</head>


<?php error_reporting(0);//require_once("../libreria/dac.php");?>



<style type="text/css">
<!--
body {
	background-image: url(../imagen/fondo.jpg);
	background-repeat: repeat-x;
}
.Estilo2 {
	font-size: 11px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #000000;
}
.Estilo3 {
	font-size: 11px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #000000;
	font-weight: bold;
}
.Estilo23 {font-size: 11px; font-family: Geneva, Arial, Helvetica, sans-serif; color: #003333; }
.Estilo5 {color: #003333}
.Estilo25 {font-size: 10}
.Estilo26 {font-size: 9px}
.Estilo31 {font-size: 11px}
-->
</style><form name="form1" method="post" action="" >
  <table width="377" align="center" bgcolor="#FFFFFF" class="Estilo2">
  <tr>
    <th height="58" colspan="5" scope="row"><p class="Estilo3">
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="266" height="32">
        <param name="BGCOLOR" value="" />
        <param name="BGCOLOR" value="" />
        <param name="movie" value="/rodar2/imagen/buscarapellido.swf" />
        <param name="quality" value="high" />
        <embed src="/rodar2/imagen/buscarapellido.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="266" height="32"></embed>
      </object>
    </p>      </th>
  </tr>
	
	
	<? 
	
	
	if(isset($_REQUEST['btnbuscar']))
 		{
 	       
	
	
	
	  $cedula=$_POST["txtcedula"];
	//print $cedula;
	$busqueda = consultar("SELECT * from alum_renov where ape_per like '%$cedula%' or nom_per like '%$cedula%' " );
 
	
	
	}
	
	?>
	
	
	
	
	
  <tr>
    <th colspan="2" align="left" scope="row"><div align="center" class="Estilo23 Estilo24">
      <div align="right" class="Estilo24">
        <div align="right"># Apellido:</div>
      </div>
    </div></th>
    <td width="223"><strong>
      <input name="txtcedula" type="text" class="Estilo3" id="txtcedula" value="<?=$cedula?>" size="35" maxlength="30" />
    </strong></td>
    <td width="54"><strong>
      <input type="submit" name="btnbuscar" id="btnbuscar" value="Buscar" />
    </strong></td>
    <td width="3">&nbsp;</td>
  </tr>
  <tr>
    <th height="16" colspan="2" align="left" scope="row"><div align="right"><span class="Estilo5"><span class="Estilo24"><span class="Estilo25"><span class="Estilo26"><span class="Estilo26"><span class="Estilo24"></span></span></span></span></span></span></div></th>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <th height="16" align="left" scope="row"><div align="center"><span class="Estilo5"><span class="Estilo24"><span class="Estilo25"><span class="Estilo26"><span class="Estilo26"><span class="Estilo24"></span></span></span></span></span></span>C.I.</div></th>
    <th colspan="2" align="left" scope="row"><div align="center">Alumno</div></th>
    <td colspan="2"><div align="left"><strong>Telefono</strong></div></td>
  </tr>
  
  <? 

  

	   while( $fila = mysql_fetch_array($busqueda)) { 
		

?>
  
  
  <tr>
    <th width="51" height="16" align="left" scope="row"><div align="left" class="Estilo2">
      <?=$fila["nu_cedula"]?>
    </div></th>
    <th colspan="2" align="left" scope="row"><div align="left" class="Estilo26">
      <div align="left"><?=$fila["ape_per"]." ".$fila["nom_per"]?>
      </div>
      </div></th>
    <td colspan="2"><div align="left" class="Estilo31"><span class="Estilo30 Estilo24"><strong>
      <?=$fila["tele"]?></strong></span></div></td>
    </tr>

  
  <? } 	?>
  
  <tr>
    <th height="40" colspan="5" align="center" scope="row"><p><a href="../indexsistema.php"></a>
      <label></label></p>      </th>
  </tr>
</table>	
</form>