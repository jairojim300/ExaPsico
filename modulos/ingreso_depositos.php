<?php
error_reporting(0);
  // require_once("../libreria/dac.php");
   
   
  session_start(); 
   
   

$a22=$_SESSION['$cedula231'];



if($a22=="psicometria")
			
			{
			
			$a225="Machala";
			}
				
			
if ( $a22=="secretaria"){
			
			
			$a225="secretaria";
			
			
			}

if ( $a22=="psicokatty"){
			
			
			$a225="Katty";
			
			
			}
			
if ( $a22=="psicofreddy" or $a22=="PSICOFREDDY"){
			
			
			$a225="Freddy";
			
			
			}
			
			
else if($a22=="psicowilson"){
			
			
			$a225="Wilson";
			
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
.Estilo7 {
	font-size: 12px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #000000;
	font-weight: bold;
}
.Estilo8 {font-size: 11px; font-family: Geneva, Arial, Helvetica, sans-serif; color: #003333; }
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
   <table width="248" align="center">
    <tr>
      <th height="56" colspan="3" scope="col"><span class="Estilo7">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="159" height="32" title="ingreso_depo">
          <param name="SRC" value="/rodar/imagen/ingreso_depo.swf" />
          <param name="BGCOLOR" value="" />
          <param name="movie" value="../imagen/cuadrecaja.swf" />
          <param name="quality" value="high" />
          <embed src="/rodar/imagen/ingreso_depo.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="159" height="32"></embed>
        </object>
      </span></th>
    </tr>
	
	
	
    <tr>
      <th width="88" scope="row"><div align="right" class="Estilo8">Fecha</div></th>
      <td width="116"><input name="txt_fecha" type="text" id="txt_fecha" value="" size="10" readonly="true" onFocus="siguienteCampo ='texfact';">
	  <img src="/rodar/imagen/reloj.png" alt="Ver calendario" style="cursor:pointer" name="calendario" width= "15" height="25" border="0" 
			align="absmiddle" id="calendario" /></td>
			
			<script type="text/javascript">
		    Calendar.setup({
        	inputField     :    "txt_fecha",     // id of the input field
		    ifFormat       :    "%Y-%m-%d",      // format of the input field
	        button         :    "calendario",  // trigger for the calendar (button ID)
	        align          :    "Bl",           // alignment (defaults to "Bl")
    	    singleClick    :    true,
			step           :    1
    		});
		</script>

      <td width="28">&nbsp;</td>
    </tr>
	
		
    <tr>
      <th scope="row"><div align="right" class="Estilo8"># Referencia </div></th>
      <td colspan="2" bgcolor="#FFFFFF"><div align="left">
        <label>
        <input name="texref" type="text" id="texref" size="20" onFocus="siguienteCampo ='texvalor';" />
        </label>
      </div></td>
    </tr>
    <tr>
      <th scope="row"><div align="right" class="Estilo8">Valor $ </div></th>
      <td colspan="2"><div align="left">
        <label></label>
        <input name="texvalor" type="text" id="texvalor" size="20" onFocus="siguienteCampo ='texdesc';" />
      </div>        <div align="left"></div></td>
    </tr>
    <tr>
      <th height="21" scope="row"><div align="right"><span class="Estilo8">
      </span></div>        <span class="Estilo8"><label>
        <div align="right">Descripcion</div>
        </label>
      </span></th>
      <th height="21" colspan="2" scope="row"><div align="left">
        <textarea name="texdesc" cols="18" rows="3" wrap="virtual" id="texdesc" onFocus="siguienteCampo ='fin';"></textarea>
      </div></th>
    </tr>
	
    <tr>
      <th colspan="3" scope="row">&nbsp;</th>
    </tr>
    <tr>
      <th colspan="3" scope="row"><input type="submit" name="btnregistrar"  id="btnregistrar" value="Registrar" /> <input name="btnregistrar" type="hidden" id="btnregistrar" value="0" />	   </th>
    </tr>
  </table>

  <?php
		
			
		if(isset($_REQUEST['btnregistrar']))
 		{
 	        $fecha=$_POST['txt_fecha'];
			$referencia=$_POST['texref'];
			$val_depo=$_POST['texvalor'];
			$descrip=$_POST['texdesc'];
			
		
							
				$buscar = consultar("select * from depositos where num_referencia='$referencia'");
					$yaexiste = mysql_num_rows($buscar);
					if($yaexiste==1)
					{
							echo "<script LANGUAGE=\"JavaScript\">
								alert (\"DEPOSITO YA FUE REGISTRADO.\");
								</script>";
					}
			
			
				else 
	{
					
		$registrar="insert into depositos values('','$fecha','$referencia','$val_depo','$descrip','$a225')";
						save($registrar);
						
						//	echo "<script language=\"javascript\">
//			  		location=\"indexadmin.php\";<script>";
					
					
				}	
		} 
			
			

		?>
</form>
</body>
</html>