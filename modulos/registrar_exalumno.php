<?php
error_reporting(0);
  // require_once("../libreria/dac.php");
   
   
  session_start(); 
   
   

$a223=$_SESSION['$cedula231'];



if($a22=="psicometria")
			
			{
			
			$a223="Machala";
			}
				
			
			if ( $a223=="psicohuaquillas"){
			
			
			$a223="Huaquillas";
			
			
			}
			
			
			else if($a223=="psicopiñas"){
			
			
			$a223="Piñas";
			
			}


//print $a223; 
   
?>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link rel="stylesheet" type="text/css" media="all" href="jscalendar/calendar-win2k-cold-1.css" title="win2k-cold-1" />
<script type="text/javascript" src="jscalendar/calendar.js"></script>
<script type="text/javascript" src="jscalendar/lang/calendar-	es.js"></script>
<script type="text/javascript" src="jscalendar/calendar-setup.js"></script>	



<style type="text/css">
<!--
.Estilo18 {font-size: 18px}
-->
</style>


<script language="javascript" type="text/javascript">

//validar el enter
siguienteCampo = "txt_fecha"
//nombre del formlario
nombreForm = "form1"

//funcion que gestiona el evento
function TelcaPulsada( e ) {

   if ( window.event != null)				//IE4+
      tecla = window.event.keyCode;
   else if ( e != null ) 				//N4+ o W3C compatibles
      tecla = e.which;
   else
      return;
	
   if (tecla == 13) { 					//se pulso enter
      if ( siguienteCampo == 'fin' ) {			//fin de la secuencia, hace el submit
         //alert('Envio del formulario.')			//eliminar este alert para uso normal
         return true					//sustituir por return true para hacer el submit
      } else { 						//da el foco al siguiente campo
         eval('document.' + nombreForm + '.' + siguienteCampo + '.focus()')
         return false
      }
   }
}

document.onkeydown = TelcaPulsada;			//asigna el evento pulsacion tecla a la funcion
if (document.captureEvents)				//netscape es especial: requiere activar la captura del evento
	document.captureEvents(Event.KEYDOWN)
	

</script>


