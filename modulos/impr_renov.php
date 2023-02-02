<?
session_start();
?><head>
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

</head>


<?php //require_once("../libreria/dac.php");?>




<script type="text/javascript" src="../librerias/libreria.js"></script>



 


<style type="text/css">
<!--
body {
	background-image: url(../imagen/fondo.jpg);
	background-repeat: repeat-x;
}
.Estilo1 {font-weight: bold}
.Estilo7 {font-size: 11px; font-family: Geneva, Arial, Helvetica, sans-serif; color: #003333; }
.Estilo11 {font-weight: bold; font-size: 10px; font-family: Geneva, Arial, Helvetica, sans-serif; color: #333333; }
.Estilo12 {font-size: 10px; font-family: Geneva, Arial, Helvetica, sans-serif; color: #333333; }
.Estilo13 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
-->
</style>




<form name="form1" method="post" action="" >
  <table width="37%" align="center" bordercolor="#000000" bgcolor="#FFFFFF">
  <tr>
    <th colspan="2" scope="row"><p class="Estilo13">
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="185" height="32">
        <param name="SRC" value="/rodar/imagen/imprimir certificado.swf" />
        <param name="BGCOLOR" value="" />
        <param name="movie" value="../imagen/imprimir certificado.swf" />
        <param name="quality" value="high" />
        <embed src="/rodar/imagen/imprimir certificado.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="185" height="32"></embed>
      </object>
    </p>      </th>
  </tr>
  
  
  <?
     
   if(isset($_REQUEST['btnbuscar']))
 		{
   		 	
			$cedula=$_POST["txtcedula"];
		   	$buscar1 = consultar("select * from examen where nu_cedula='$cedula'");
					
					$yaexiste1 = mysql_num_rows($buscar1);
					
					$buscar2 = consultar("select * from alum_renov where nu_cedula='$cedula'");
					$yaexiste2 = mysql_num_rows($buscar2);
					
					
				
					
					if($yaexiste2==0)
					{
							echo "<script LANGUAGE=\"JavaScript\">
								alert (\"Alumno NO REGISTRADO.\");
								</script>";
								
							
								
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
  
  
  
  
  
  
	

	
	
  <tr>
    <th width="40%" align="left" scope="row"><div align="center" class="Estilo7"> Cedula</div></th>
    <td><strong>
      <input name="txtcedula" type="text" id="txtcedula" value="<?=$_SESSION['$cedula']?>" size="11" />
	  
	  	<? 

    $cedula=$_POST["txtcedula"];
	$busqueda = consultar("select * from alum_renov where nu_cedula='$cedula'");
    $fila = mysql_fetch_array($busqueda);


?>
      <input type="submit" name="btnbuscar" id="btnbuscar" value="Buscar" />
      <input type="hidden" name="hiddenField" id="hiddenField" />
    </strong></td>
    </tr>
  
  <tr>
    <th height="21" colspan="2" align="left" scope="row">&nbsp;</th>
    </tr>
  <tr>
    <th width="40%" align="left" scope="row"><div align="right" class="Estilo7">Nombre:</div></th>
    <td class="Estilo1"><input name="txtnom" type="text" id="txtnom" value=" <?=$fila["nom_per"].' '.$fila["ape_per"]?>" size="40" readonly="readonly"  /></td>
  </tr>
  <tr>
    <th height="25" align="left" scope="row"><div align="right" class="Estilo7">Fecha:</div></th>
    <td class="Estilo1"><label>
    <input name="txt_fecha" type="text" id="txt_fecha" value="<?=$fila["fecha"]?>" size="8" readonly="readonly" />
    </label></td>
  </tr>
  <? 
   $cedula=$_POST["txtcedula"];
	$busqueda = consultar("select * from examen where nu_cedula='$cedula'");
    $fila1 = mysql_fetch_array($busqueda);
  ?>
  <tr>
    <th align="left" class="Estilo1" scope="row"><div align="right" class="Estilo7">Observ.:</div></th>
    <td class="Estilo1"><input name="txtnom2" type="text" id="txtnom2" value="<?=$fila1["observa"]?>" size="38" readonly="readonly"></td>
  </tr>
   
  
  <tr>
    <th align="left" scope="row"><div align="right" class="Estilo11">Visual</div></th>
    <td class="Estilo11"><input name="txt_vision" type="text" id="txt_vision" value=" <?=$fila1["aguvis_iz"].' - '.$fila1["aguvis_der"]?>" size="5" readonly="readonly" /> 
      <strong>      Auditivo</strong>   <input name="txt_vision2" type="text" id="txt_vision2" value="<?=$fila1["auditivo"]?>" size="3" readonly="readonly" /></td>
  </tr>
  <tr>
    <th align="left" class="Estilo1" scope="row"><div align="right" class="Estilo12">Puntero</div></th>
    <td class="Estilo11"><input name="txt_vision22" type="text" id="txt_vision22" value="<?=$fila1["puntero"]?>" size="3" readonly="readonly" />      
          <strong>  </strong>  <strong> </strong>Palancas
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
    <th align="left" class="Estilo1" scope="row"><div align="right" class="Estilo12">Reflejos</div></th>
    <td class="Estilo11"><input name="txt_vision24" type="text" id="txt_vision24" value="<?=$fila1["reflejo"]?>" size="3" readonly="readonly" /> 
            <strong>  </strong>   <strong> </strong> Lentes 
      <input name="txt_vision25" type="text" id="txt_vision25" value="<?=$resultado1?>" size="3" readonly="readonly" /></td>
  </tr>
  <tr>
    <th colspan="2" align="left" class="Estilo11" scope="row"><div align="center"># Cert. 
        <input name="txt_vision252" type="text" id="txt_vision252" value="<?=$fila1["certificado"]?>" size="3" readonly="readonly" />
    </div>
      </p></th>
    </tr>
	  <tr>
    <th align="left" class="Estilo1" scope="row"><div align="right"></div></th>
    <td class="Estilo1"></p></td>
	</tr>
  <tr>
    <th colspan="2" align="center" class="Estilo1" scope="row"><p>
      <label></label><a href='modulos/impr_certi_renova.php?v=<?=$fila["nu_cedula"]?>' target="_self" >
         CONFIRMAR</a></p>      </th>
  </tr>
</table>

  </form>

