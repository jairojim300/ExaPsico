<?
session_start();



$a=$_SESSION['$cedula231'];



if($a=="psicometria")
			
			{
			
			$a1="Machala";
			}
				
			
if ( $a=="psicowilson" or $a=="PSICOWILSON"){
			
			
			$a1="Wilson";
			
			
			}
			
if ( $a=="psicofreddy" or $a=="PSICOFREDDY"){
			
			
			$a1="Freddy";
			
			
			}
			
if ( $a=="psicokatty"){
			
			
			$a1="Katty";
			
			
			}
			
			
else if($a=="psicokattya"){
			
			
			$a1="Kattya";
			
			}




print $a1;


?> 

<?php require_once("../libreria/dac.php"); error_reporting(0);?>


<script>
function window.onbeforeprint(){
noImprimir.style.visibility = 'hidden';
noImprimir.style.position = 'absolute';
}
function window.onafterprint(){
noImprimir.style.visibility = 'visible';
noImprimir.style.position = 'relative';
}</script> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Examen - Rodar S.A.</title>
<style type="text/css">
<!--
.Estilo2 {font-family: "Times New Roman", Times, serif}
.Estilo4 {font-size: 11px}
.Estilo8 {font-size: 9px; font-style: italic; }
.Estilo9 {
	color: #FF0000;
	font-size: 11px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.Estilo11 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.Estilo12 {
	color: #FF0000;
	font-size: 11px;
	font-weight: bold;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.Estilo15 {font-size: 11px; font-family: Geneva, Arial, Helvetica, sans-serif; }
.Estilo16 {font-family: Geneva, Arial, Helvetica, sans-serif}
.Estilo17 {color: #000000}
.Estilo18 {font-size: 12px}
-->
</style>
</head>
<script type="text/javascript" src="libreria/libreria.js"></script>
<body>
<form id="form1" name="form1" method="post" action="" >

	
	<table width="575" height="252" border="1" align="center" cellpadding="2">
  <tr>
    <th width="653" height="123" scope="col"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="324" height="38">
      <param name="BGCOLOR" value="" />
      <param name="movie" value="../imagen/examen.swf" />
      <param name="quality" value="high" />
      <embed src="../imagen/examen.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="324" height="38"></embed>
    </object>
      <table width="104%" height="135" align="left" bordercolor="#FFFFFF" bgcolor="#FFFFFF" >
        <? 					
   
   if(isset($_REQUEST['btnbuscar']))
 		{
   		 	
			$cedula=$_POST["txtcedula"];
			$_SESSION['$cedula']=$cedula;
			$aa=$_POST['textcert'];
			
			$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
       		mysql_select_db("rodar2", $coneccion) or die(mysql_error());
       		$consulta123456=mysql_query("select * from factura2 where num_cedu='$cedula' and estado='impresa' and fecha = (select max(fecha) from factura2 where num_cedu='$cedula')");
       		mysql_close($coneccion);
			
			$fila123456 = mysql_fetch_array($consulta123456);
			
			
			$buscar1 = consultar("select * from examen where nu_cedula='$cedula' and certificado='$aa'");
					
					$yaexiste1 = mysql_num_rows($buscar1);
					
			$buscar2 = consultar("select * from alum_renov where nu_cedula='$cedula'");
					
					$yaexiste2 = mysql_num_rows($buscar2);
					
			$aa=$_POST['textcert'];
			$buscar3 = consultar("select * from examen where certificado='$aa' and fecha > '2018-01-01'");
					$yaexiste3 = mysql_num_rows($buscar3);
					
					
					
					
					if($yaexiste1==1)
					{
							echo "<script LANGUAGE=\"JavaScript\">
								alert (\"Alumno ya se realizo el examen.\");
								</script>";
								
			/*echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";	*/
								
					}
					
					if($yaexiste2==0)
					{
							echo "<script LANGUAGE=\"JavaScript\">
								alert (\"Alumno NO REGISTRADO.\");
								</script>";
								
			/*echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";	*/
								
					}
					
					
					
					
					
		if($yaexiste3==1)
					{
							echo "<script LANGUAGE=\"JavaScript\">
								alert (\"# Certificado ya fue ingresado.\");window.close();
								</script>";
								
			/*echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";*/	
								
					}	
	
					

					
   }
   
   ?>
   
   
   <? 
    $cedula=$_POST["txtcedula"];
	$busqueda = consultar("select * from alum_renov where nu_cedula='$cedula'");
    $fila = mysql_fetch_array($busqueda);




?>
        <tr>
          <th width="10%" height="26" align="left" scope="row"><div align="right"><span class="Estilo15">Cedula:</span></div></th>
          <td><div align="left" class="Estilo15"><strong>
            <strong>
            <input name="txtcedula" type="text" id="txtcedula"  onkeypress = "return pulsar23(event)" value="<?=$fila["nu_cedula"]?>" size="15" maxlength="10"  />
            </strong></strong>
              <label></label>
          </div></td>
          <td><span class="Estilo15"><strong>
            <input type="submit" name="btnbuscar" id="btnbuscar" onClick="javascript:return  valida_envia2323()"  value="Buscar" />
          </strong></span></td>
          <td colspan="3"><div align="right"># Certificado</div></td>
          <td><input name="textcert" type="text" id="textcert" value="<?=$_POST['textcert']?>" size="9" maxlength="9" /></td>
        </tr>
        <tr>
          <th width="10%" height="24" align="left" scope="row"><div align="right"><span class="Estilo15">Nombres:</span></div></th>
          <td colspan="6"><div align="left" class="Estilo15">
              <input name="txtnom" type="text" class="Estilo15" id="txtnom" value=" <?=$fila["nom_per"].' '.$fila["ape_per"]?>" size="71" maxlength="120" readonly/>
          </div></td>
        </tr>
        <tr>
          <th height="24" align="left" scope="row"><div align="right"><span class="Estilo15"><strong>Edad:</strong></span></div></th>
          <td width="10%"><div align="left" class="Estilo15">
              <input name="txtedad" type="text" class="Estilo15" id="txtedad" value="<?=$fila["edad"]?>" size="12" readonly />
          </div></td>
          <td width="16%"><div align="right" class="Estilo15"><strong>Telefono</strong></div></td>
          <td width="11%"><span class="Estilo15"><strong>
            <input name="txttel" type="text" class="Estilo15" id="txttel" value="<?=$fila["tele"]?>" size="12" readonly />
          </strong></span></td>
          <td width="9%"><div align="right" class="Estilo15"><strong>Tipo</strong>:</div></td>
          <td width="44" colspan="2"><div align="left" class="Estilo11"><span class="Estilo15">
            <input name="securso" type="text" class="Estilo15" id="securso" size="9" value="<?=$fila123456["tipo_examen"]?>"/>
          </span></div></td>
        </tr>
        <tr>
          <th height="24" align="left" scope="row"><div align="right"><span class="Estilo15">Fecha:</span></div></th>
          <td><div align="left" class="Estilo15">
              <input name="txtlog" type="text" class="Estilo15" id="txtlog" value="<?=$fila123456["fecha"]?>" size="12" readonly />
          </div></td>
          <td><div align="right"><span class="Estilo15"># Factura:</span></div></td>
          <td><span class="Estilo15"><span class="Estilo15">
            <input name="txtfact" type="text" class="Estilo15" id="txtfact" size="9" value="<?=$fila123456["num_fact"]?>"/>
          </span></span></td>
		  
		 
		  
          <td><div align="right" class="Estilo12">Lentes</div></td>
          <td colspan="2"><select name="selentes" class="Estilo15" id="select">
            <option>Elegir</option>
            <option value="1">SI</option>
            <option value="2">NO</option>
                    </select></td>
        </tr>
        <tr>
          <th height="23" colspan="7" align="left" scope="row"><span class="Estilo9"><span class="Estilo17">         Obs :</span> 
              <label>
              <input name="observa" type="text" class="Estilo11" id="observa" size="50" />
              </label>
             </span></th>
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
</script>      </th>
  </tr>
  
  <tr>
    <th height="65" scope="row"><table width="117" height="33" align="center">
      <tr>
        <td valign="middle" scope="col"><table width="110">
          <tr>
            <th width="102" scope="col"><div align="center"><span class="Estilo15">
              <input name="save" type="submit" class="Estilo11" onClick="javascript:return  valida_envia()" id="save"   value="Guardar" />
              </span></div>              <div align="center"></div></th>
            </tr>
          
        </table></td>
        </tr>
    </table>
      <label>      </label></th>
    </tr>
</table>

    <SCRIPT LANGUAGE="JavaScript">
marcado=false;
marcado2=false;
marcado1=false;



function valida_envia(){
	

   //valido lentes
   if (document.form1.selentes.selectedIndex==0){
       alert("Debe seleccionar LENTES SI o NO.")
       document.form1.selentes.focus()
       return false;
    }
	
	if (document.form1.securso.selectedIndex==0){
       alert("Debe seleccionar EX-ALUMNO o NO.")
       document.form1.selentes.focus()
       return false;
    }

  
    if (document.form1.textcert.value.length==0){
       alert("Favor Escribir #CERTIFICADO")
       document.form1.textcert.focus()
       return false;
    } 
	
	if (document.form1.txtfact.value.length==0){
       alert("Favor Escribir #FACTURA")
       document.form1.txtfact.focus()
       return false;
    } 


    document.form1.submit(); 
	//window.print();
	//window.close()

} 





</script>


<SCRIPT LANGUAGE="JavaScript">
function valida_envia23(){

window.open ('blob.php')

} 

</script>
    <?php
	
			if(isset($_REQUEST['save']))
 		{
 	     
			
			
			/*$mon_izq=$_POST['selmoiz'];
			$mon_der=$_POST['selmodere'];
			$psico1=$_POST['psico1'];
			$psico2=$_POST['psico2'];
			$psico3=$_POST['psico3'];
			$rdbpsico2=$_POST['rdbpsico2'];
			$psico4=$_POST['psico4'];
			$psico5=$_POST['psico5'];
			$psico6=$_POST['psico6'];
			$psico7=$_POST['psico7'];
			$psico8=$_POST['psico8'];
			$psico9=$_POST['psico9'];
			$psico10=$_POST['psico10'];
			$segundos=$_POST['textsegun'];
			$psico11=$_POST['psico11'];
			$psico12=$_POST['psico12'];
			$psico13=$_POST['psico13'];
			$psico14=$_POST['psico14'];
			$psico15=$_POST['psico15'];
			$psico16=$_POST['psico16'];
			$psico17=$_POST['psico17'];
			$psico18=$_POST['psico18'];
			$rdbpsico3=$_POST['rdbpsico3'];
			$rdbpsico4=$_POST['rdbpsico4'];
			$palanca=$_POST['palanca'];
			$reflejo=$_POST['reflejo'];
			$puntero=$_POST['puntero'];
			$auditivo=$_POST['auditivo'];			
			$forialetra=$_POST['forialetra'];
			$forinu=$_POST['forinu'];*/
			
			$cedula=$_POST['txtcedula'];
			$textcert=$_POST['textcert']; 
			$textfact=$_POST['txtfact']; 	
			$selentes=$_POST['selentes']; 
			$securso=$_POST['securso']; 
			$observa=$_POST['observa']; 
			$txtlog=$_POST['txtlog']; 
			
			
			$buscar = consultar("select * from examen where nu_cedula='$cedula' and certificado='$textcert'");
			$yaexiste = mysql_num_rows($buscar);							
				
			if($yaexiste==1)
			{
					echo "<script LANGUAGE=\"JavaScript\">
							alert (\"ALUMNO YA SE REALIZO EL EXAMEN.\");
						</script>";
						 
					/*echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";*/						
		}	
						
		else 
		
		{
							
		$registrar="insert into examen values('30', '30', 'checkbox', 'checkbox', 'checkbox', '1', 'checkbox', '$psico5', 'checkbox', 'checkbox', 'checkbox', 'checkbox', 'checkbox', '5', 'checkbox', 'checkbox', 'checkbox', 'checkbox', 'checkbox', 'checkbox', 'checkbox', 'checkbox', 'radiobutton', 'radiobutton', 'SI', 'SI', 'SI', 'SI', '$textcert', '$textfact', '$cedula', '$selentes', '$observa', '$txtlog', 'examen', 'Machala', '$securso', '$a')";
		
				save($registrar);
				
		$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
    	mysql_select_db("rodar2", $coneccion) or die(mysql_error());
   		$consulta55=mysql_query("update factura2 set num_cert='$textcert' where num_cedu='$cedula' and num_fact='$textfact'");
     	mysql_close($coneccion);		
					
			
				/*echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";*/
			
	}				
		} 
		 
	?>
	


<SCRIPT LANGUAGE="JavaScript">


function valida_envia2323(){


	
	
   if (document.form1.txtcedula.value.length==0){
       alert("Favor escribir Cedula")
       document.form1.txtcedula.focus()
       return false;
    } 
	
	
	   if (document.form1.textcert.value.length==0){
       alert("Favor Escribir #CERTIFICADO")
       document.form1.textcert.focus()
       return false;
    } 



	var3 = parseInt(document.form1.textcert.value, 10);
	if ( isNaN(var3) ) {   
        alert("Dato incorrecto! # CERTIFICADO debe ser entero")   ;
        return false  ; 

   }



    document.form1.submit(); 
	
	}
	
	</script>


	
</form>
</body>
</html>

