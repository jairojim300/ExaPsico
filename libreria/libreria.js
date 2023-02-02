// captura la fecha del sistema
function fecha()
{
	var d=new Date();
	var monthname=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio",
							"Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	//Ensure correct for language. English is "January 1, 2004"
	var TODAY = d.getDate() + " de "  + monthname[d.getMonth()] + " de " +  d.getFullYear();

	return TODAY;
}



//valida entero
function valida_entero(cadena)
{
	
	var2 = parseInt(formulario.txtedad.value, 10);
	if ( isNaN(var2) ) {   
        alert("Dato incorrecto! Edad debe ser entero")   ;
        return false  ; 

    } else  if (var2 < 1 || var2 > 80) {   
        alert("Edad entre 1 - 80 anios")   ;
        return false   ;
	}
	return true;
}


function valida_notas(formulario)
{
	
	primero = parseInt(formulario.txtparcial.value, 10);
	segundo = parseInt(formulario.txtexamen.value, 10);
	tercero = parseInt(formulario.txtasist.value, 10);
	
	
	if ((isNaN(primero))||(isNaN(segundo))) 
	{   
        alert("Dato incorrecto! nota debe ser entero")   ;
        return false  ; 

    } 
	else  
	{
		if (primero < 1 || primero > 7)  
		{   
        alert("Notas incorrectas")   ;
        return false   ;
		}
	}
	return true;
}

function validar_notas(form)
{
	if(valida_notas(form.txtparcial))
	{
			confirmacion(form);
	}
}


//valida cadenas
function valida_string(cadena)
{
	var expr1=/^[a-zA-Z·ÈÌÛ˙¡…Õ”⁄Ò—\s]{2,30}$/; //expresion regular
	if (!expr1.test(cadena.value))
	{
		alert("Tipo de dato incorrecto! Cadena");
		cadena.focus();
		return false;
	}	
	return true;
}

//valida e-mail
function valida_mail(cadena)
{
	var re  = /^([a-zA-Z0-9_.-])+@+([a-zA-Z0-9-])+.+([a-zA-Z0-9]{2,4})+$/; 
	if (!re.test(cadena.value)) { 
    	alert ("DirecciÛn de email inv·lida"); 
		cadena.focus();
		return false; 
	}
	return true; 
}	

//validaciones para campos de formulario
function requerido(campo)  //verifica si el campo es requerido
{
	if (campo.value == "")	
	{
		alert ("Hay Campos Vacios! No se puede enviar");
		campo.focus();
		return false;
	}
	return true;
}

function confirmacion(form) //pide confirmaciÛn del usuario
{
	//op= confirm("øEsta seguro de guardar los datos?");
		  
	//if (op==true)
	//{
		form.submit(); //enviar el formulario
		return true;
	//}
	//return false;
}

function validar_form1(form) //verifica los campos del formulario
{
	if (requerido(form.txtnombre))
		{
			if(valida_string(form.txtnombre))
			confirmacion(form);
		}	
	return false;
}


//valida seguridad
function seguridad(cadena)
{
	var expr1=/^[a-z\d_]{1,28}$/i; //expresion regular
	if (!expr1.test(cadena.value))
	{
		alert("Login incorrecto!");
		cadena.focus();
		return false;
	}	
	return true;
}

//VALIDAR CAMPOS INICIAR SESION
function validar_formulario(formulario) //verifica los campos del formulario
{
	if (requerido(formulario.txtlogin)&&requerido(formulario.txtpass))
		{
			if (valida_string(formulario.txtlogin))
			{
				confirmacion(formulario);
			}
		
		}	
	return false;
}


function validar_registro(formulario) //verifica los campos del formulario
{
	if (requerido(formulario.txtcedula)&&requerido(formulario.txtnombre)&&requerido(formulario.txtapellido)&&requerido(formulario.txtedad)&&requerido(formulario.cmbSexo)&&requerido(formulario.txtdireccion)&&requerido(formulario.txt_fecha))
		{
			if (seguridad(formulario.txtcedula))
			{
				confirmacion(formulario);
			}				
		}	
	return false;
}


