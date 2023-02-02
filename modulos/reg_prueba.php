<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="all" href="jscalendar/calendar-win2k-cold-1.css" title="win2k-cold-1" />
<script type="text/javascript" src="jscalendar/calendar.js"></script>
<script type="text/javascript" src="jscalendar/lang/calendar-	es.js"></script>
<script type="text/javascript" src="jscalendar/calendar-setup.js"></script>	


<style type="text/css">
<!--
.Estilo2 {font-size: 11px}
.Estilo3 {font-family: Geneva, Arial, Helvetica, sans-serif}
.Estilo4 {color: #003333}
.Estilo5 {color: #000000}
-->
</style>





<script language="javascript" type="text/javascript">

siguienteCampo = "txtcedula"
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
<?php
		
			
		if(isset($_REQUEST['btnregistrar']))
 		{
 	        $cedula=$_POST['txtcedula'];
			$nombre=strtoupper($_POST['txtnombre']);
			$apellido=strtoupper($_POST['txtapellido']);
			$edad=$_POST['txtedad'];
			$sexo=strtoupper($_POST['cmbSexo']);
			$tipo=$_POST['cmbTipo'];
			$telefono=$_POST['txttelefono'];
			$direccion=ucwords($_POST['txtdireccion']);
	 	    $login=$_POST['txt_fecha'];
			
			$busqueda = consultar("SELECT COUNT(*) FROM alum_renov");
   	 		$fila = mysql_fetch_array($busqueda);
	 
	 		$id_re=$fila[0] +1;
		
			$edadcal= 2015 - $edad;
		
	 
			$buscar = consultar("select * from alum_renov where nu_cedula='$cedula'");
			$yaexiste = mysql_num_rows($buscar);
			if($yaexiste==1)
			{
					echo "<script LANGUAGE=\"JavaScript\">
					alert (\"USUARIO YA EXISTE POR FAVOR REVISAR CEDULA.\");
					</script>";
			}
			else 
			{
			echo htmlentities($row['txtapellido']);
			echo htmlentities($row['txtnombre']);
			echo htmlentities($row['txtdireccion']);
			
			
		$registrar="insert into alum_renov values('$id_re', '$cedula','$nombre','$apellido','$edadcal','$sexo','$telefono','$direccion',NOW(),'','$tipo', 'sin imprimir')";
						save($registrar);
						
						//	echo "<script language=\"javascript\">
			  	//	location=\"indexsecre.php\";<script>";
					
					
			}	
		} 
			
			

		?>
		

<?php

  // require_once("../libreria/dac.php");
?>
<script type="text/javascript" src="libreria/libreria.js"></script>



<form id="form1" name="form1" method="post" action=" " onSubmit="return validar_registro(form1)" >
  <table width="31%" height="273" border="0" align="center" bgcolor="#FFFFFF" onfocus="MM_validateForm('txtnombre','','R','txtapellido','','R','txtedad','','RisNum');return document.MM_returnValue">
  <tr>
    <th height="46" colspan="2" bgcolor="#FFFFFF" scope="row"><div align="center" class="Estilo3 Estilo5 Estilo2">
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="145" height="32">
        <param name="SRC" value="/rodar/imagen/Registro.swf" />
        <param name="BGCOLOR" value="" />
        <param name="movie" value="../imagen/Registro.swf" />
        <param name="quality" value="high" />
        <embed src="/rodar/imagen/Registro.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="145" height="32"></embed>
      </object>
    </div></th>
  </tr>
  <tr>
    <th width="25%" height="24" scope="row"><div align="left" class="Estilo8 Estilo2 Estilo3 Estilo4">
      <div align="right">Cedula:</div>
    </div></th>
    <td width="75%">
    <label>
        <input name="txtcedula" type="text" id="txtcedula" onFocus="siguienteCampo ='txtnombre';" onkeypress = "return pulsar(event)" size="10" maxlength="10" />
      </label>    <label>
      <input name="btnverificar" type="submit" id="btnverificar" value="Verificar">
      </label></td>
    </tr>
	<?php
		
			
		if(isset($_GET['btnverificar']))
 		{
			$cedula=$_POST["txtcedula"];
			$busqueda = consultar("select * from alum_renov where nu_cedula='$cedula'");
    		$fila = mysql_fetch_array($busqueda);
		
		
		}
	?>
  <tr>
    <th height="24" scope="row"><div align="left" class="Estilo8 Estilo2 Estilo3 Estilo4">
      <div align="right">Apellido</div>
    </div></th>
    <td><input type="text" name="txtnombre" id="txtnombre" value="<?=$fila["nom_per"]?>" onFocus="siguienteCampo ='txtapellido';" /></td>
  </tr>
  <tr>
    <th height="24" scope="row"><div align="left" class="Estilo8 Estilo2 Estilo3 Estilo4">
      <div align="right">Nombre</div>
    </div></th>
    <td><input type="text" name="txtapellido" id="txtapellido" onFocus="siguienteCampo ='txtedad';"  /></td>
  </tr>
  <tr>
    <th height="24" scope="row"><div align="left" class="Estilo8 Estilo2 Estilo3 Estilo4">
      <div align="right">Año Nac. </div>
    </div></th>
    <td><input name="txtedad" type="text" id="txtedad" onFocus="siguienteCampo ='cmbSexo';" onBlur="MM_validateForm('txtedad','','RisNum');return document.MM_returnValue"  onkeypress = "return  pulsar1(event)" maxlength="4"/></td>
  </tr>
  <tr>
    <th height="24" scope="row"><div align="left" class="Estilo8 Estilo2 Estilo3 Estilo4">
      <div align="right">Sexo</div>
    </div></th>
    <td><label>
      <select name="cmbSexo" id="cmbSexo" onFocus="siguienteCampo ='cmbTipo';">
        <option>Seleccione Sexo</option>
        <option value="Femenino">Femenino</option>
        <option value="Masculino">Masculino</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <th height="24" scope="row"><div align="left" class="Estilo8 Estilo2 Estilo3 Estilo4">
      <div align="right">Tipo</div>
    </div></th>
    <td><select name="cmbTipo" id="cmbTipo" onFocus="siguienteCampo ='txttelefono';">
      <option>Seleccione Tipo</option>
      <option value="Renovacion">Renovacion</option>
      <option value="Ex-alumno">Ex-alumno</option>
      <option value="Cantones">Cantones</option>
	  <option value="Extra">Extra</option>
    </select></td>
  </tr>
  <tr>
    <th height="24" scope="row"><div align="left" class="Estilo8 Estilo2 Estilo3 Estilo4">
      <div align="right">Telefono</div>
    </div></th>
 <td><input name="txttelefono" type="text" id="txttelefono"  onFocus="siguienteCampo ='txtdireccion';" onkeypress = "return pulsar23(event)" maxlength="10" /></td>
  </tr>
  <tr>
    <th height="37" scope="row"><div align="left" class="Estilo8 Estilo2 Estilo3 Estilo4">
      <div align="right">Direccion</div>
    </div></th>
    <td><textarea name="txtdireccion" id="txtdireccion" onFocus="siguienteCampo ='fin';" ></textarea></td>
  </tr>
  
  <tr>
    <th colspan="2" scope="row"><div align="center"><input type="submit" name="btnregistrar" id="btnregistrar" value="Registrar" />
       
        &nbsp;&nbsp;&nbsp;
        <input name="btnregistrar" type="hidden" id="btnregistrar" value="0" />
      </div>
      <div align="center"></div></th>
  </tr>
</table>
		
		<script type="text/javascript">
		//FUNCION PARA VALIDAR QUE NO DEN ESPACIO EN LOS TEXT BOX (EJM CEDULA)
function pulsar(e) {
    tecla = (document.form1.textsegun) ? e.keyCode : e.which;
    if (tecla==8) return true;
    patron =/\s/;
    te = String.fromCharCode(tecla);
    return !patron.test(te);
}

function pulsar1(d) {
    tecla = (document.form1.textsegun) ? d.keyCode : d.which;
    if (tecla==8) return true;
    patron =/\s/;
    te = String.fromCharCode(tecla);
    return !patron.test(te);
}

function pulsar23(b) {
    tecla23 = (document.form1.textsegun) ? b.keyCode : b.which;
    if (tecla23==8) return true;
    patron =/\s/;
    te = String.fromCharCode(tecla23);
    return !patron.test(te);
}


</script>

	
	
   

        
</form>

