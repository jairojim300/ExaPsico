<?php
  //conexion a la bases de datos
function server(){
   // $hostname_conectar = "10.0.0.3";
	$hostname_conectar = "localhost";
    $username_conectar = "root";
    $password_conectar = "rodar0606";
    $conectar = mysql_pconnect($hostname_conectar, $username_conectar, $password_conectar) or trigger_error(mysql_error(),E_USER_ERROR); 
    return $conectar;
  }

  //consultar	llamar base d
  function consultar($par_sql)
  {
    $conectar = server();
    mysql_select_db ("rodar", $conectar);
    return mysql_query ($par_sql, $conectar);   
  }
  
  //guardar operaci�n simple
  function save($par_sql)
  {
    $conectar = server();
    mysql_query("BEGIN", $conectar);
    mysql_select_db ("rodar", $conectar);
    $rs_save = mysql_query ($par_sql, $conectar);
    if(mysql_errno($conectar) == 0)
    {
       mysql_query("COMMIT", $conectar);
	   echo "<script LANGUAGE='JavaScript'>
         	alert ('La transacci�n se ha realizado con �xito');
      		</script>";
    }
    else{
       mysql_query("ROLLBACK", $conectar);
	 echo "<script LANGUAGE='JavaScript'>
         	alert ('�No se ha podido completar con �xito la transacci�n!');
       		</script>";
   }  
  }


//************PARA GESTION DE TRANSACCIONES *******************************

  //iniciar transaccion
  function inicio_trans($conectar)
  {    
    mysql_query("BEGIN", $conectar);
    mysql_select_db ("rodar", $conectar);
  }
   //ejecutar sentencia
  function saves($par_sql, $conectar){
      mysql_query ($par_sql, $conectar);
  }
	//fin transaccion
  function fin_trans($conectar){
    if(mysql_errno($conectar) == 0)
    {
	    mysql_query("COMMIT", $conectar);
		echo "<script LANGUAGE=\"JavaScript\">
				alert (\"La transacci�n se ha realizado con �xito\");
				</script>";
	}
	else{
		   mysql_query("ROLLBACK", $conectar);
		   echo "<script LANGUAGE=\"JavaScript\">
				alert (\"�No se ha podido completar con �xito la transacci�n!\");
				</script>";
	 }    
  }
  
?>