function validar_registro1(formulario) //verifica los campos del formulario
{
	if (requerido(formulario.txt_fecha)&&requerido(formulario.texfact)&&requerido(formulario.texvalor)&&requerido(formulario.texdesc))
		{
				confirmacion(formulario);
			}
	return false;
}


function validar_registropsico(form1) //verifica los campos del formulario
{
	if (requerido(form1.textsegun)&&requerido(form1.textcert))
		{
			
				confirmacion(form1);
							
		}	
	return false;
}




//VALIDAR CAMPOS ASIGNATURA
function validar_formulario_asignatura(form1) //verifica los campos del formulario
{
	if (requerido(form1.txtnom_asi)&&requerido(form1.txtdur_asi)&&requerido(form1.lstplan_estu)&&requerido(form1.lstnivel))
		{
				confirmacion(form1);
		
		}	
	return false;
}

//VALIDAR CAMPOS CARRERA
function validar_formulario_carrera(form1) //verifica los campos del formulario
{
	if (requerido(form1.txtnom_car)&&requerido(form1.txtdur_car))
		{
				confirmacion(form1);
		
		}	
	return false;
}


//VALIDAR CAMPOS CURSO
function validar_formulario_curso(form1) //verifica los campos del formulario
{
	if (requerido(form1.txtparalelo)&&requerido(form1.lstperiodo)&&requerido(form1.lstcod_carre)&&requerido(form1.lstnivel))
		{
				confirmacion(form1);
		
		}	
	return false;
}


//VALIDAR distribucion
function validar_formulario_distribucion(form1) //verifica los campos del formulario
{
	if (requerido(form1.lstcod_asi)&&requerido(form1.lstcod_doc)&&requerido(form1.lstcurso))
		{
				confirmacion(form1);
		
		}	
	return false;
}



//VALIDAR docentes
function validar_formulario_docentes(form1) //verifica los campos del formulario
{
	if (requerido(form1.txtced_doc)&&requerido(form1.txtnom_doc)&&requerido(form1.txtape_doc)&&requerido(form1.txtdir_doc)&&requerido(form1.txttel_doc)&&requerido(form1.txttit_doc)&&requerido(form1.txtfec_doc))
		{
			if(valida_string(form1.txtnom_doc)&&valida_string(form1.txtape_doc)&&valida_string(form1.txttit_doc))
			{
				confirmacion(form1);
			}
		
		}	
	return false;
}


//VALIDAR estudiante
function validar_formulario_estudiante(form1) //verifica los campos del formulario
{
	if (requerido(form1.txtced)&&requerido(form1.txtnom)&&requerido(form1.txtape)&&requerido(form1.txtfec)&&requerido(form1.txtdir)&&requerido(form1.txttel)&&requerido(form1.lstcod_promo)&&requerido(form1.lstcod_promo)&&requerido(form1.txtcer)&&requerido(form1.txtcol)&&requerido(form1.txttit)&&requerido(form1.txtnompa)&&requerido(form1.txtprofpa)&&requerido(form1.txtnomma)&&requerido(form1.txtprofma))
		{
			if(valida_string(form1.txtnom)&&valida_string(form1.txtape)&&valida_string(form1.txtnompa)&&valida_string(form1.txtnomma)&&valida_string(form1.txttit)&&valida_string(form1.txtprofpa)&&valida_string(form1.txtprofma))
			{
				confirmacion(form1);
			}
		
		}	
	return false;
}


//VALIDAR matricula
function validar_formulario_matricula(form1) //verifica los campos del formulario
{
	if (requerido(form1.txtnom_est)&&requerido(form1.txtape_est))
		{
				confirmacion(form1);
		
		}	
	return false;
}


