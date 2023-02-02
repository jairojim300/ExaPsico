
<?php require_once("../libreria/dac.php");

error_reporting(0);

?>
		
<?php
date_default_timezone_set('America/Los_Angeles');

$script_tz = date_default_timezone_get();


?>



<?

 $v= $_REQUEST['v'];	
	$busqueda = consultar("select * from alum_renov where nu_cedula='$v'");
    $fila = mysql_fetch_array($busqueda);
	
	$busqueda1 = consultar("select * from examen where nu_cedula='$v'");
    $fila1 = mysql_fetch_array($busqueda1);
	
?>
 
 <?
 
 
 function cambiaf_a_normal($fecha){ 
    ereg( "([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})", $fecha, $mifecha); 
   $lafecha=$mifecha[3]."/".$mifecha[2]."/".$mifecha[1]; 
    return $lafecha; 
} 
 
 
 
 
 
 function data_text($data, $tipus=1)
{
  if ($data != '' && $tipus == 0 || $tipus == 1)
  {
    $setmana = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
    $mes = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'); 

    if ($tipus == 1)
    {
      ereg('([0-9]{1,2})/([0-9]{1,2})/([0-9]{2,4})', $data, $data);
      $data = mktime(0,0,0,$data[2],$data[1],$data[3]);
    } 

    return $setmana[date('w', $data)].', '.date('d', $data).' '.$mes[date('m',$data)-1].'                                            '.date('Y', $data);
  }
  else
  {
    return 0;
  }
}

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
.Estilo3 {font-size: 16}
-->
</style>
</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="658" cellpadding="0" cellspacing="0">
  <col width="113" />
  <col width="85" span="2" />
  <col width="60" />
  <col width="45" />
  <col width="53" />
  <col width="60" span="4" />
  <tr height="16">
    <td height="16" width="38"><span class="Estilo3"></span></td>
    <td colspan="2" rowspan="2">&nbsp;</td>
    <td width="57"><span class="Estilo3"></span></td>
    <td width="103"><span class="Estilo3"></span></td>
    <td width="125"><span class="Estilo3"></span></td>
    <td width="46"><span class="Estilo3"></span></td>
    <td width="45"><span class="Estilo3"></span></td>
    <td width="14"><span class="Estilo3"></span></td>
    <td width="94"><span class="Estilo3"></span></td>
  </tr>
  <tr height="22">
    <td height="19">&nbsp;</td>
    <td height="19" width="57"><span class="Estilo3"></span></td>
    <td colspan="6" rowspan="3"><div align="right" class="Estilo3">
	
	<?
	
	$f= cambiaf_a_normal($fila["fecha"]);
	
	$a= data_text($f);
	
	?> 
	
      <input name="txtedad" type="text" id="txtedad" value="<? echo ($a);?>" size="50" readonly="readonly" />
    </div>      <span class="Estilo3"></span><span class="Estilo3"></span><span class="Estilo3"></span><span class="Estilo3"></span><span class="Estilo3"></span><span class="Estilo3"></span></td>
  </tr>
  <tr height="17">
    <td height="19"><span class="Estilo3"></span></td>
    <td width="1"><span class="Estilo3"></span></td>
    <td width="133"><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
  </tr>
  <tr height="10">
    <td height="10"><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
  </tr>
  <tr height="24">
    <td height="19"><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td colspan="7"> <span class="Estilo3">
      <?=$fila["nom_per"].' '.$fila["ape_per"]?>
    </span></td>
  </tr>
  <tr height="17">
    <td rowspan="2"><span class="Estilo3"></span><span class="Estilo3"></span></td>
    <td height="17"><span class="Estilo3"></span></td>
    <td colspan="2" rowspan="2"><div align="right"><span class="Estilo3">
      <?=$fila1["nu_cedula"]?>
    </span></div></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td colspan="2" rowspan="2"><span class="Estilo3">
      <?=$fila["curso"]?>
    </span></td>
  </tr>
  <tr height="17">
    <td height="17"><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
  </tr>
  <tr height="23">
    <td height="23"><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
  </tr>
  <tr height="19">
    <td height="19"><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
  </tr>
  <tr height="19">
    <td height="35"><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
  </tr>
  <tr height="17">
    <td height="23"><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3">&nbsp;        X</span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3">&nbsp;X</span></td>
  </tr>
  <tr height="24">
    <td height="24"><span class="Estilo3"></span></td>
    <td colspan="2"><div align="center"><span class="Estilo3">
      
                    <?=$fila1["aguvis_iz"]?>
    </span></div></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td rowspan="2"><span class="Estilo3">&nbsp;        X</span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td rowspan="2"><span class="Estilo3">&nbsp;X</span></td>
  </tr>
  <tr height="27">
    <td height="21"><span class="Estilo3"></span></td>
    <td colspan="2"><div align="center"><span class="Estilo3">             
      
      <?=$fila1["aguvis_der"]?>
    </span></div></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
  </tr>
  
    
  <? 
  		
  
  		 if ($fila1["lentes"] == "1") {
   
    $fila1["lentes"] = "X";
	$resultado1= $fila1["lentes"];
	
	$resultado="";
	
	
	}
	

  
  else{ if($fila1["lentes"] == "2")  {
      
	  $fila1["lentes"] = "X";
	  $resultado= $fila1["lentes"];
	  $resultado1="      ";   
  
  }
  }
   ?>
  <tr height="17">
    <td height="17"><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td><div align="right"><span class="Estilo3"><?=$resultado1?>
    </span></div></td>
    <td><span class="Estilo3">&nbsp;&nbsp;&nbsp;  
      <?=$resultado["lentes"]?></span></td>
    <td><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
  </tr>

  
  
  <tr height="17">
    <td height="36"><span class="Estilo3"></span></td>
    <td><span class="Estilo3"></span></td>
    <td colspan="4"><span class="Estilo3"></span><span class="Estilo3"></span><span class="Estilo3"><span class="Estilo1">
         <?=$fila1["observa"]?>
    </span></span><span class="Estilo3"></span></td>
    <td colspan="3"><div align="left"><span class="Estilo3"></span>
      <span class="Estilo3">                  </span><span class="Estilo3"></span> </div></td>
    <td width="94"><span class="Estilo3"></span></td>
  </tr>
  <tr height="17">
    <td height="17"><span class="Estilo1"></span></td>
    <td colspan="9"><div align="left"><span class="Estilo1">
                          </span></div></td>
  </tr>
  <tr height="17">
    <td height="17"><span class="Estilo1"></span></td>
    <td colspan="9">&nbsp;</td>
  </tr>
  <tr height="17">
    <td height="17"><span class="Estilo1"></span></td>
    <td colspan="9">&nbsp;</td>
  </tr>
  <tr height="17">
    <td height="17"><span class="Estilo1"></span></td>
    <td colspan="9">&nbsp;</td>
  </tr>
</table>

<?
		echo "<script languaje='javascript' type='text/javascript'>window.print();</script>";	
										
		//echo "<script languaje='javascript' type='text/javascript'>window.close();;
		echo "<script language=\"javascript\">
			  		location=\"../indexsistema.php?cont=4\";</script>";
?>


</body>
</html>
