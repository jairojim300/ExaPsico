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

	
	<table width="847" height="993" border="1" align="center" cellpadding="2">
  <tr>
    <th width="696" height="123" scope="col"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="324" height="38">
      <param name="BGCOLOR" value="" />
      <param name="movie" value="../imagen/examen.swf" />
      <param name="quality" value="high" />
      <embed src="../imagen/examen.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="324" height="38"></embed>
    </object>
      <table width="62%" height="135" align="left" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
        <? 					
   
   if(isset($_REQUEST['btnbuscar']))
 		{
   		 	
			$cedula=$_POST["txtcedula"];
			$_SESSION['$cedula']=$cedula;
			$aa=$_POST['textcert'];
			
			$buscar1 = consultar("select * from examen where nu_cedula='$cedula' and certificado='$aa'");
					
					$yaexiste1 = mysql_num_rows($buscar1);
					
			$buscar2 = consultar("select * from alum_renov where nu_cedula='$cedula'");
					
					$yaexiste2 = mysql_num_rows($buscar2);
					
			$aa=$_POST['textcert'];
			$buscar3 = consultar("select * from examen where certificado='$aa'");
					$yaexiste3 = mysql_num_rows($buscar3);
					
					
					
					
					if($yaexiste1==1)
					{
							echo "<script LANGUAGE=\"JavaScript\">
								alert (\"Alumno ya se realizo el examen.\");
								</script>";
								
			echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";	
								
					}
					
					if($yaexiste2==0)
					{
							echo "<script LANGUAGE=\"JavaScript\">
								alert (\"Alumno NO REGISTRADO.\");
								</script>";
								
			echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";	
								
					}
					
					
					
					
					
		if($yaexiste3==1)
					{
							echo "<script LANGUAGE=\"JavaScript\">
								alert (\"# Certificado ya fue ingresado.\");window.close();
								</script>";
								
			echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";	
								
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
          <td width="44" colspan="2"><div align="left" class="Estilo11">
            <select name="securso" class="Estilo15" id="select4">
              <option>Elegir</option>
              <option value="Renovacion">Renovacion</option>
              <option value="Ex-alumno">Ex-alumno</option>
			  <option value="Extra">Extra</option>
            </select>
          </div></td>
        </tr>
        <tr>
          <th height="24" align="left" scope="row"><div align="right"><span class="Estilo15">Fecha:</span></div></th>
          <td><div align="left" class="Estilo15">
              <input name="txtlog" type="text" class="Estilo15" id="txtlog" value="<?=$fila["fecha"]?>" size="12" readonly />
          </div></td>
          <td><div align="right"><span class="Estilo15"># Factura:</span></div></td>
          <td><span class="Estilo15"><span class="Estilo15">
            <input name="txtfact" type="text" class="Estilo15" id="txtfact" size="9" />
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
</script>

	  
	  
	  
	  
	  
      <table width="258" height="156">
        <tr>
          <th width="148" scope="col"><div align="center">
            <blockquote>
              <blockquote>
                <p><label>
      <img src="/rodar/modulos/verblob.php?v=<?=$fila["nu_cedula"]?>&t=2" alt="Sin Foto" width="110" height="110"  /></label>
                </p>
              </blockquote>
            </blockquote>
          </div></th>
        </tr>
        
        <tr>
          <th height="16" scope="col"><span class="Estilo9"><a href="blob.php?v=<?=$fila["nu_cedula"]?>" target="_blank">Subir FOTO</a></span></th>
        </tr>
      </table>
      </th>
  </tr>
  <tr>
    <th height="94" scope="row"><div align="left"></div>
    <table width="623" height="88" align="left">
      <tr>
        <th height="21" colspan="6" scope="col"><div align="left"><strong>Agudeza Visual </strong></div></th>
        </tr>
      <tr>
        <th width="77" height="59" scope="col"><span class="Estilo4">Monocular Izquierdo</span></th>
        <th width="116" scope="col"><span class="Estilo4">
          <label>
          <select name="selmoiz" class="Estilo2" id="selmoiz">
            <option>Elegir</option>
            <option value="200">1 (&quot;ZN&quot;)</option>
            <option value="100">2 (&quot;RKS&quot;)</option>
            <option value="70">3 (&quot;HCDV&quot;)</option>
            <option value="50">4 (&quot;ZROD&quot;)</option>
            <option value="40">5 (&quot;KHSC&quot;)</option>
            <option value="30">6 (&quot;ONRZV&quot;)</option>
            <option value="20">7 (&quot;SDCHN&quot;)</option>
              </select>
          </label>
        </span></th>
        <th width="83" scope="col"><span class="Estilo4">Binocular</span></th>
        <th width="116" scope="col"><span class="Estilo4">
          <select name="select1" id="select1">
            <option>Elegir</option>
            <option value="1">1 (&quot;RO&quot;)</option>
            <option value="2">2 (&quot;HNC&quot;)</option>
            <option value="3">3 (&quot;SKZO&quot;)</option>
            <option value="4">4 (&quot;NSCH&quot;)</option>
            <option value="5">5 (&quot;OZNR&quot;)</option>
            <option value="6">6 (&quot;DKHCS&quot;)</option>
            <option value="7">7 (&quot;VRZKO&quot;)</option>
          </select>
        </span></th>
        <th width="77" scope="col"><span class="Estilo4">Monocular Derecho </span></th>
        <th width="126" scope="col"><span class="Estilo4">
          <select name="selmodere" id="selmodere">
            <option>Elegir</option>
            <option value="200">1 (&quot;HK&quot;)</option>
            <option value="100">2 (&quot;ZOD&quot;)</option>
            <option value="70">3 (&quot;RNDS&quot;)</option>
            <option value="50">4 (&quot;VZKN&quot;)</option>
            <option value="40">5 (&quot;DNVC&quot;)</option>
            <option value="30">6 (&quot;KDSON&quot;)</option>
            <option value="20">7 (&quot;HSNRD&quot;)</option>
          </select>
        </span></th>
        </tr>
	  
	  <?php
		
		
 	        $izquierdo=$_POST['selmoiz'];
			
			if($izquierdo=="2"){
			
			$izquierdo = "30";
			
			}
			
	  ?>
    </table>      </th>
  </tr>
  <tr>
    <th scope="row"><div align="left">
      <strong>Visi&oacute;n de Profundidad</strong>
      <table width="625" height="58" align="center">
        <tr bordercolor="#00FF66">
          <th scope="col"><div align="center"><img src="../imagen/Psico1.jpg" width="50" height="50" />
                  <input name="psico1" type="checkbox" id="psico1" value="checkbox" checked="checked" />
          </div></th>
          <th scope="col"><div align="center"><img src="/rodar/imagen/Psico2.jpg" width="50" height="50" />
                  <input name="psico2" type="checkbox" id="psico2" value="checkbox" checked="checked" />
          </div></th>
          <th scope="col"><div align="center"><img src="/rodar/imagen/Psico3.jpg" width="50" height="50" />
                  <input name="psico3" type="checkbox" id="psico3" value="checkbox" checked="checked" />
          </div></th>
        </tr>
      </table>
    </div></th>
  </tr>
  <tr>
    <th height="114" scope="row"><div align="left">
      Discriminacion Colores 
      <table width="633" height="36" align="center" cellpadding="1">
        <tr>
          <th width="131" height="30" scope="col"><div align="center">
            A
            <table border="1" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="20" height="20" bgcolor="#FFFF00">&nbsp;</td>
                  <td width="20" bgcolor="#00FF00">&nbsp;</td>
                  <td width="20" bgcolor="#FF0000">&nbsp;</td>
                  <td width="20" bgcolor="#00FF00">&nbsp;</td>
                </tr>
                  </table> 
            <label></label>
            <label>
            <input name="rdbpsico2" type="radio" value="1" onClick="marcado=true" />
            </label>
          </div>
          <label></label>
             <div align="center"></div></th>
          <th width="130" scope="col"><div align="center">
            B
            <table border="1" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="20" height="20" bgcolor="#FF0000">&nbsp;</td>
                <td width="20" bgcolor="#FFFF00">&nbsp;</td>
                <td width="20" bgcolor="#FF0000">&nbsp;</td>
                <td width="20" bgcolor="#00FF00">&nbsp;</td>
              </tr>
            </table>
            <label></label>
            <label>
            <input name="rdbpsico2" type="radio" value="1" onClick="marcado=true" />
            </label>
          </div></th>
          <th width="131" scope="col"><div align="center">
            C
            <table border="1" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="20" height="20" bgcolor="#00FF00">&nbsp;</td>
                  <td width="20" bgcolor="#FFFF00">&nbsp;</td>
                  <td width="20" bgcolor="#FFFF00">&nbsp;</td>
                  <td width="20" bgcolor="#FF0000">&nbsp;</td>
                </tr>
            </table>
            <label>
            <input name="rdbpsico2" type="radio" value="1" onClick="marcado=true" />
            </label>
          </div>
          <label></label>
            <div align="center"></div></th>
          <th width="131" scope="col"><div align="center">
            D
            <table border="1" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="20" height="20" bgcolor="#00FF00">&nbsp;</td>
                  <td width="20" bgcolor="#FF0000">&nbsp;</td>
                  <td width="20" bgcolor="#00FF00">&nbsp;</td>
                  <td width="20" bgcolor="#FFFF00">&nbsp;</td>
                </tr>
            </table>
            <label>
            <input name="rdbpsico2" type="radio" value="1" onClick="marcado=true"/>
            </label>
          </div>
          <label></label>
            <div align="center"></div></th>
        </tr>
      </table>
      </div></th>
    </tr>
  <tr>
    <th height="150" scope="row"><div align="left">
      Nictometro.
      <table width="607" align="center">
        <tr>
          <th scope="col"><table width="172" height="117" border="1" align="center">
            <tr>
              <th colspan="3" scope="col"><div align="center"><span class="Estilo8">V. NOCTURNA</span></div></th>
            </tr>
            <tr>
              <th width="50" scope="row"><div align="center"><img src="../imagen/psico4.JPG" alt="a" width="45" height="45" /></div>                <div align="center">
                  <input name="psico4" type="checkbox" id="psico4" value="checkbox" checked="checked" />
                  </div></th>
              <td width="52"><div align="center"><img src="../imagen/psico5.JPG" alt="a" width="45" height="45" /></div>                <div align="center">
                  <input name="psico5" type="checkbox" id="psico5" value="checkbox" />
                  </div></td>
              <td width="88"><div align="center"><img src="../imagen/psico6.JPG" alt="a" width="45" height="45" /></div>                <div align="center">
                  <input name="psico6" type="checkbox" id="psico6" value="checkbox" checked="checked" />
                  </div></td>
            </tr>
            
          </table></th>
          <th scope="col"><div align="center">
            <table width="133" height="117" border="1">
              <tr>
                <th width="135" height="15" scope="col"><div align="center"><span class="Estilo8">V. ENCAND.</span></div></th>
                </tr>
              <tr>
                <th scope="row"><p align="center"><img src="../imagen/psico7.JPG" width="45" height="45" /> 
                    <input name="psico7" type="checkbox" id="psico7" value="checkbox" checked="checked" />
                  </p>                  </th>
                </tr>
            </table>
          </div></th>
          <th scope="col"><div align="center">
            <table width="212" height="117" border="1">
                <tr>
                  <th colspan="3" scope="col"><div align="center"><span class="Estilo8">V. NOCTURNA</span></div></th>
                </tr>
                <tr>
                  <th scope="row"><div align="center"><img src="../imagen/Psico8.jpg" width="45" height="45" /></div>                    <div align="center">
                      <input name="psico8" type="checkbox" id="psico8" value="checkbox" checked="checked" />
                      </div></th>
                  <td><div align="center"><img src="../imagen/Psico9.JPG" width="45" height="45" /></div>                    <div align="center">
                      <input name="psico9" type="checkbox" id="psico9" value="checkbox" checked="checked" />
                      </div></td>
                  <td><div align="center"><img src="../imagen/Psico10.JPG" width="45" height="45" /></div>                    <div align="center">
                      <input name="psico10" type="checkbox" id="psico10" value="checkbox" checked="checked" />
                      </div></td>
                </tr>
                  </table>
          </div></th>
          <th scope="col"><div align="center">
            <table width="72">
                <tr>
                  <th width="64" scope="col">&nbsp;</th>
                </tr>
                <tr>
                  <th scope="row"><input name="textsegun" type="text" id="textsegun" size="3" maxlength="1" /></th>
                </tr>
                <tr>
                  <th scope="row">Segundos</th>
                </tr>
                  </table>
          </div></th>
        </tr>
      </table>
      </div></th>
    </tr>
  <tr>
    <th scope="row"><div align="left">
      Perimetria Ocular
      <table width="614" align="center">
        <tr>
          <th scope="col"><table width="200" border="1">
            <tr>
              <th colspan="3" scope="col"><div align="center" class="Estilo8">DERECHO</div></th>
              </tr>
            <tr>
              <th scope="row"><div align="center">35</div>                <div align="center">
                  <input name="psico11" type="checkbox" id="psico11" value="checkbox" checked="checked" />
                  </div></th>
              <td><div align="center">70</div>                <div align="center">
                  <input name="psico12" type="checkbox" id="psico12" value="checkbox" checked="checked" />
                  </div></td>
              <td><div align="center">55</div>                <div align="center">
                  <input name="psico13" type="checkbox" id="psico13" value="checkbox" checked="checked" />
                  </div></td>
            </tr>
            
          </table></th>
          <th scope="col"><table width="200" border="1">
            <tr>
              <th colspan="2" scope="col"><div align="center" class="Estilo8">NASAL</div></th>
              </tr>
            <tr>
              <th scope="row"><div align="center">D</div>                <div align="center">
                  <input name="psico14" type="checkbox" id="psico14" value="checkbox" checked="checked" />
                  </div></th>
              <td><div align="center">L</div>                <div align="center">
                  <input name="psico15" type="checkbox" id="psico15" value="checkbox" checked="checked" />
                  </div></td>
            </tr>
            
          </table></th>
          <th scope="col"><table width="200" border="1">
            <tr>
              <th colspan="3" scope="col"><div align="center">
                <div align="center" class="Estilo8">IZQUIERDO</div>
              </div></th>
              </tr>
            <tr>
              <th scope="row"><div align="center">35</div>                <div align="center">
                <input name="psico16" type="checkbox" id="psico16" value="checkbox" checked="checked" />
              </div></th>
              <td><div align="center">70</div>                <div align="center">
                <input name="psico17" type="checkbox" id="psico17" value="checkbox" checked="checked" />
              </div></td>
              <td><div align="center">55</div>                <div align="center">
                <input name="psico18" type="checkbox" id="psico18" value="checkbox" checked="checked" />
              </div></td>
            </tr>
            
          </table></th>
        </tr>
      </table>
      </div>
      <div align="center"></div></th>
    </tr>
  <tr>
    <th height="154" scope="row"><div align="left">
          <label></label>
          <table width="750">
            <tr>
              <th width="444" scope="col">
                <div align="center">
                  <input name="txtaudi" type="text" class="Estilo11" id="txtaudi" value="AUDIOMETRIA" size="10" readonly />
                </div></th>
              <th width="294" scope="col">Foria Ocular.</th>
            </tr>
          </table>
          <table width="453" align="left">
        <tr>
          <th width="39" scope="col"><table width="37" align="center">
            <tr>
              <th colspan="4" scope="col">&nbsp;</th>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th colspan="4" scope="row"><div align="right">40</div></th>
              </tr>
            <tr>
              <th colspan="4" scope="row"><div align="right">50</div></th>
              </tr>
          </table></th>
          <th width="278" scope="col"><table width="200" border="1" align="left">
            <tr>
              <th colspan="4" scope="col"><div align="center">OIDO DERECHO </div></th>
              </tr>
            <tr>
              <th scope="row"><div align="center">500</div></th>
              <td><div align="center">1000</div></td>
              <td><div align="center">2000</div></td>
              <td><div align="center">8000</div></td>
            </tr>
            <tr>
              <th scope="row">                <div align="center">
                <input name="rdbpsico3" type="radio" value="radiobutton" onClick="marcado2=true"/>
              </div>                <div align="center">
                  <input name="rdbpsico3" type="radio" value="radiobutton" onClick="marcado2=true" />
              </div></th>
              <td>                <div align="center">
                <input name="rdbpsico3" type="radio" value="radiobutton"  onclick="marcado2=true"/>
              </div>                <div align="center">
                  <input name="rdbpsico3" type="radio" value="radiobutton"  onclick="marcado2=true"/>
              </div></td>
              <td>                <div align="center">
                <input name="rdbpsico3" type="radio" value="radiobutton" onClick="marcado2=true" />
              </div>                <div align="center">
                  <input name="rdbpsico3" type="radio" value="radiobutton" onClick="marcado2=true" />
              </div></td>
              <td>                <div align="center">
                <input name="rdbpsico3" type="radio" value="radiobutton"  onclick="marcado2=true"/>
              </div>                <div align="center">
                  <input name="rdbpsico3" type="radio" value="radiobutton" onClick="marcado2=true" />
              </div></td>
            </tr>
            
          </table></th>
          <th width="278" scope="col"><label></label>
          <table width="200" border="1" align="left">
            <tr>
              <th colspan="4" scope="col"><div align="center">OIDO IZQUIERDO </div></th>
              </tr>
            <tr>
              <th scope="row"><div align="center">500</div></th>
              <td><div align="center">1000</div></td>
              <td><div align="center">2000</div></td>
              <td><div align="center">8000</div></td>
            </tr>
            <tr>
              <th scope="row">
                <div align="center">
                  <input name="rdbpsico4" type="radio" value="radiobutton" onClick="marcado1=true" />
                </div>                <div align="center"></div>                <div align="center">
                  <input name="rdbpsico4" type="radio" value="radiobutton" onClick="marcado1=true" />
                  </div></th>
              <td><div align="center">
                <input name="rdbpsico4" type="radio" value="radiobutton"  onclick="marcado1=true"/>
              </div>                <div align="center">
                  <input name="rdbpsico4" type="radio" value="radiobutton"  onclick="marcado1=true"/>
              </div></td>
              <td><div align="center">
                <input name="rdbpsico4" type="radio" value="radiobutton" onClick="marcado1=true"/>
              </div>                <div align="center">
                  <input name="rdbpsico4" type="radio" value="radiobutton"onclick="marcado1=true" />
              </div></td>
              <td><div align="center">
                <input name="rdbpsico4" type="radio" value="radiobutton" onClick="marcado1=true" />
              </div>                <div align="center">
                  <input name="rdbpsico4" type="radio" value="radiobutton" onClick="marcado1=true" />
              </div></td>
            </tr>
            
            
          </table></th>
        </tr>
      </table>
          <table width="138" align="center">
            <tr>
              <th width="103" scope="col">
                <div align="right">
                  <select name="forialetra" class="Estilo2" id="select2">
                    <option>Elegir</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                  </select>
              </div></th>
              <th width="87" scope="col"><div align="center">
                <select name="forinu" class="Estilo2" id="select3">
                  <option>Elegir</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                </select>
              </div></th>
            </tr>
            <tr>
              <th scope="row"><div align="center"></div></th>
              <td><div align="center"></div></td>
            </tr>
          </table>
          <label></label>
    </div></th>
    </tr>
  <tr>
    <th height="86" scope="row"><table width="643" height="33">
      <tr>
        <th width="135" scope="col"><table width="135">
          <tr>
            <th width="127" scope="col">PALANCA</th>
          </tr>
          <tr>
            <th scope="row"><select name="palanca" class="Estilo2" id="palanca">
              <option value="SI">SI</option>
              <option value="NO">NO</option>
                                                            </select></th>
          </tr>
        </table></th>
        <th width="112" scope="col"><table width="112">
          <tr>
            <th width="104" scope="col">REFLEJO</th>
          </tr>
          <tr>
            <th scope="row"><select name="reflejo" class="Estilo2" id="reflejo">
              <option value="SI">SI</option>
              <option value="NO">NO</option>
                                    </select></th>
          </tr>
        </table></th>
        <th width="136" scope="col"><table width="136">
          <tr>
            <th width="128" scope="col">PUNTERO</th>
          </tr>
          <tr>
            <th scope="row"><select name="puntero" class="Estilo2" id="puntero">
              <option value="SI">SI</option>
              <option value="NO">NO</option>
                        </select></th>
          </tr>
        </table></th>
        <th width="116" scope="col"><table width="116">
          <tr>
            <th width="124" scope="col">AUDITIVO</th>
          </tr>
          <tr>
            <th scope="row"><select name="auditivo" class="Estilo2" id="auditivo">
              <option value="SI">SI</option>
              <option value="NO">NO</option>
                                                </select></th>
          </tr>
        </table></th>
        <th width="200" scope="col"><table width="110">
          <tr>
            <th width="102" scope="col"><div align="center"><span class="Estilo15">
              <input name="save" type="submit" class="Estilo11" onClick="javascript:return  valida_envia()" id="save"   value="Guardar" />
            </span></div>              <div align="center"></div></th>
          </tr>
          
        </table></th>
      </tr>
    </table>
      <label>
      <div align="center"></div>
      </label></th>
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
   //valido el monocular izquierdo
    if (document.form1.selmoiz.selectedIndex==0){
       alert("Debe seleccionar MONOCULAR IZQUIERDO.")
       document.form1.selmoiz.focus()
       return false;
    } 


   //valido el monocular central
    if (document.form1.select1.selectedIndex==0){
       alert("Debe seleccionar BINOCULAR.")
       document.form1.select1.focus()
       return false;
    } 

   //valido el monocular derecho
    if (document.form1.selmodere.selectedIndex==0){
       alert("Debe seleccionar MONOCULAR DERECHO.")
       document.form1.selmodere.focus()
       return false;
    } 


    if(!marcado){
    alert("Por favor, marque DISCRIMINACION DE COLORES");
    //document.form1.rdbpsico2.focus()
	return false;
    }
    


    //valido el textcert
	   if (document.form1.textsegun.value.length==0){
       alert("Favor escribir Los SEGUNDOS")
       document.form1.textsegun.focus()
       return false;
    } 
	


   if(!marcado2){
    alert("Por favor, marque AUDIOMETRIA DERECHA");
   document.form1.txtaudi.focus()
	return false;
    }
    

   if(!marcado1){
    alert("Por favor, marque AUDIOMETRIA IZQUIERDA");
    document.form1.txtaudi.focus()
	return false;
    }
    

 if (document.form1.forialetra.selectedIndex==0){
       alert("Debe seleccionar Perimetria (Letra).")
       document.form1.forialetra.focus()
       return false;
    } 


 if (document.form1.forinu.selectedIndex==0){
       alert("Debe seleccionar Perimetria (Numero).")
       document.form1.forinu.focus()
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
 	     
			
			$cedula=$_POST['txtcedula'];
			$mon_izq=$_POST['selmoiz'];
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
			$textcert=$_POST['textcert'];
			$textfact=$_POST['txtfact'];
			
			$selentes=$_POST['selentes'];
			$securso=$_POST['securso'];
			$observa=$_POST['observa'];
			$txtlog=$_POST['txtlog'];
			
			$forialetra=$_POST['forialetra'];
			$forinu=$_POST['forinu'];
			
			
			$buscar = consultar("select * from examen where nu_cedula='$cedula' and certificado='$textcert'");
			$yaexiste = mysql_num_rows($buscar);
			
			
							
				
			if($yaexiste==1)
			{
					echo "<script LANGUAGE=\"JavaScript\">
							alert (\"ALUMNO YA SE REALIZO EL EXAMEN.\");
						</script>";
						 
					echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";	
					
		}	
						
		ELSE 
		
		{
							
		$registrar="insert into examen values('$mon_izq', '$mon_der', '$psico1', '$psico2', '$psico3', '$rdbpsico2', '$psico4', '$psico5', '$psico6', '$psico7', '$psico8', '$psico9', '$psico10', '$segundos', '$psico11', '$psico12', '$psico13', '$psico14', '$psico15', '$psico16', '$psico17', '$psico18', '$rdbpsico3', '$rdbpsico4', '$palanca', '$reflejo', '$puntero', '$auditivo', '$textcert', '$textfact', '$cedula', '$selentes', '$observa', date(NOW()), 'examen', 'Machala', '$securso', '$a1')";
		
				save($registrar);
				
		$coneccion=mysql_connect("localhost", "root", "rodar0606") or die(mysql_error());
    	mysql_select_db("rodar2", $coneccion) or die(mysql_error());
   		$consulta55=mysql_query("update factura2 set num_cert='$textcert' where num_cedu='$cedula' and num_fact='$textfact'");
     	mysql_close($coneccion);		
					
			
				echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";
			
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