//VALIDAR matricula
function validar_formulario_matricula2(form2) //verifica los campos del formulario
{
	if (requerido(form1.txtcod_est)&&requerido(form1.lstcarrera)&&requerido(form1.lstnivel)&&requerido(form1.lstperiodo)&&requerido(form1.txtnro_pago)&&requerido(form1.txtnro_mat)&&requerido(form1.lstparalelo)&&requerido(form1.GrupoOpciones))
		{
				confirmacion(form1);
		
		}	
	return false;
}
//VALIDAR MODULOS
function validar_formulario_modulos(form1) //verifica los campos del formulario
{
	if (requerido(form1.lstcod_cur)&&requerido(form1.lstcod_cat)&&requerido(form1.lstcod_asig))
		{
				confirmacion(form1);
		
		}	
	return false;
}
//VALIDAR PERIODO LECTIVO
function validar_formulario_per_lectivo(form1) //verifica los campos del formulario
{
	if (requerido(form1.txtinicio)&&requerido(form1.txtfin))
		{
				confirmacion(form1);
		
		}	
	return false;
}

//VALIDAR PLAN DE ESTUDIO
function validar_formulario_plan_estudio(form1) //verifica los campos del formulario
{
	if (requerido(form1.txtnom_plan)&&requerido(form1.txtfecha_elab)&&requerido(form1.txtfec_ini)
		&&requerido(form1.txtfec_fin)&&requerido(form1.optestado)&&requerido(form1.lstcod_carr))
		{
				confirmacion(form1);
		
		}	
	return false;
}
//VALIDAR PLAN DE PROMOCION
function validar_formulario_promocion(form1) //verifica los campos del formulario
{
	if (requerido(form1.txtnom_promo))
		{
				confirmacion(form1);
		
		}	
	return false;
}





function cargar_paraleo(form)
{
	form.submit();
	return true;
}
function validar_formulario_actualizar_carrera(form1) //verifica los campos del formulario
{
	if (requerido(form1.txtcod))
		{
				confirmacion(form1);
		
		}	
	return false;
}
function validar_formulario_actualizar_datos_docentes(form1) //verifica los campos del formulario
{
	if (requerido(form1.txtcedula))
		{
				confirmacion(form1);
		
		}	
	return false;
}

function validar_formulario_actualizar_datos_estudiante(form1) //verifica los campos del formulario
{
	if (requerido(form1.txtcedula))
		{
				confirmacion(form1);
		
		}	
	return false;
}

function validar_formulario_notas_secretaria(form1) //verifica los campos del formulario
{
	if (requerido(form1.lstcarrera)&&requerido(form1.lstnivel)&&requerido(form1.lstperiodo)
		&&requerido(form1.lstparalelo)&&requerido(form1.lstdocente)&&requerido(form1.lstasignatura))
		{
				confirmacion(form1);
		
		}	
	return false;
}

function validar_formulario_actualizar_secretaria_asignatura(form1) //verifica los campos del formulario
{
	if (requerido(form1.txtnom_asi))
		{
				confirmacion(form1);
		
		}	
	return false;
}
function validar_consultar_distribucion(form1) //verifica los campos del formulario
{
	if (requerido(form1.lstcarrera)&&requerido(form1.lstnivel))
		{
				confirmacion(form1);
		
		}	
	return false;
}
function validar_consultar_docentes(form1) //verifica los campos del formulario
{
	if (requerido(form1.txtnom)&&requerido(form1.txtape))
		{
				confirmacion(form1);
		
		}	
	return false;
}
function validar_consultar_estudiante(form1) //verifica los campos del formulario
{
	if (requerido(form1.txtnom)&&requerido(form1.txtape))
		{
				confirmacion(form1);
		
		}	
	return false;
}
function validar_consultar_estudiante_cursos(form1) //verifica los campos del formulario
{
	if (requerido(form1.lstcarrera)&&requerido(form1.lstnivel)&&requerido(form1.lstperiodo)&&requerido(form1.lstparalelo))
		{
				confirmacion(form1);
		
		}	
	return false;
}
function validar_formulario_consultar_notas_sesion(form1) //verifica los campos del formulario
{
	if (requerido(form1.lstasignatura))
		{
				confirmacion(form1);
		
		}	
	return false;
}
function validar_formulario_consultar_planes(form1) //verifica los campos del formulario
{
	if (requerido(form1.estado))
		{
				confirmacion(form1);
		
		}	
	return false;
}

