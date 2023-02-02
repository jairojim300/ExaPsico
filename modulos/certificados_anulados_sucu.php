<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.asdfasd {color: #FF0000}
.Estilo5 {color: #000000; font-size: 10px; }
.Estilo6 {font-size: 9px}
-->
</style>
</head>

<body>
<table width="373" align="center">
  <tr>
    <th height="41" colspan="3" scope="col"><p>
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="205" height="29">
        <param name="SRC" value="/rodar2/modulos/text3.swf" />
        <param name="BGCOLOR" value="" />
        <param name="BGCOLOR" value="#B3C9FD" />
        <param name="movie" value="text3.swf" />
        <param name="quality" value="high" />
        <embed src="/rodar2/modulos/text3.swf" width="205" height="29" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="" ></embed>
      </object>
    </p>    </th>
  </tr>
  
  <?
  $busqueda331 = consultar("select count(id_eliminados) from certificados_eliminados ");
  
  $fila331 = mysql_fetch_array($busqueda331);
   
?>	
	
  <tr>
    <th height="55" colspan="3" scope="row"><div align="left">Total de Certificados Anulados: &nbsp;&nbsp;<span class="Estilo1">
      <span class="asdfasd">
      <?=$fila331[0]?>
      </span></span></div></th>
  </tr>
  
  
 
  
 
  
  <tr>
    <th width="50" scope="row"><strong># C.I. </strong></th>
    <td width="213"><div align="center"><strong>Alumno</strong></div></td>
    <td width="38"><div align="center"><strong>Cert. </strong></div></td>
  </tr>
  
 	<?
	$busqueda33 = consultar("select id_eliminados , num_cedu,nombre,observacion, curso,fecha from certificados_eliminados ");
	
	
	  //date(fecha_des) BETWEEN '$fechaa' and '$cedula'"
   while( $fila33 = mysql_fetch_array($busqueda33)) { 
   
   
			 
	?>
  <tr>
    <th scope="row"><span class="Estilo5">
      <?=$fila33["num_cedu"]?>
    </span></th>
    <td>
      <div align="left"><span class="Estilo5">
        <span class="Estilo6">
        <?=$fila33["nombre"]?>
        </span></span></div></td><td><div align="center"><span class="Estilo5">
      <?=$fila33["observacion"]?>
    </span></div></td>
  </tr>
  
    <? } ?>
  <tr>
    <th scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="200" align="right">
  <tr>
    <th align="right" scope="col"><a href="/rodar/indexsistema.php?cont=13" class="Estilo27"><img src="/rodar2/imagen/eliminar.png" alt="aa" width="28" height="30" border="0" /></a></th>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
