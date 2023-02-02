<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" media="all" href="jscalendar/calendar-win2k-cold-1.css" title="win2k-cold-1" />
<script type="text/javascript" src="jscalendar/calendar.js"></script>
<script type="text/javascript" src="jscalendar/lang/calendar-	es.js"></script>
<script type="text/javascript" src="jscalendar/calendar-setup.js"></script>
<style type="text/css">
<!--
.Estilo24 {font-size: 10px}
-->
</style>
</head>


<?php //require_once("../libreria/dac.php");?>



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
.Estilo27 {
	color: #FFFFFF;
	font-size: 18px;
}
.Estilo29 {color: #FFFFFF}
-->
</style><form name="form1" method="post" action="" >
  <table width="51%" align="center" bgcolor="#FFFFFF" class="Estilo2">
  <tr>
    <th height="38" colspan="2" scope="row"><p class="Estilo3">
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="172" height="32">
        <param name="SRC" value="/rodar2/imagen/reimprimirfactura.swf" />
        <param name="BGCOLOR" value="" />
        <param name="movie" value="../imagen/reimprimirfactura.swf" />
        <param name="quality" value="high" />
        <embed src="/rodar2/imagen/reimprimirfactura.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="172" height="32"></embed>
      </object>
    </p>      </th>
  </tr>
		<? 

    $cedula=$_POST["txtcedula"];
	
    /*$coneccion=mysql_connect("localhost", "root", "rodar") or die(mysql_error());
    mysql_select_db("rodar", $coneccion) or die(mysql_error());
    $consulta=mysql_query("SELECT * from alum_renov where nu_cedula='$cedula' and estado_factura='impresa'");
     mysql_close($coneccion);	*/
	 
	 $bus = consultar("SELECT * from alum_renov where nu_cedula='$cedula' and estado_factura='impresa'");
	
	$fila = mysql_fetch_array($bus);
	
	
	$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
    mysql_select_db("rodar2", $coneccion) or die(mysql_error());
    $maximo=mysql_query("select max(id_factura) from factura2 where num_cedu='$cedula'");
     mysql_close($coneccion);	
	 
	 $fila8 = mysql_fetch_array($maximo);
	
	$max = $fila8[0];
	
	
	$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
    mysql_select_db("rodar2", $coneccion) or die(mysql_error());
    $consulta=mysql_query("select * from factura2 where num_cedu='$cedula' and estado='impresa' and valor>'0' and id_factura='$max'");
     mysql_close($coneccion);	
	
	  $fila11 = mysql_fetch_array($consulta);
	
	


?>
	

	
	
  <tr>
    <th width="17%" align="left" scope="row"><div align="center" class="Estilo23 Estilo24">
      <div align="right" class="Estilo24">
        <div align="right"># Cedula:</div>
      </div>
    </div></th>
    <td><strong>
      <input name="txtcedula" type="text" class="Estilo3" id="txtcedula" value="<?=$fila["nu_cedula"]?>" size="11" maxlength="10" />
      <input type="submit" name="btnbuscar" id="btnbuscar" value="Buscar" />
      <input type="hidden" name="hiddenField" id="hiddenField" />
    </strong></td>
    </tr>
  
  <tr>
    <th width="17%" height="16" align="left" scope="row"><div align="right"><span class="Estilo5"><span class="Estilo24"><span class="Estilo25"><span class="Estilo26"><span class="Estilo26"><span class="Estilo24"></span></span></span></span></span></span></div></th>
    <td>&nbsp;</td>
    </tr>
	
	
		

	
	
  <tr>
    <th width="17%" height="25" align="left" scope="row"><div align="right" class="Estilo23 Estilo24">
      <div align="right"><span class="Estilo24">Apellidos:</span></div>
    </div></th>
    <td><input name="txtnom" type="text" class="Estilo3" id="txtnom" value="<?=$fila["ape_per"].' '.$fila["nom_per"]?>" size="50" readonly /></td>
  </tr>

  <tr>
    <th align="left" scope="row"><div align="right" class="Estilo5 Estilo24">
      <div align="right"><strong>Direccion:</strong></div>
    </div></th>
    <td><input name="txtedad" type="text" class="Estilo3" id="txtedad" value="<?=$fila["dire"]?>" size="13" readonly/></td>
  </tr>
  <tr>
    <th align="left" scope="row"><div align="right" class="Estilo5 Estilo24">
      <div align="right"><strong># Factura:</strong></div>
    </div></th>
    <td><strong>
      <input name="txtcurso" type="text" class="Estilo3" id="txtcurso" value="<?=$fila11["num_fact"]?>" size="5" readonly />
    </strong><strong class="Estilo23">   </strong></td>
	
	
    </tr>
  <tr>
    <th height="64" colspan="2" align="center" scope="row"><p><a href="../indexsistema.php"></a>
      <label></label></p>
      <p>
        <label>
        <input name="btnimprimir" type="submit" id="btnimprimir" value="Imprimir" />
        </label>
      </p>
      </th>
  </tr>
</table>

	
	
  <table width="356" align="center">
    <tr>
      <th width="358" height="27" scope="col"><table width="44" height="25" align="right">
            <tr>
              <th width="58" bgcolor="#000000" scope="col"><a href="/rodar2/indexconta.php?cont=38" class="Estilo22 Estilo23 Estilo29">Salir</a></th>
            </tr>
      </table></th>
    </tr>
  </table>
  
  
        <?
	
	
		if(isset($_REQUEST['btnimprimir']))
 		{
 	       	 
			
			
			echo "<script language=\"javascript\">window.open 							('modulos/formato_fact.php?v=$cedula')</script>";	
			
								
							
					echo "<script language=\"javascript\">
			  		location=\"indexsecre.php?cont=18\";</script>";
					
			
		 }
		
		?>
  
  
  </form>