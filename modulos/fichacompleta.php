<?  $v= $_REQUEST['v'];	?><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" media="all" href="jscalendar/calendar-win2k-cold-1.css" title="win2k-cold-1" />
<script type="text/javascript" src="jscalendar/calendar.js"></script>
<script type="text/javascript" src="jscalendar/lang/calendar-	es.js"></script>
<script type="text/javascript" src="jscalendar/calendar-setup.js"></script>	
<script type="text/javascript" src="niftycube.js"></script> 
<script type="text/javascript"> 
<style type="text/css">
<!--
.Estilo1 {font-size: 12px}
-->
</style>


<script type="text/javascript">
window.onload=function(){
Nifty("div#box","big");
}
</script> 

<style type="text/css">
<!--
.Estilo36 {
	font-size: 24px;
	color: #FF0000;
}
-->
</style></head>


<?php require_once("../libreria/dac.php");?>




<script type="text/javascript" src="../librerias/libreria.js"></script>





<style type="text/css">
<!--
body {
	background-image: url(../imagen/fondo.jpg);
	background-repeat: repeat-x;
}
.Estilo1 {font-weight: bold}
.Estilo13 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
.Estilo19 {font-family: Geneva, Arial, Helvetica, sans-serif}
.Estilo20 {font-size: 12px; font-family: Geneva, Arial, Helvetica, sans-serif; color: #003300; }
.Estilo24 {font-size: 11px; font-family: Geneva, Arial, Helvetica, sans-serif; color: #003300; }
.Estilo26 {font-weight: bold; font-size: 11px; font-family: Geneva, Arial, Helvetica, sans-serif; color: #003300; }
.Estilo27 {font-size: 10px}
.Estilo29 {color: #FFFFFF}
.Estilo31 {font-size: 11px}
.Estilo34 {color: #000000}
.Estilo35 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 11px; color: #000000; }
-->
</style>

   <? 
  
	$busqueda = consultar("select * from examen where nu_cedula='$v'");
    $fila1 = mysql_fetch_array($busqueda);
  ?>


<form name="form1" method="post" action="" >
  <table width="53%" align="center" bordercolor="#000000" bgcolor="#FFFFFF">
  <tr>
    <th height="17" colspan="3" scope="row"><p class="Estilo13">Ficha Alumno.</p>      </th>
  </tr>
  <tr>
    <th colspan="3" scope="row"><p><img src="/rodar/modulos/verblob.php?v=<?=$v?>" alt="SIN FOTO" class="Estilo36"  /></p>      </th>
  </tr>
  
  
  <?
     
   if(isset($_REQUEST['btnbuscar']))
 		{
   		 	
			
		   	$buscar1 = consultar("select * from examen where nu_cedula='$v'");
					
					$yaexiste1 = mysql_num_rows($buscar1);
					
					$buscar2 = consultar("select * from alum_renov where nu_cedula='$v'");
					$yaexiste2 = mysql_num_rows($buscar2);
					
					
				
					
					if($yaexiste2==0)
					{
							echo "<script LANGUAGE=\"JavaScript\">
								alert (\"Alumno NO REGISTRADO.\");
								</script>";
								
								echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";	
								
					}


						if($yaexiste1==0)
					{
							echo "<script LANGUAGE=\"JavaScript\">
								alert (\"Alumno NO SE REALIZO EL EXAMEN.\");
								</script>";
								
								echo "<script language=\"javascript\">
			  		location=\"indexadmin.php?cont=4\";</script>";
								
					}

					
   }
   
   ?>
  
  
  
  
  
  
	
	<? 

 
	$busqueda = consultar("select * from alum_renov where nu_cedula='$v'");
    $fila = mysql_fetch_array($busqueda);


?>
  
  <tr>
    <th height="21" align="left" scope="row"><p align="right" class="Estilo24">Cedula</p>      </th>
    <th width="39%" height="21" align="left" scope="row"><span class="Estilo24 Estilo19 Estilo27 Estilo29"><span class="Estilo19 Estilo31 Estilo34"><strong>
      <input name="txtcedula" type="text" id="txtcedula" value="<?=$fila["nu_cedula"]?>" size="11" />
    </strong></span></span></th>
    <td width="43%"><span class="Estilo35">       #Cert
        <input name="txt_vision252" type="text" id="txt_vision252" value="<?=$fila1["certificado"]?>" size="3" readonly="readonly" />
    </span></td>
  </tr>
 
  
  <tr>
    <th width="18%" align="left" scope="row"><div align="right" class="Estilo24">Nombre:</div></th>
    <td colspan="2"><span class="Estilo24 Estilo19 Estilo27 Estilo29"><span class="Estilo19 Estilo31 Estilo34"><strong>
      <input name="txtnom" type="text" id="txtnom" value=" <?=$fila["nom_per"].' '.$fila["ape_per"]?>" size="50" readonly="readonly"  />
    </strong></span></span></td>
  </tr>
  <tr>
    <th height="25" align="left" scope="row"><div align="right" class="Estilo24">F. Reg. :</div></th>
    <td colspan="2"><span class="Estilo35"><strong>
      <label>
      <input name="txt_fecha" type="text" id="txt_fecha" value="<?=$fila["fecha"]?>" size="8" readonly="readonly" />
      </label>
                         F. Exam :    
        <input name="txt_fecha2" type="text" id="txt_fecha2" value="<?=$fila1["fecha"]?>" size="8" readonly="readonly" />
    </strong></span></td>
  </tr>

  <tr>
    <th align="left" class="Estilo1" scope="row"><div align="right" class="Estilo24">Observ.:</div></th>
    <td colspan="2"><span class="Estilo24 Estilo19 Estilo27 Estilo29"><span class="Estilo19 Estilo31 Estilo34"><strong>
      <input name="txtnom2" type="text" id="txtnom2" value="<?=$fila1["observa"]?>" size="50" readonly="readonly" />
    </strong></span></span></td>
  </tr>
   
  
  <tr>
    <th align="left" scope="row"><div align="right" class="Estilo26">Visual</div></th>
    <td colspan="2" class="Estilo26 Estilo19 Estilo31 Estilo34"><input name="txt_vision" type="text" id="txt_vision" value=" <?=$fila1["aguvis_iz"].' - '.$fila1["aguvis_der"]?>" size="6" readonly="readonly" /> 
      <strong>              Auditivo</strong>   
      <input name="txt_vision2" type="text" id="txt_vision2" value="<?=$fila1["auditivo"]?>" size="3" readonly="readonly" /></td>
  </tr>
  <tr>
    <th align="left" class="Estilo1" scope="row"><div align="right" class="Estilo24">Puntero</div></th>
    <td colspan="2" class="Estilo26 Estilo19 Estilo31 Estilo34"><input name="txt_vision22" type="text" id="txt_vision22" value="<?=$fila1["puntero"]?>" size="3" readonly="readonly" />   
      <strong>                 </strong>Palancas
      <input name="txt_vision23" type="text" id="txt_vision23" value="<?=$fila1["palanca"]?>" size="3" readonly="readonly" /></td>
    </tr>
	
	
	
	  <? 
  		
  
  		 if ($fila1["lentes"] == "1") {
   
    $fila1["lentes"] = "SI";
	$resultado1= $fila1["lentes"];
	
	}
	

  
  else{ if($fila1["lentes"] == "2")  {
      
	  $fila1["lentes"] = "NO";
	  $resultado1= $fila1["lentes"];
	  
  }
  }
   ?>
	
	
	
	
	
	
	
	
  <tr>
    <th align="left" class="Estilo1" scope="row"><div align="right" class="Estilo24">Reflejos</div></th>
    <td colspan="2" class="Estilo26 Estilo19 Estilo31 Estilo34"><input name="txt_vision24" type="text" id="txt_vision24" value="<?=$fila1["reflejo"]?>" size="3" readonly="readonly" /> 
         <strong>  </strong>  <strong>        </strong> <strong>      </strong> Lentes 
      <input name="txt_vision25" type="text" id="txt_vision25" value="<?=$resultado1?>" size="3" readonly="readonly" /></td>
  </tr>
  <tr>
    <th colspan="2" align="left" class="Estilo26" scope="row"><div align="center"></div>
      </p></th>
    <th align="left" class="Estilo26" scope="row">&nbsp;</th>
  </tr>
  <tr>
    <th height="52" colspan="3" align="center" class="Estilo1" scope="row"><p class="Estilo20">
      <label></label>
      <strong>
      <input type="button" name="Submit" value="Cerrar Ventana" onclick="window.close()" />
      </strong></p>      </th>
  </tr>
</table>

</form>

