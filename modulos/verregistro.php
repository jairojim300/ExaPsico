<?
session_start();
?> 


<?php
	$cedula=$_POST["txtcedula"];
   // session_start();
    //$_SESSION['txtcedula'] = $cedula;

?>

<style type="text/css">
<!--
.Estilo1 {font-family: Geneva, Arial, Helvetica, sans-serif}
.Estilo3 {font-size: 11px}
.Estilo40 {
	font-size: 11px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #000000;
}
.Estilo5 {color: #000000}
.Estilo6 {
	font-size: 10px;
	color: #0000CC;
}
.Estilo41 {font-size: 14px}
.Estilo42 {
	color: #0000CC;
	font-size: 12px;
}
-->
</style>


<form id="form1" name="form1" method="post" action="" >
  <table width="47%" align="center" bgcolor="#FFFFFF">
  <tr>
    <th height="57" colspan="3" scope="row"><p class="Estilo13">
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="112" height="32">
        <param name="BGCOLOR" value="" />
        <param name="movie" value="/rodar/imagen/ver registro.swf" />
        <param name="quality" value="high" />
        <embed src="/rodar/imagen/ver registro.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="112" height="32"></embed>
      </object>
    </p>      </th>
  </tr>
	
  <tr>
    <th width="37%" align="left" scope="row"><div align="center" class="Estilo7"> Cedula</div></th>
    <td><strong>
	

	
      <input name="txtcedula" type="text" id="txtcedula" value="<?=$_SESSION['$cedula']?>" size="11" />


<? 

	
	


    
	$busqueda = consultar("select * from alum_renov where nu_cedula='$cedula'");
    $fila = mysql_fetch_array($busqueda);

$busqueda2 = consultar("select * from examen where nu_cedula='$cedula'");
    $fila2 = mysql_fetch_array($busqueda2);
	
?>
    </strong></td>
    <td><strong>
      <input type="submit" name="btnbuscar" id="btnbuscar" value="Buscar" />
    </strong></td>
  </tr>
  
  <tr>

    <th height="21" colspan="3" align="left" scope="row">&nbsp;</th>
    </tr>
	<? 
	if($cedula>0 or $cedula<>""){
	?>
	
  <tr>
    <th width="37%" align="left" class="Estilo3" scope="row"><div align="right" class="Estilo7 Estilo3 Estilo1 Estilo5">Nombre:</div></th>
    <td colspan="2" class="Estilo1"><input name="txtnom" type="text" id="txtnom" size="45" readonly="readonly" value=" <?=$fila["nom_per"].' '.$fila["ape_per"]?>" /></td>
  </tr>
  <tr>
    <th height="25" align="left" class="Estilo3" scope="row"><div align="right" class="Estilo7 Estilo3 Estilo1 Estilo5">

      <div align="right">Registro</div>
    </div></th>
    <td width="14%" class="Estilo1"><label>
    <input name="txt_fecha" type="text" id="txt_fecha" value="<?=$fila["fecha"]?>" size="8" readonly="readonly" />
    </label></td>
    <td width="49%" rowspan="4" class="Estilo1"><div align="center" class="Estilo6">
      <label>
      <img src="/rodar/modulos/verblob.php?v=<?=$fila["nu_cedula"]?>&t=2" alt="Sin Foto"  />      </label>
    </div></td>
  </tr>
  
  
  
    <tr>

    <th align="left" class="Estilo3" scope="row"><div align="right" class="Estilo7 Estilo3 Estilo1 Estilo5">
      <div align="right">Examen</div>
    </div></th>
    <td class="Estilo1"><input name="txtnom2" type="text" id="txtnom2" value="<?=$fila2["fecha"]?>" size="8" readonly="readonly"></td>
    </tr>
	
	
	
	    <tr>
    <th align="left" class="Estilo40" scope="row"><div align="left" class="Estilo7">
      <div align="right"># Cert.      </div>
    </div>
      </p></th>
    <th align="left" class="Estilo11" scope="row"><input name="txt_vision252" type="text" id="txt_vision252" value="<?=$fila2["certificado"]?>" size="3" readonly="readonly" /></th>
    </tr>
	  <tr>
    <th height="95" colspan="2" align="left" class="Estilo1" scope="row"><div align="center"></div>
      </p>
      <label>
      <div align="center" class="Estilo41"><span class="Estilo42"><a href="/rodar/modulos/fichacompleta.php?v=<?=$fila["nu_cedula"]?>" target="_blank"><br />
        Ver Detalle Completo </a></span></div>
      </label></th>
    </tr>
	
	<? } ?>
	
  <tr>

    <th colspan="3" align="center" class="Estilo1" scope="row"><p>
      <label></label>
      <a href='modulos/impr_certi_renova.php?v=2' target="_self" >         </a></p>      </th>
  </tr>
</table>

  <script LANGUAGE="JavaScript">
function loadFrames(page1, page2) {
framecode = "<frameset rows='50%,50%'>"
+ "<frame src='" + page1 + "'>"
+ "<frame src='" + page2 + "'>"
+ "</frameset>";
page = window.open("");
page.document.open();
page.document.write(framecode);
page.document.close();
}
</script>


</form>
