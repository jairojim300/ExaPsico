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
-->
</style>
</head>


<?php //require_once("../libreria/dac.php");?>



<style type="text/css">
<!--
body {
	background-image: url(../imagen/fondo.jpg);
	background-repeat: repeat-x;
}
.Estilo2 {
	font-size: 11px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #000000;
}
.Estilo3 {
	font-size: 11px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #000000;
	font-weight: bold;
}
.Estilo23 {font-size: 11px; font-family: Geneva, Arial, Helvetica, sans-serif; color: #003333; }
.Estilo5 {color: #003333}
.Estilo25 {font-size: 10}
.Estilo26 {font-size: 9px}
-->
</style><form name="form1" method="post" action="" >
  <table width="53%" align="center" bgcolor="#FFFFFF" class="Estilo2">
  <tr>
    <th height="58" colspan="4" scope="row"><p class="Estilo3">
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="150" height="32">
        <param name="movie" value="/rodar2/imagen/imprimi Factura.swf" />
        <param name="quality" value="high" />
        <embed src="/rodar2/imagen/imprimi Factura.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="150" height="32"></embed>
      </object>
    </p>      </th>
  </tr>
	
	
	<SCRIPT LANGUAGE="JavaScript">




function valida_envia(){
	


    if (document.form1.txtcedula.value.length==0){
       alert("Favor Escribir #CEDULA");
       document.form1.txtcedula.focus();
       return false;
    } 

 
    if (document.form1.txtcurso1.value.length==0){
       alert("Favor Escribir Numero Factura");
       document.form1.txtcurso1.focus();
       return false;
    } 


   if (document.form1.txtcurso.value.length==0){
       alert("Favor Escribir Valor Factura");
       document.form1.txtcurso.focus();
       return false;
    } 	
	

    document.form1.submit(); 

					

} 

</script>
	
	
	<? 

    $cedula=$_POST["txtcedula"];
	
	 $bus= consultar("SELECT * from alum_renov where nu_cedula='$cedula'");
	 $fila = mysql_fetch_array($bus);
	 
	 $tipo_ex= $fila["curso"];
	 					
				
?>
	
	
  <tr>
    <th width="16%" align="left" scope="row"><div align="center" class="Estilo23 Estilo24">
      <div align="right" class="Estilo24">
        <div align="right"># Cedula:</div>
      </div>
    </div></th>
    <td colspan="3"><strong>
      <input name="txtcedula" type="text" class="Estilo3" id="txtcedula" value="<?=$fila["nu_cedula"]?>" size="11" maxlength="13" />
      <input type="submit" name="btnbuscar" id="btnbuscar" value="Buscar" />
      <input type="hidden" name="hiddenField" id="hiddenField" />
    </strong></td>
    </tr>
  
  <tr>
    <th width="16%" height="16" align="left" scope="row"><div align="right"><span class="Estilo5"><span class="Estilo24"><span class="Estilo25"><span class="Estilo26"><span class="Estilo26"><span class="Estilo24"></span></span></span></span></span></span></div></th>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <th width="16%" height="25" align="left" scope="row"><div align="right" class="Estilo23 Estilo24">
      <div align="right"><span class="Estilo24">Apellidos:</span></div>
    </div></th>
    <td colspan="3"><input name="txtnom" type="text" class="Estilo3" id="txtnom" value="<?=$fila["ape_per"].' '.$fila["nom_per"]?>" size="50" readonly /></td>
  </tr>

  <tr>
    <th align="left" scope="row"><div align="right" class="Estilo5 Estilo24">
      <div align="right"><strong>Direccion:</strong></div>
    </div></th>
    <td colspan="3"><input name="txtedad" type="text" class="Estilo3" id="txtedad" value="<?=$fila["dire"]?>" size="50" readonly/></td>
  </tr>
  <tr>
    <th align="left" scope="row"><div align="right" class="Estilo5 Estilo24">
      <div align="right"><strong> # Fact.:</strong></div>
    </div></th>
    <td width="36%"><strong>
      <input name="txtcurso1" type="text" class="Estilo3" id="txtcurso1" size="9" />
    </strong><strong class="Estilo23">   </strong></td>
	

	
    <td><div align="right" class="Estilo5 Estilo24">
      <div align="right"><strong> # Certificado.:</strong></div>
    </div></td>
    <td><strong>
      <input name="txtcert" type="text" class="Estilo3" id="txtcert" size="9" />
    </strong></td>
  </tr>
  <?
  	$tipo=$fila["curso"];
	//print $tipo;
	if($tipo=='Renovacion')
	{
		$val= 15.00;
			
	}
	if($tipo=='Cantones' or $tipo=='Extra')
	{
		$val= 15.00;
			
	}
	if($tipo=='EVP Caducado')
	{
		$val= 18.00;
			
	}
	else if($tipo=='Ex-alumno')
	{
		$val= 13.39;
	}
  ?>
  
    <tr>
    <th align="left" scope="row"><div align="right" class="Estilo5 Estilo24">
      <div align="right"><strong> $ Valor.:</strong></div>
    </div></th>
    <td width="36%"><strong>
      <input name="txtcurso" type="text" class="Estilo3" id="txtcurso" value="<? echo $val; ?>" size="5" readonly='true'/>
    </strong><strong class="Estilo23">   </strong></td>
	

	
    <td width="23%">&nbsp;</td>
    <td width="25%">&nbsp;</td>
    </tr>
  
  
  
  <tr>
    <th height="113" colspan="4" align="center" scope="row"><p><a href="../indexsistema.php"></a>
      <label></label>
    </p>

	
      <p>
        <input name="btnact" type="submit" class="" id="btnact" onClick="javascript:return  valida_envia()" value="Imprimir" /></p>
      <table width="346">
        <tr>
          <th width="338" scope="col"><table width="66" align="right">
            <tr>
              <th width="58" bgcolor="#000000" scope="col"><a href="/rodar2/indexconta.php?cont=38" class="Estilo27">Salir</a></th>
            </tr>
          </table></th>
        </tr>
      </table>      </th>
  </tr>
</table>






	<?
	
	
		if(isset($_REQUEST['btnact']))
 		{
 	       	
				$d5=$fi1["id_ingresotitulo"];	
			  
				$cedula1=$fila["nu_cedula"];				
				$factura=$_POST['txtcurso1'];
				$certificado=$_POST['txtcert'];
				$valor=$_POST['txtcurso'];
							
			
				$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
    			mysql_select_db("rodar2", $coneccion) or die(mysql_error());
   				$consulta55=mysql_query("SELECT * from factura2 where num_fact='$factura' and fecha=date(NOW())");
     			mysql_close($coneccion);
	
				$yaexiste = mysql_num_rows($consulta55);
			 
			
				if($yaexiste==1)
				{
					echo "<script LANGUAGE=\"JavaScript\">
					alert (\"NUMERO DE FACTURA YA FUE REGISTRADA.\");
					</script>";
								
					echo "<script language=\"javascript\">
			  		location=\"indexsecre.php?cont=18\";</script>";		
								
				}

					
				else {	
				//date(now())
			
				$registrar11="update alum_renov set num_fact='$factura', estado_factura='impresa' where nu_cedula='$cedula1'";
			
					save($registrar11);	
					
				$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
       			mysql_select_db("rodar2", $coneccion) or die(mysql_error());
       			$registrar4=mysql_query("insert into factura2 values('','$factura','$certificado','$cedula1','impresa',date(NOW()),'$valor', '$tipo_ex' ,NOW(),'0')");
       			mysql_close($coneccion);					
					
				
				echo "<script language=\"javascript\">window.open 							('modulos/formato_fact.php?v=$cedula1')</script>";	
	
								echo "<script language=\"javascript\">
			  		location=\"indexsecre.php?cont=18\";</script>";	
								
			
}	 		 	       	
			
				
		}		
	
		?>
	
	
	
	
	
	
</form>