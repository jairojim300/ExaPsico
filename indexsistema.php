<?php 
error_reporting(0);
require_once("libreria/dac.php");
session_start();

  
   

$a22=$_SESSION['$cedula231'];



if($a22=="psicometria")
			
			{
			
			$a22="Machala";
			}
				
			
			if ( $a22=="psicohuaquillas"){
			
			
			$a22="Huaquillas";
			
			
			}
			
			
			else if($a22=="psicopiñas"){
			
			
			$a22="Piñas";
			
			}

$sesion_pac=$_SESSION['nom_usu'];
	 
		//print $sesion_pac;
	 

	 

   
   $consulta=consultar("select * from usuarios where nom_usu='$sesion_pac'");
   $sesion=mysql_num_rows($consulta);
  
	if($sesion==0)
	{
				echo "<script language=\"javascript\">
				     location=\"modulos/acceso_denegado.php\";</script>";
	}



   
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
.Estilo9 {font-size: 24px}
-->
</style>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Psicometria - RODAR S.A.</title>
<link href="estilos/estilos1.css" rel="stylesheet" type="text/css" />

<style type="text/css">
<!--
.Estilo1 {color: #CCCCCC}
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
    <td height="28" colspan="2" align="center" valign="middle" bgcolor="#FFFFFF"><span class="Estilo9"><a href="../rodar2/modulos/elegir_examen_sucursal.php">MENU PRINCIPAL</a></span> </td>
  </tr>
  <tr>
    <td width="162" valign="top"><span class="Estilo1">
      <?php include("modulos\menuizquierdopsicosucursal.php"); ?>
    </span>
      <p><span class="Estilo1">          </span></p>
      <p align="center"><marquee>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="103" height="27">
          <param name="SRC" value="/rodar/imagen/renovacion.swf" />
          <param name="BGCOLOR" value="" />
          <param name="movie" value="imagen/renovacion.swf" />
          <param name="quality" value="high" />
          <embed src="/rodar/imagen/renovacion.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="103" height="27"></embed>
        </object>
		</marquee>
      <?=$a22?></p>
      <p align="center">&nbsp;</p></td>
    <td width="442" height="303" valign="top" class="fondo_contenido" >
	
		 <p>

		   <?php 
				switch ($_REQUEST['cont'])
		 	{
			
			
			
			
				case 2:
						include("modulos/registrarse.php");
						break;
				case 3:
						include("modulos/act_renova_sucu.php");
						break;
						
				case 4:
						include("modulos/impr_renov_sucur.php");
						break;
				case 5:
						include("modulos/impr_psico.php");
						break;
						
				case 6:
						include("modulos/descuentos.php");
						break;
				case 7:
						include("modulos/verregistro.php");
						break;
			
				case 8:
						include("modulos/registrarse.php");
						break;
						
				case 9:
						include("modulos/ingre_sis.php");
						break;
						
			
			
			case 12: 
						include("modulos/eliminar_certificado_sucu.php");
						break;
			
			case 13: 
						include("modulos/menu_psico_eliminar_sucu.php");
						break;
			
			
			case 14: 
						include("modulos/certificados_anulados_sucu.php");
						break;
			
									
			case 15:
						include("modulos/inicio_pag.php");
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
