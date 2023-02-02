

<?php require_once("../libreria/dac.php");

error_reporting(0);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IMPRIMIR FACTURA</title>
<style type="text/css">
<!--
.Estilo3 {font-size: 11px; font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;  }
.Estilo5 {font-size: 12px; font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; }
.Estilo6 {font-size: 12px}
.Estilo8 {font-size: 10px; font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; }
.Estilo9 {font-size: 5px}
-->
</style>
</head>

<body>


<p>
  <?
	
	
 	$v= $_REQUEST['v'];	
	
	$busqueda = consultar("select * from alum_renov where nu_cedula='$v'");
    $fila1 = mysql_fetch_array($busqueda);
	
	$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
    mysql_select_db("rodar2", $coneccion) or die(mysql_error());
    $consulta8962=mysql_query("SELECT MAX(num_fact) FROM factura2 WHERE num_cedu='$v' AND estado='impresa'");
    mysql_close($coneccion);
		
	$consulta8962 = mysql_fetch_array($consulta8962);
	
	$num_mayor = $consulta8962[0];		
	
	
	$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
    mysql_select_db("rodar2", $coneccion) or die(mysql_error());
    $consulta8992=mysql_query("SELECT * FROM factura2 WHERE num_cedu='$v' AND valor>'0' AND num_fact='$num_mayor'");
    mysql_close($coneccion);
		
	$yaexiste8992 = mysql_fetch_array($consulta8992);	
	 
		 
	//$fe= NOW();
	 
	//$busqueda1 = consultar("select * from alum_renov where nu_cedula='$v'");
    //$fila12 = mysql_fetch_array($consulta12);
	
	//$yaexiste8992 = mysql_fetch_array($consulta8992);
	
	$fechas= $yaexiste8992['fecha_imp'];
	
	//$fechas= date("Y-m-d");
	
	$tipo=$fila1["curso"];
	
	if($tipo=='Renovacion')
	{
		$val= 15.00;
			
	}
	if($tipo=='Cantones' or $tipo=='Extra')
	{
		$val= 15.00;
			
	}
	if($tipo=='EVP Caducado')
	{
		$val= 18.00;
			
	}
	else if($tipo=='Ex-alumno')
	{
		$val= 13.39;
	}
	
?></p>
<table width="519" cellpadding="0" cellspacing="0">
  <col width="39" />
  <col width="36" span="3" />
  <col width="24" />
  <col width="31" span="2" />
  <col width="25" />
  <col width="17" />
  <col width="28" span="2" />
  <tr height="26">
    <td width="11" height="26"></td>
    <td width="83"></td>
    <td width="48"></td>
    <td width="48"></td>
    <td width="1"></td>
    <td width="1"></td>
    <td width="1"></td>
    <td width="1"></td>
    <td width="136"></td>
    <td width="176"></td>
  </tr>
  <tr height="28">
    <td height="2"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr height="22">
    <td height="26"></td>
    <td colspan="9" rowspan="2" valign="bottom"><div align="left"><span class="Estilo3">
      &nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      &nbsp;&nbsp;
      <? print $fechas;?>
    </span></div>      <span class="Estilo9">&nbsp;</span></td>
  </tr>
  <tr height="25">
    <td height="2"></td>
  </tr>
  <tr height="24">
    <td height="20"></td>
    <td colspan="9"><span class="Estilo8">&nbsp;&nbsp;&nbsp;&nbsp;
      <?=$fila1["ape_per"].' '.$fila1["nom_per"]?>
    </span></td>
  </tr>
  <tr height="23">
    <td></td>
    <td colspan="9"><span class="Estilo3">
      &nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;
      &nbsp;&nbsp;
      &nbsp;&nbsp;
      &nbsp;&nbsp;
      <?=$fila1["dire"];?>
    </span></td>
  </tr>
  
  <tr height="20">
    <td height="18"></td>
    <td colspan="5"><span class="Estilo3">
      <?=$fila1["nu_cedula"];?>
    </span></td>
    <td></td>
    <td colspan="3"></td>
  </tr>
  <tr height="21">
    <td height="35"></td>
    <td colspan="5" rowspan="5"><span class="Estilo3">EXAMEN PSICOSENSOMETRICO</span></td>
    <td></td>
    <td colspan="3"></td>
  </tr>
  <tr height="19">
    <td height="19"></td>
    <td></td>
    <td colspan="3"><div align="left"><span class="Estilo5">
      <? echo $val; ?>
    </span></div></td>
  </tr>
  <tr height="17">
    <td height="17"></td>
    <td></td>
    <td><span class="Estilo6"></span></td>
    <td><span class="Estilo6"></span></td>
    <td><span class="Estilo6"></span></td>
  </tr>
  <tr height="17">
    <td height="17"></td>
    <td></td>
    <td><span class="Estilo6"></span></td>
    <td><span class="Estilo6"></span></td>
    <td><span class="Estilo6"></span></td>
  </tr>
  <tr height="17">
    <td height="50"></td>
    <td></td>
    <td><span class="Estilo6"></span></td>
    <td><span class="Estilo6"></span></td>
    <td><span class="Estilo6"></span></td>
  </tr>
  <tr height="17">
    <td height="17"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><span class="Estilo6"></span></td>
    <td><span class="Estilo6"></span></td>
    <td><span class="Estilo6"></span></td>
  </tr>
  <tr height="17">
    <td height="17"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><span class="Estilo6"></span></td>
    <td><span class="Estilo6"></span></td>
    <td><span class="Estilo6"></span></td>
  </tr>
  <tr height="17">
    <td height="17"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><span class="Estilo6"></span></td>
    <td><span class="Estilo6"></span></td>
    <td><span class="Estilo6"></span></td>
  </tr>
  <tr height="20">
    <td height="20"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><span class="Estilo6"></span></td>
    <td colspan="2"><span class="Estilo6"></span></td>
  </tr>
  <tr height="17">
    <td height="37"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><span class="Estilo6"></span></td>
    <td><span class="Estilo6"></span></td>
    <td><span class="Estilo6"></span></td>
  </tr>
  <tr height="19">
    <td height="18"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="3"><div align="left"><span class="Estilo5">
        <? echo $val; ?>
    </span></div></td>
  </tr>
  <tr height="19">
    <td height="19"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><span class="Estilo6"></span></td>
	<? 
	
	$a1= $val;
	//$b=0.14;
	$b=0.12;
	
	$iva=$a1*$b;
	
	?>
	
    <td colspan="2"><div align="left"><span class="Estilo5"><? print round($iva,2);?></span></div></td>
  </tr>
  <tr height="17">
    <td height="17"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><span class="Estilo6"></span></td>
    <td><div align="center"><span class="Estilo6"></span></div></td>
    <td><span class="Estilo6"></span></td>
  </tr>
  
  <? $total=$iva+$val;
	$num='';  
  ?>
  
  <tr height="20">
    <td height="18"></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="3"><span class="Estilo6"></span>      <div align="left"><span class="Estilo5"><? print round($total,2)?><? print $num; ?></span></div></td>
  </tr>
</table>

<?
		echo "<script languaje='javascript' type='text/javascript'>window.print();</script>";	
										
		echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";

?>


</body>
</html>