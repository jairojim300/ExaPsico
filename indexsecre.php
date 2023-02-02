<?php 
error_reporting(0);
require_once("libreria/dac.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php 
require_once("libreria/dac.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style type="text/css">
<!--
.Estilo3 {
	color: #333333;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 11px;
}
-->
</style>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Secretaria RODAR S.A.</title>
<link href="estilos/estilos1.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.Estilo1 {color: #CCCCCC}
.Estilo4 {
	font-size: 10px;
	color: #003333;
}
.Estilo5 {
	font-size: 11px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #000000;
}
.Estilo8 {color: #000000}
-->
</style>
</head>

<body>
<table width="569" height="541" border="10" align="center">
  <tr>
    <td height="120" colspan="2"><div align="center">
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="610" height="112">
        <param name="movie" value="imagen/head.swf" />
        <param name="quality" value="high" />
        <embed src="imagen/head.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="610" height="112"></embed>
      </object>
    </div></td>
  </tr>
  <tr>
    <td height="28" colspan="2" align="center" valign="middle" bgcolor="#FFFFFF"><div align="right" class="Estilo4">Sistema &quot;R.P.&quot; realizado Mauricio Muñoz S. </div></td>
  </tr>
  <tr>
    <td width="122" valign="top"><span class="Estilo1">
      <?php include("modulos\menuizquierdosecre.php"); ?>
    </span></td>
    <td width="413" height="303" valign="top" class="fondo_contenido" >
	
		 <p>

		   <?php 
				switch ($_REQUEST['cont'])
		 	{
			
				case 2:
						include("modulos/registrarse.php");
						break;
				case 3:
						include("modulos/act_renova.php");
						break;
						
				case 4:
						include("modulos/impr_renov.php");
						break;
				case 5:
						include("modulos/impr_psico.php");
						break;
						
				case 6:
						include("modulos/descuentos.php");
						break;
				case 7:
						include("modulos/ingre_sis.php");
						break;
			
				case 8:
						include("modulos/registrarse.php");
						break;
						
				case 9:
						include("modulos/ingre_sis.php");
						break;
						
									
			case 15:
						include("modulos/inicio_pag.php");
						break;	
						
			case 16:
						include("modulos/busc_apellido_renov.php");
						break;	
			case 17:
						include("modulos/reg_prueba.php");
						break;	
			case 18:
						include("modulos/menufact_gastos.php");
						break;	
			case 19:
						include("modulos/imprimir_fact.php");
						break;	
			case 20:
						include("modulos/descuentos.php");
						break;		
			case 21:
						include("modulos/reimprimirfact.php");
						break;				
			case 22:
						include("modulos/reporte_fact.php");
						break;	
			case 23:
						include("modulos/eliminar_factura.php");
						break;																								
				default:
						include("modulos/ingre_sis.php");
			}						
		?>  
         <p>         
         <p>         
  <p>  </tr>
  
  <tr>
    <td height="60" colspan="2"><p align="center" class="Estilo3"><span class="Estilo1 Estilo2 Estilo5"><span class="Estilo2 Estilo8">Escuela de Conduccion RODAR S.A. <br />
Teléfonos: 072968738 - 072968682 <br />
Machala - El Oro - Ecuador </span></span></p></td>
  </tr>
</table>
</body>
</html>
