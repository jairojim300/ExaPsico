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
.Estilo27 {color: #FFFFFF}
.Estilo28 {color: #003333; font-size: 10px; }
-->
</style><form name="form1" method="post" action="" >
  <table width="57%" align="center" bgcolor="#FFFFFF" class="Estilo2">
  <tr>
    <th height="58" colspan="4" scope="row"><p class="Estilo3">
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="145" height="27">
        <param name="SRC" value="/rodar2/imagen/eliminar factura.swf" />
        <param name="BGCOLOR" value="" />
        <param name="movie" value="../imagen/eliminar factura.swf" />
        <param name="quality" value="high" />
        <embed src="/rodar2/imagen/eliminar factura.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="145" height="27"></embed>
      </object>
    </p>      </th>
  </tr>
	
	<? 

    //$cedula=$_POST["txtcedula"];
	if(isset($_REQUEST['btnbuscar']))
 		{
		
	$fact=$_POST["txtfactura"];
	
	
	$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
    mysql_select_db("rodar2", $coneccion) or die(mysql_error());
    $busqueda22=mysql_query("SELECT * from factura2 where estado='impresa' and num_fact='$fact' and fecha > '2018-01-01'");
    mysql_close($coneccion);
	
    $fila22 = mysql_fetch_array($busqueda22);
	
	//$a=$fila22[0];
	
	$cedula=$fila22['num_cedu'];
	
	$consultaa = consultar("select nu_cedula, ape_per, nom_per, curso from alum_renov where nu_cedula='$cedula' and estado_factura='impresa'");
	
	$fila = mysql_fetch_array($consultaa);
}
?>
	
	
	

	
	
    <tr>
      <th align="left" scope="row">&nbsp;</th>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
    <th width="17%" align="left" scope="row"><div align="center" class="Estilo23 Estilo24">
      <div align="right" class="Estilo24">
        <div align="right"># Factura:</div>
      </div>
    </div></th>
    <td colspan="3"><strong>
      <input name="txtfactura" type="text" class="Estilo3" id="txtfactura" value="<?=$fila22["num_fact"]?>" size="6" maxlength="6" />
      <input type="submit" name="btnbuscar" id="btnbuscar" value="Buscar" />
      <input type="hidden" name="hiddenField" id="hiddenField" />
    </strong></td>
    </tr>
  
  <tr>
    <th width="17%" height="16" align="left" scope="row"><div align="right"><span class="Estilo5"><span class="Estilo24"><span class="Estilo25"><span class="Estilo26"><span class="Estilo26"><span class="Estilo24"></span></span></span></span></span></span></div></th>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <th height="25" align="left" scope="row"><div align="right" class="Estilo23 Estilo24">
      <div align="right"><span class="Estilo24">Cedula:</span></div>
    </div></th>
    <td colspan="3"><input name="txtedad2" type="text" class="Estilo3" id="txtedad2" value="<?=$fila["nu_cedula"]?>" size="13" readonly/></td>
  </tr>
  <tr>
    <th width="17%" height="25" align="left" scope="row"><div align="right" class="Estilo23 Estilo24">
      <div align="right"><span class="Estilo24">Apellidos:</span></div>
    </div></th>
    <td colspan="3"><input name="txtnom" type="text" class="Estilo3" id="txtnom" value="<?=$fila["nom_per"].' '.$fila["ape_per"]?>" size="50" readonly /></td>
  </tr>

  <tr>
    <th align="left" scope="row"><div align="right" class="Estilo28">Valor</div></th>
    <td width="23%"><strong>
      <input name="txtvalor" type="text" class="Estilo3" id="txtvalor" value="<?=$fila22["valor"]?>" size="9" readonly/>
    </strong></td>
	<td width="21%">&nbsp;</td>
    <td width="39%">&nbsp;</td>
  </tr>
  <tr>
    <th colspan="4" align="center" scope="row"><p><a href="../indexsistema.php"></a>
      <label></label>
         <input name="btnact" type="submit" class="botones" id="btnact" value="Anular Factura" />
    </p>      </th>
  </tr>
</table>

	
	
  <table width="356" align="center">
    <tr>
      <th width="358" height="64" scope="col"><p>
        <?
	
	
		if(isset($_REQUEST['btnact']))
 		{
 	       	  			  
				$facturaa=$_POST['txtfactura'];
				/*$facturaa=$fila["num_f"];				
				$valor=$_POST['txtvalor'];*/
			
							
			$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
    		mysql_select_db("rodar2", $coneccion) or die(mysql_error());
    		$busqueda22=mysql_query("update factura2 set estado='anulado', valor='0', tipo_examen='Anulado' where num_fact='$facturaa'");
    		mysql_close($coneccion);
			
			/*$registrar3="update factura2 set estado='anulado', valor='0'  where num_cedu='$cedula' and num_fact='$a'";
			
			save2($registrar3);	
			
			
			echo "<script language=\"javascript\">window.open 							('modulos/formato_facturare.php?v=$cedula1')</script>";	
			
								
				*/
					
					
					echo "<script LANGUAGE=\"JavaScript\">
					alert (\"LA FACTURA HA SIDO ANULADA.\");
					</script>";
					
					
					
					echo "<script language=\"javascript\">
			  		location=\"indexsecre.php?cont=23\";</script>";
					
			
	 }

		?></p>
          <table width="44" height="25" align="right">
            <tr>
              <th width="58" bgcolor="#000000" scope="col"><a href="/rodar/indexsecre.php?cont=18" class="Estilo22 Estilo23 Estilo29 Estilo27">Salir</a></th>
            </tr>
        </table></th>
    </tr>
  </table>
  <SCRIPT LANGUAGE="JavaScript">
function valida_envia(){
	


    if (document.form1.txtcedula.value.length==0){
       alert("Favor Escribir #CEDULA");
       document.form1.txtsexo2.focus();
       return false;
    } 
	
	
	  if (document.form1.txtsexo2.value.length==0){
       alert("Favor Escribir # Factura");
       document.form1.txtsexo2.focus();
       return false;
    } 



       document.form1.submit(); 

					

} 

</script>  
  
</form>