<head>

<style type="text/css"> 
<!-- 
input { font-family: Tahoma, Verdana, Arial; font-size: 11px; color: #000000; background-color: #00FF99; border: #000000; border-style: solid; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px} 
select { font-family: Tahoma, Verdana, Arial; font-size: 11px; color: #FFFFFF; background-color: #6699CC; border: #000099; border-style: solid; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px} 

--> 
</style>
<link href="../estilos/estilos1.css" rel="stylesheet" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /></head>

<?php 
   
	//iniciar sesión
	
	if(isset($_REQUEST['btniniciar']))
	{
		$resultado = consultar("select * from usuarios where nom_usu='".$_REQUEST['txtlogin']."' and cla_usu='".$_REQUEST['txtpass']."'");
		
				if($fila = mysql_fetch_array($resultado)) 
		{
				$cod_pac=$fila['id_usu'];
				$login=$fila['nom_usu'];
				$pass=$fila['cla_usu'];	
				$permiso=$fila['permiso'];
				
				//capturar sesion
				$_SESSION['id_usu']=$cod_pac;
				$_SESSION['nom_usu']=$login;
				$_SESSION['cla_usu']=$pass;	
				$_SESSION['permiso']=$permiso;
				
						
				if($_SESSION['permiso']=="rodar")
				{
					echo "<script language=\"javascript\">
			  		location=\"indexsistema.php\";</script>";
					
			  	}
				
				
				if($_SESSION['permiso']=="secretaria")
				{
					echo "<script language=\"javascript\">
			  		location=\"indexsecre.php\";</script>";
					
			  	}
				
				
					if($_SESSION['permiso']=="psicometria")
				{
					echo "<script language=\"javascript\">
			  		location=\"indexadmin.php\";</script>";
					
			  	}
				
			
				else if(!isset($_SESSION['nom_usu']))
				{
					echo "<script LANGUAGE=\"JavaScript\">
				alert (\"Usuario o clave incorrectos!!\");
				</script>";
				}
			
								
		}	
				
	}
	

				

?>
<style type="text/css">
<!--
body {
	background-image: url(../imagen/fondo.jpg);
	background-repeat: repeat-x;
}
.Estilo11 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bolder; color: #000000; }
-->
</style>
<form id="formulario" name="formulario" method="post" action="<?=$_SERVER['']?>"               
             onsubmit="return validar_formulario(formulario)">
  <table width="28%" height="234" border="0" align="center">
    <tr>
      <td height="129" colspan="2"><p align="center"><img src="/rodar/imagen/iniciar sesion.png" width="80" height="94" /></p>
      <p align="center"><strong>Iniciar Sesi&oacute;n</strong></p></td>
    </tr>
    <tr>
      <td width="27%" bordercolor="1"><div align="right" class="Estilo11">Login</div></td>
      <td width="73%" bordercolor="1"><label>
        <input name="txtlogin" type="text" id="txtlogin" size="8" />
      </label></td>
    </tr>
    <tr>
      <td bordercolor="1"><div align="right" class="Estilo11">Password</div></td>
      <td bordercolor="1"><label>
        <input name="txtpass" type="password" id="txtpass" size="8" />
      </label></td>
    </tr>
    <tr>
      <td colspan="2">
        <div align="center">
          <input type="submit" name="btniniciar" id="btniniciar" value="Iniciar" />
          <input name="btniniciar" type="hidden" value="0" />        
          <? if(!isset($_SESSION['nom_usu']) && isset($_REQUEST['btniniciar']))		  	
				echo "<script LANGUAGE=\"JavaScript\">
				alert (\"Usuario o clave incorrectos!!\");
				</script>";
		  ?>
        </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><em><strong><a href="index.php?cont=8"></a></strong></em></div></td>
    </tr>
  </table>
</form>
