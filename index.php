<?php 
error_reporting(0);
require_once("libreria/dac.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<?php 
require_once("libreria/dac.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Index Principal - RODAR S.A</title>
<link href="estilos/estilos1.css" rel="stylesheet" type="text/css" />


<style type="text/css">
h2 {text-shadow: #080808 5px 3px 2px}
.Estilo1 {font-family: Geneva, Arial, Helvetica, sans-serif}
.Estilo2 {
	font-size: 12px;
	color: #003333;
}
body {
	background-image: url();
	background-repeat: repeat;
}
.Estilo3 {
	color: #333333;
	font-size: 11px;
}
</style>


</head>

<body>

</script>


<SCRIPT LANGUAGE='JavaScript'>
//sript para nombre de la pagina en movimiento
//var txt=" RODAR S.A. ";
//var espera=100;
//var refresco=null;
//function rotulo_title( ) {
//document.title=txt;
//txt=txt.substring(1,txt.length
//)+txt.charAt(0);
//refresco=setTimeout("rotulo_title( )",espera);}
//rotulo_title( );
</SCRIPT>








<table width="569" height="554" border="10" align="center">
  <tr>
    <td height="120" colspan="2"><div align="center">
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="536" height="111">
        <param name="movie" value="imagen/head.swf" />
        <param name="quality" value="high" />
        <embed src="imagen/head.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="536" height="111"></embed>
      </object>
    </div></td>
  </tr>
  <tr>
    <td height="28" colspan="2" align="center" valign="middle" bgcolor="#FFFFFF">    </td>
  </tr>
  <tr>
    <td width="142" valign="top"><span class="Estilo1">
      <?php include("modulos/menuizquierdo.php"); ?>
    </span>
    <div align="center"></div>
    <div align="center"></div></td>
    <td width="393" height="287" valign="top" class="fondo_contenido" >
	
		 <p>

		   <?php 
				switch ($_REQUEST['cont'])
		 	{
			
				case 2:
						include("modulos/quienessomos.php");
						break;
				case 3:
						include("modulos/servicios.php");
						break;
						
				case 4:
						include("modulos/vision_mision.php");
						break;
				case 5:
						include("modulos/galeria.php");
						break;
						
				case 6:
						include("modulos/lecturas.php");
						break;
				case 7:
						include("modulos/iniciarsesion.php");
						break;
			
				case 8:
						include("modulos/registrarse.php");
						break;
						
				case 9:
						include("modulos/iniciarsesion.php");
						break;
						
									
			case 15:
						include("modulos/inicio_pag.php");
						break;	
						
				default:
						include("modulos/ingre_sis.php");
			}						
		?>  
           
   
</tr>
  
  <tr>
  
    <td height="74" colspan="2"><p align="center" class="Estilo1 Estilo2 Estilo3">  Escuela de Conduccion RODAR S.A. <br />
Teléfonos: 072968738 - 072968682 <br />
Machala - El Oro - Ecuador </p> </td>
  </tr>
</table>
</body>
</html>
