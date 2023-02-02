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
.Estilo11 {font-size: 11px; font-family: Geneva, Arial, Helvetica, sans-serif; color: #003333; font-weight: bold; }
.Estilo28 {	font-size: 11px;
	color: #000033;
}
.Estilo30 {font-size: 10px; color: #003333; }
-->
</style>
</head>


<?php 

//require_once("/rodar3/librerias/DAC.php");
/*session_start();

$a234=$_SESSION['$cedula231'];
$ced=$_SESSION['$cod_pac'];
$ape=$_SESSION['$apellido'];
$nom=$_SESSION['$nombre'];*/


?>

<style type="text/css">
<!--
.Estilo2 
{
	font-size: 11px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #000000;
}
.Estilo3 
{
	font-size: 11px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #000000;
	font-weight: bold;
}
.Estilo23 
{
	font-size: 11px; font-family: Geneva, Arial, Helvetica, sans-serif; color: #003333;
}
.Estilo5
{
	color: #003333
}
.Estilo25
{
	font-size: 10
}
.Estilo26
{
	font-size: 9px
}
.Estilo29
{
	font-size: 14px;
	font-weight: bold;
}
-->
</style><form name="form1" method="post" action="" >

<table width="37%" align="center" bordercolor="#CCCCCC" bgcolor="#FFFFFF" class="Estilo2">
  <tr>
    <th height="38" colspan="4" scope="row"><p class="Estilo3">
 <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="133" height="34" title="reg_pedido">
	<param name="SRC" value="/rodar3/imagen/reg_pedido.swf" />
    <param name="BGCOLOR" value="" />
    <param name="movie" value="../imagen/ingresar_deposito.swf" />
    <param name="quality" value="high" />
    <embed src="/rodar3/imagen/reg_pedido.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="133" height="34"></embed>
      </object>
    </p>      </th>
  </tr>

<SCRIPT LANGUAGE="JavaScript">

function valida_envia()
{
    if (document.form1.txtcedula.value.length==0)
	{
       alert("Favor Escribir #CEDULA");
       document.form1.txtcedula.focus();
       return false;
    } 
	 
    if (document.form1.txtcurso1.value.length==0)
	{
       alert("Favor Escribir Valor Deposito");
       document.form1.txtcurso1.focus();
       return false;
    } 
	
	if (document.form1.txtcurso.value.length==0)
	{
       alert("Favor Escribir Referencia");
       document.form1.txtcurso.focus();
       return false;
    } 
	
	if (document.form1.txt_fecha2.value.length==0)
	{
       alert("Favor Elegir Fecha");
       document.form1.txt_fecha2.focus();
       return false;
    } 
	
	if (document.form1.txtcurso1.value.length != "")
	{
		var7 = parseInt(document.form1.txtcurso1.value, 10);
		if ( isNaN(var7) ) 
		{   
        alert("Dato incorrecto! VALOR debe ser entero !!!");
		document.form1.txtcurso1.focus();
        return false;
		}
	}
	
	if (document.form1.txtcurso.value.length != "")
	{
		var7 = parseInt(document.form1.txtcurso.value, 10);
		if ( isNaN(var7) ) 
		{   
        	alert("Dato incorrecto! REFERENCIA debe ser entero !!!");
			document.form1.txtcurso.focus();
        	return false; 
		}
	}
    document.form1.submit(); 
} 

</script>

<?
	 
	 $coneccion=mysql_connect("localhost", "root", "rodar") or die(mysql_error());
      mysql_select_db("rodar3", $coneccion) or die(mysql_error());
      $consulta=mysql_query("select	max(id_pedido) from pedido");
      mysql_close($coneccion);	 
	  //$bus = consultar("select	max(id_pedido) from pedido");
   	 $fi = mysql_fetch_array($consulta);
	 
	 $num_mayor = $fi[0];
	 $valor= $num_mayor + 1;
?>
	

    <tr bgcolor="#EAEAEA">
    <th colspan="4" align="left" scope="row"></th>
    </tr>
    <tr>
      <th colspan="4" align="left" scope="row">&nbsp;</th>
    </tr>
    <tr bgcolor="#EAEAEA">
    <th width="32%" align="left" scope="row"><div align="center" class="Estilo23 Estilo24">
      <div align="right" class="Estilo24">
        <div align="left"> Fecha Pedido:</div>
      </div>
    </div></th>
    <td width="68%" colspan="3" bgcolor="#EAEAEA">
      <input name="fecha" type="text" class="Estilo3" id="fecha" size="8"  readonly="true" />
	  <img src="/rodar3/imagen/reloj.png" alt="Ver calendario" style="cursor:pointer" name="calendario" width= "15" height="25" border="0" 
			align="absmiddle" id="calendario" />
	  <script type="text/javascript">
		    Calendar.setup({
        	inputField     :    "fecha",     // id of the input field
		    ifFormat       :    "%Y-%m-%d",      // format of the input field
	        button         :    "calendario",  // trigger for the calendar (button ID)
	        align          :    "Bl",           // alignment (defaults to "Bl")
    	    singleClick    :    true,
			step           :    1
    		});
		</script>    </td>
    </tr>
  
  <tr>
    <th height="22" align="left" scope="row"><div align="right" class="Estilo23 Estilo24">
      <div align="left"><span class="Estilo24">Num. Pedido:</span></div>
    </div></th>
    <td colspan="3"><input name="numpedido" type="text" class="Estilo3" id="numpedido" size="10" style="width:50px" align="right" value="<? print $valor; ?>" readonly="true"/></td>
  </tr>
  <tr bgcolor="#EAEAEA">
    <th height="22" align="left" scope="row"><div align="right" class="Estilo23 Estilo24">
      <div align="left"><span class="Estilo24">Producto:</span></div>
    </div></th>
	<script language="javascript">
	/*function accion(combo){
       //alert("se selecciono "+combo.value)
	   var res= combo.value;
	   document.form1.pro.value = res;
    }*/
     </script>
    <td colspan="3"><label>
      <select name="productos" class="Estilo24" id="productos" onChange="accion(this)">
        <option selected="selected">Seleccione</option>
		<?php
	
		$coneccion=mysql_connect("localhost", "root", "rodar") or die(mysql_error());
      mysql_select_db("rodar3", $coneccion) or die(mysql_error());
      $resultado=mysql_query("select * from producto group by producto");
      mysql_close($coneccion);	
		
		
		//$resultado = consultar("select * from producto group by producto");
		while($fila = mysql_fetch_array($resultado)) 
		{
			echo "<option>".$fila["producto"]."</option>";				
			echo "<br>\n";
		}	
	
		?>
      </select>
    </label></td>
  </tr>
  
  <tr>
    <th height="22" align="left" scope="row"><div align="right" class="Estilo23 Estilo24">
      <div align="left"><span class="Estilo24">Cantidad:</span></div>
    </div></th>
    <td colspan="3"><input name="cantidad" type="text" class="Estilo3" id="cantidad" size="10" style="width:30px" align="right"/>      </td>
  </tr>
  
  <tr>
    <th height="25" align="left" bgcolor="#EAEAEA" scope="row"><div align="right" class="Estilo23 Estilo24">
        <div align="left"><span class="Estilo24">Especificacion y/o Departamento:</span></div>
    </div></th>
    <td colspan="3" bgcolor="#EAEAEA"><label>
      <textarea name="novedad" id="novedad"></textarea>
    </label></td>
  </tr>
  
  <tr>
    <th width="32%" height="25" align="left" bgcolor="#EAEAEA" scope="row">&nbsp;</th>
    <td colspan="3" bgcolor="#EAEAEA">&nbsp;</td>
  </tr>  
  <tr>
    <th height="80" colspan="4" align="center" scope="row"><p><a href="../indexsistema.php"></a>
      <label></label>
    </p>

<?php

	if(isset($_REQUEST['btnregistrar']))
 	{
 		
		$fecha=$_POST['fecha'];
		$productos=strtoupper($_POST['productos']);
		$cantidad=$_POST['cantidad'];
		$novedad=strtoupper($_POST['novedad']);
		
		/*$stock=$_POST['pro'];
		
		$stock_actual= $stock - $cantidad;*/
								
		/*$buscar2323 = consultar("select * from control_vehicular where ced_alumno='$cedula' and date(fecha_control)=date(NOW())");
		
		
		$yaexiste2323 = mysql_num_rows($buscar2323);
		
		if($yaexiste2323==1)
		{
			echo "<script LANGUAGE=\"JavaScript\">
			alert (\"ALUMNO YA FUE INGRESADO REVISAR CEDULA.\");
			</script>";
					
			/*echo "<script language=\"javascript\">
			location=\"indexinstructor.php?cont=5\";</script>";	
		}*/
		
		$coneccion=mysql_connect("localhost", "root", "rodar") or die(mysql_error());
       	mysql_select_db("rodar3", $coneccion) or die(mysql_error());
       	$registrar11=mysql_query("insert into pedido values('$valor', '$fecha', '$productos', '$cantidad',   '$novedad', 'sin entregar', NOW(), '')");
       	mysql_close($coneccion);			
			
			echo "<script LANGUAGE=\"JavaScript\">
					alert (\"PEDIDO INGRESADO!!.\");
					</script>";
		
		/*$registrar="insert into pedido values('$valor', '$fecha', '$productos', '$cantidad',   '$novedad', 'sin entregar', NOW(), '')";

			save($registrar);*/
						
			echo "<script language=\"javascript\">
			location=\"indexsecre.php?cont=17\";</script>";
		}
			
?>
      <p>
        <input name="btnregistrar" type="submit" id="btnregistrar" value="Registrar" />
      </p>
      <table width="310">
        <tr>
          <th width="302" height="29" scope="col"><table width="66" align="right">
              <tr>
                <th width="58" bgcolor="#000000" scope="col"></th>
              </tr>
          </table></th>
        </tr>
      </table></th>
  </tr>
</table>

</form>