</head>
<script type="text/javascript" src="libreria/libreria.js"></script>
<body>
<form id="form1" name="form1" method="post" action="" onsubmit="return validar_registro1(form1)" >
  <table width="248" align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
  <? 					
   
	if(isset($_REQUEST['btnbuscar']))
 	{
   		$cedula=$_POST["txtcedula"];
		//$_SESSION['$cedula']=$cedula;
			
		$buscar1 = consultar("select * from exalumno where cedula='$cedula'");
		$yaexiste1 = mysql_num_rows($buscar1);
					
		$coneccion=mysql_connect("localhost", "root", "rodar") or die(mysql_error());
       	mysql_select_db("rodar2", $coneccion) or die(mysql_error());
       	$buscar2=mysql_query("select * from alumno where num_cedu='$cedula'");
       	mysql_close($coneccion);		
		
		$yaexiste2 = mysql_num_rows($buscar2);
		
		
		if($yaexiste1==1)
		{
			echo "<script LANGUAGE=\"JavaScript\">
			alert (\"YA FUE INGRESADO.\");
			</script>";
								
			echo "<script language=\"javascript\">
			location=\"indexadmin.php?cont=17\";</script>";
								
		}
					
		if($yaexiste2==0)
		{
			echo "<script LANGUAGE=\"JavaScript\">
			alert (\"NO REGISTRADO.\");
			</script>";
								
			echo "<script language=\"javascript\">
			location=\"indexadmin.php?cont=17\";</script>";	
		}	
					
   }
   
   ?>
  <? 
    $cedula=$_POST["txtcedula"];
	
	$coneccion=mysql_connect("localhost", "root", "rodar") or die(mysql_error());
    mysql_select_db("rodar2", $coneccion) or die(mysql_error());
    $busqueda=mysql_query("select * from alumno where num_cedu='$cedula'");
    mysql_close($coneccion);
		
	$fila = mysql_fetch_array($busqueda);

?>
  <tr>
    <th height="26" colspan="7" align="left" scope="row"><div align="center" 

class="Estilo18">REGISTRO DE EX-ALUMNOS </div></th>

    </tr>
  <tr>
    <th height="26" align="left" scope="row">&nbsp;</th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th width="11%" height="26" align="left" scope="row"><div align="right"><span 

class="Estilo15">Cedula:</span></div></th>
    <td><div align="left" class="Estilo15"><strong> <strong>
      <input name="txtcedula" type="text" id="txtcedula"  onkeypress = "return 

pulsar23(event)" value="<?=$fila["num_cedu"]?>" size="10" maxlength="10"  />
      </strong></strong>
            <label></label>
    </div></td>
    <td><strong>
      <input type="submit" name="btnbuscar" id="btnbuscar" onclick="javascript:return 

 valida_envia2323()"  value="Buscar" />
    </strong></td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td width="31%">&nbsp;</td>
  </tr>
  <tr>
    <th height="24" align="left" scope="row">&nbsp;</th>
    <td colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <th width="11%" height="24" align="left" scope="row"><div align="right"><span 

class="Estilo15">Apellidos:</span></div></th>
    <td colspan="6"><div align="left" class="Estilo15">
      <input name="txtapellido" type="text" class="Estilo15" id="txtapellido" value=" <?=$fila["ape_alum"]?>" size="40" maxlength="100" 

readonly="readonly"/>
    </div></td>
  </tr>
  <tr>
    <th height="24" align="left" scope="row"><div align="right"><span 

class="Estilo15">Nombres:</span></div></th>
    <td colspan="6"><div align="left" class="Estilo15">
        <input name="txtnombre" type="text" class="Estilo15" id="txtnombre" value=" <?=$fila["nom_alum"]?>" size="40" maxlength="100" 

readonly="readonly"/>
    </div></td>
  </tr>
  
  <tr>
    <th height="24" align="left" scope="row"><div align="right"><span 

class="Estilo15"><strong>Edad:</strong></span></div></th>
    <td width="18%"><div align="left" class="Estilo15">
      <input name="txtedad" type="text" class="Estilo15" id="txtedad" 

value="<?=$fila["edad"]?>" size="10" readonly="readonly" />
    </div></td>
    <td width="11%">&nbsp;</td>
    <td width="11%"><div align="right" 

class="Estilo15"><strong>Telefono:</strong></div></td>
    <? 
		
		$telefono= $fila["telefono"];
	$celular= $fila["celular"];
	
	if($telefono=="")
	{
		$movil=$celular;	
	}
	if($celular=="")
	{
		$movil=$telefono;
	}
	if($telefono=="" and $celular=="")
	{
		$movil="";
	}
	if($telefono<>"" and $celular<>"")
	{
		$movil=$celular;
	}
	
	?>
	
	
	<td width="13%"><span class="Estilo15"><strong>
      <input name="txttel" type="text" class="Estilo15" id="txttel" 

value="<? print $movil; ?>" size="11" readonly="readonly" />
    </strong></span></td>
    <td colspan="2"><div align="left" class="Estilo11"></div></td>
    </tr>
  <tr>
    <th height="24" align="left" scope="row"><div align="right"><span 

class="Estilo15">Fecha:</span></div></th>
	
    <td><div align="left" class="Estilo15">
      <input name="txtfecha" type="text" class="Estilo15" id="txtfecha" 

value="<? print date();?>" size="10" readonly="readonly" />
    </div></td>
    <td>&nbsp;</td>
    <td><div align="right" class="Estilo15"><strong>Curso</strong>:</div>      <span 

class="Estilo16"></span></td>
    <td><span class="Estilo16"><span class="Estilo11">
      <input name="txtcurso" type="text" class="Estilo15" id="txtcurso" 

value="<?=$fila["id_cursos"]?>" size="11" readonly="readonly" />
    </span></span></td>
    <td colspan="2">&nbsp;</td>
    </tr>
  <tr>
    <th height="23" align="left" scope="row"> <div align="right"><span 

class="Estilo15">Obs:</span></div></th>
    <th height="23" colspan="6" align="left" scope="row"><label>
      <input name="observa" type="text" class="Estilo11" id="observa" size="40">
    </label></th>
  </tr>
  <tr>
    <th height="23" align="left" scope="row">&nbsp;</th>
    <th height="23" colspan="6" align="left" scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th height="23" colspan="7" align="left" scope="row"><div align="center">
      <input type="submit" name="btnregistrar"  id="btnregistrar" value="Registrar" />
    </div></th>
    </tr>
</table>
  

  <?php
		
			
		if(isset($_REQUEST['btnregistrar']))
 		{
 	        
			$cedula=$_POST['txtcedula'];
			$apellido=$_POST['txtapellido'];
			$nombre=$_POST['txtnombre'];
			$fecha=$_POST['txtfecha'];
			$telefono=$_POST['txttel'];
			$observacion=$_POST['observa'];
			
		
							
				/*$buscar = consultar("select * from descuento where num_fac_des='$num_fac'");
					$yaexiste = mysql_num_rows($buscar);
					if($yaexiste==1)
					{
							echo "<script LANGUAGE=\"JavaScript\">
								alert (\"FACTURA YA REGISTRADA.\");
								</script>";
					}
			
			
				else 
	{*/
					
		$registrar="insert into exalumno values('$cedula', '$apellido', '$nombre', '$fecha', '$telefono', '$observacion')";
						save($registrar);
						
						echo "<script language=\"javascript\">
			  		location=\"indexadmin.php?cont=\";</script>";	
					
					
				//}	
		} 
			
			

		?>
</form>
</body>
</html>
