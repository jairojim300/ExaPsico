<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" media="all" href="jscalendar/calendar-win2k-cold-1.css" title="win2k-cold-1" />
<script type="text/javascript" src="jscalendar/calendar.js"></script>
<script type="text/javascript" src="jscalendar/lang/calendar-	es.js"></script>
<script type="text/javascript" src="jscalendar/calendar-setup.js"></script>	

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
-->
</style><form name="form1" method="post" action="" >
  <table width="17%" align="center" bgcolor="#FFFFFF" class="Estilo2">
  <tr>
    <th colspan="3" scope="row"><p class="Estilo3">
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="249" height="27">
        <param name="SRC" value="/rodar/imagen/actualizar.swf" />
        <param name="BGCOLOR" value="" />
        <param name="BGCOLOR" value="" />
        <param name="movie" value="../imagen/actualizar.swf" />
        <param name="quality" value="high" />
        <embed src="/rodar/imagen/actualizar.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="249" height="27"></embed>
      </object>
    </p>      </th>
  </tr>
	
	<? 

    $cedula=$_POST["txtcedula"];
	$busqueda = consultar("select * from alum_renov where nu_cedula='$cedula'");
    $fila = mysql_fetch_array($busqueda);


?>
	
	
  <tr>
    <th width="36%" align="left" scope="row"><div align="center" class="Estilo23"># Cedula</div></th>
    <td width="64%" colspan="2"><strong>
      <input name="txtcedula" type="text" id="txtcedula" value="<?=$fila["nu_cedula"]?>" size="11" />
      <input type="submit" name="btnbuscar" id="btnbuscar" value="Buscar" />
      <input type="hidden" name="hiddenField" id="hiddenField" />
    </strong></td>
    </tr>
  
  <tr>
    <th width="36%" height="16" align="left" scope="row"><span class="Estilo5"></span></th>
    <td colspan="2">&nbsp;</td>
    </tr>
  <tr>
    <th width="36%" align="left" scope="row"><div align="right" class="Estilo23">Apellidos</div></th>
    <td colspan="2"><input type="text" name="txtnom" id="txtnom" value="<?=$fila["nom_per"]?>" /></td>
  </tr>
  <tr>
    <th height="25" align="left" class="Estilo2" scope="row"><div align="right" class="Estilo5"><strong>Nombres</strong></div></th>
    <td colspan="2"><input type="text" name="txtape" id="txtape" value="<?=$fila["ape_per"]?>"/>
        <label></label></td>
  </tr>
  <tr>
    <th align="left" class="Estilo2" scope="row"><div align="right" class="Estilo5"><strong>Edad</strong></div></th>
    <td colspan="2"><input name="txtedad" type="text" id="txtedad" value="<?=$fila["edad"]?>" /></td>
  </tr>
  <tr>
    <th align="left" class="Estilo2" scope="row"><div align="right" class="Estilo5"><strong>Sexo</strong></div></th>
    <td colspan="2"><strong>
      <input name="txtsexo" type="text" id="txtsexo" value="<?=$fila["sexo"]?>" readonly="readonly" />
    </strong></td>
  </tr>
  <tr>
    <th align="left" class="Estilo2" scope="row"><div align="right" class="Estilo5"><strong>Telefono</strong></div></th>
    <td colspan="2"><strong>
      <input name="txttel" type="text" id="txttel" value="<?=$fila["tele"]?>" />
    </strong></td>
  </tr>
  <tr>
    <th align="left" class="Estilo2" scope="row"><div align="right" class="Estilo5"><strong>Direccion</strong></div></th>
    <td colspan="2"><strong>
      <textarea name="txtdir"  id="txtdir"><?=$fila["dire"]?>
        </textarea>
    </strong></td>
  </tr>
  <tr>
    <th colspan="3" align="center" scope="row"><p><a href="../indexsistema.php"></a>
      <label></label>
         <input name="btnact" type="submit" class="botones" id="btnact" value="Actualizar" />
         <br />
      </p>       </th>
  </tr>
</table>
<?php
			
		if(isset($_REQUEST['btnact']))
 		{
 	       	  $ced=$_POST['txtcedula'];
			  $nom=strtoupper($_POST['txtnom']);
			  $ape=strtoupper($_POST['txtape']);	
			  $edad=$_POST['txtedad'];
			  $sexo=$_POST['txtsexo'];
			  $tel=$_POST['txttel'];
			  $direcc=ucwords($_POST['txtdir']);
  			  $fecha=$_POST['txt_fecha'];
			  
			  
			  
			
			$registrar="update alum_renov set nom_per='$nom',ape_per='$ape',edad='$edad',sexo='$sexo',
			tele='$tel',dire='$direcc' where nu_cedula='$ced'";
			
			save($registrar);	
			
					
					echo "<script language=\"javascript\">
			  		location=\"indexsistema.php\";</script>";
					
			
		} 

		?>
</form>

