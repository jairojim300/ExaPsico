<?
session_start();
?> 


<?php
	$cedula=$_POST["txtcedula"];
   // session_start();
    //$_SESSION['txtcedula'] = $cedula;

?>

<style type="text/css">
<!--
.Estilo1 {font-family: Geneva, Arial, Helvetica, sans-serif}
.Estilo3 {font-size: 11px}
.Estilo40 {
	font-size: 11px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #000000;
}
.Estilo5 {color: #000000}
.Estilo42 {font-size: 18px}
-->
</style>


<?

  if(isset($_REQUEST['btnbuscar']))
 		{

$buscar2 = consultar("select * from alum_renov where nu_cedula='$cedula'");
					$yaexiste2 = mysql_num_rows($buscar2);
					
					
					if($yaexiste2==0)
					{
							echo "<script LANGUAGE=\"JavaScript\">
								alert (\"Alumno no Registrado.\");
								</script>";
								
			echo "<script language=\"javascript\">
			  		location=\"indexsistema.php?cont=13\";</script>";
									
					}
					
					
		$buscar12 = consultar("select * from examen where nu_cedula='$cedula'");
					$yaexiste12 = mysql_num_rows($buscar12);
					
					
					if($yaexiste12==0)
					{
							echo "<script LANGUAGE=\"JavaScript\">
								alert (\"Alumno no se realiza EXAMEN AUN.\");
								</script>";
								
			echo "<script language=\"javascript\">
			  		location=\"indexsistema.php?cont=13\";</script>";
									
					}			
					
					

}

?>




<form id="form1" name="form1" method="post" action="" >
  <table width="37%" align="center">
  <tr>
    <th height="43" colspan="4" scope="row"><p class="Estilo13 Estilo42">
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="174" height="27">
        <param name="SRC" value="/rodar/imagen/elimnarcert.swf" />
        <param name="BGCOLOR" value="" />
        <param name="movie" value="../imagen/elimnarcert.swf" />
        <param name="quality" value="high" />
        <embed src="/rodar/imagen/elimnarcert.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="174" height="27"></embed>
      </object>
    </p>      </th>
  </tr>
	
  <tr>
    <th width="20%" align="left" scope="row"><div align="center" class="Estilo7"> Cedula</div></th>
    <td colspan="3"><strong>












	
<? 

	
	


    
	$busqueda = consultar("select * from alum_renov where nu_cedula='$cedula'  ");
    $fila = mysql_fetch_array($busqueda);

$busqueda2 = consultar("select * from examen where nu_cedula='$cedula'");
    $fila2 = mysql_fetch_array($busqueda2);
	
	

	
	
	
?>
	
      <input name="txtcedula" type="text" id="txtcedula" value="<?=$fila["nu_cedula"]?>" size="11" maxlength="10" />





      <input type="submit" name="btnbuscar" id="btnbuscar" value="Buscar" />
      
    </strong></td>
    </tr>
  
  <tr>

    <th height="21" colspan="4" align="left" scope="row">&nbsp;</th>
    </tr>
  <tr>
    <th width="20%" align="left" class="Estilo3" scope="row"><div align="right" class="Estilo7 Estilo3 Estilo1 Estilo5">Nombre:</div></th>
    <td colspan="3" class="Estilo1"><input name="txtnom" type="text" id="txtnom" size="45" readonly="readonly" value=" <?=$fila["nom_per"].' '.$fila["ape_per"]?>" /></td>
  </tr>
  <tr>
    <th height="40" align="left" class="Estilo40" scope="row"><div align="left" class="Estilo7">
        <div align="center">Curso.. </div>
    </div>
        </p></th>
    <th align="left" class="Estilo11" scope="row"><input name="txt_vis" type="text" class="Estilo40" id="txt_vis" value="Renovacion" size="15" readonly="readonly" /></th>
    <td class="Estilo1"><div align="left" class="Estilo7">
        <div align="center" class="Estilo40">Fecha. </div>
    </div></td>
    <td class="Estilo1"><span class="Estilo11">
      <input name="txt_vis44" type="text" class="Estilo40" id="txt_vis44" value="<?=$fila2["fecha"]?>" size="12"  maxlength="5" readonly="readonly">
    </span></td>
  </tr>
	
	
	
	    <tr>
    <th height="40" align="left" class="Estilo40" scope="row"><div align="left" class="Estilo7">
      <div align="center"># Anter..      </div>

    </div>
      </p></th>
    <th width="27%" align="left" class="Estilo11" scope="row"><input name="txt_vision252" type="text" id="txt_vision252" value="<?=$fila2["certificado"]?>" size="6" readonly="readonly" /></th>
    <td width="19%" class="Estilo1"><div align="left" class="Estilo7">
      <div align="center" class="Estilo40"># Actual. </div>
    </div></td>
    <td width="34%" class="Estilo1"><span class="Estilo11">
      <input name="txt_vision2522" type="text" id="txt_vision2522" size="6" maxlength="5"  />
    </span></td>
    </tr>
	
	<? if($cedula > 0) { ?>
	
  <tr>

    <th height="51" colspan="4" align="center" class="Estilo1" scope="row"><p>
      <label></label>
      <a href='modulos/impr_certi_renova.php?v=2' target="_self" >         </a>
      <input type="submit" name="btnregistrar2" onclick="javascript:return  valida_envia()"  id="btnregistrar2" value="Registrar" />
      </p>      </th>
  </tr>
  
  <? } ?>
</table>

  <table width="200" align="right">
    <tr>
      <th align="right" scope="col"><a href="/rodar/indexsistema.php?cont=13" class="Estilo27"><img src="/rodar2/imagen/eliminar.png" alt="aa" width="28" height="30" border="0" /></a></th>
    </tr>
  </table>
  <p><script LANGUAGE="JavaScript">
function loadFrames(page1, page2) {
framecode = "<frameset rows='50%,50%'>"
+ "<frame src='" + page1 + "'>"
+ "<frame src='" + page2 + "'>"
+ "</frameset>";
page = window.open("");
page.document.open();
page.document.write(framecode);
page.document.close();
}
     </script>
    
    
     <SCRIPT LANGUAGE="JavaScript">
marcado=false;
marcado2=false;
marcado1=false;
marcado5=false;
marcado6=false;



function valida_envia(){
	

 
 //valido ingreso de cedula
     if (document.form1.txt_vision2522.value.length==0){
       alert("Favor Escribir # Certificado")
       document.form1.txt_vision2522.focus()
       return false;
    } 

  


	var5 = parseInt(document.form1.txt_vision2522.value, 10);
	if ( isNaN(var5) ) {   
        alert("Dato incorrecto! # Certificado debe ser entero !!!")   ;
		document.form1.txt_vision2522.focus();
        return false  ; 

		
}

    document.form1.submit(); 

} 

             </script>
  </p>
	
	<?
	
	if(isset($_REQUEST['btnregistrar2']))
 		{
 	        			
			$cedula=$_POST['txtcedula']; //
			$apellido=strtoupper($_POST['txtnom']);//
			//$nombre=strtoupper($_POST['txtapellido']);//
			$txtcurso=$_POST['txt_vis'];//
			$txtcertificado=$_POST['txt_vision2522'];//
			$txtcertificadoanulado=$_POST['txt_vision252'];//
			
	
	
	$registrar="insert into certificados_eliminados values('','$cedula','$apellido','$txtcertificadoanulado','$txtcurso',NOW())";

						save($registrar);
						
		
$registrar441="update examen set certificado='$txtcertificado' where nu_cedula='$cedula' ";
					save($registrar441);	
					
			echo "<script language=\"javascript\">
			  		location=\"indexsistema.php?cont=13\";</script>";		
							
	
	}
	 ?>
	
	
</form>
