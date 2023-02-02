<? 

	$tam= $_REQUEST['t'];
	//$tam = (isset($_GET["tam"])) ? $_GET["tam"] : 1;
// Escojemos la foto real o la miniatura según la variable $tam
switch($tam) {
        case "1":
                $campo = "foto";break;;
        case "2":
                $campo = "thumb";break;;
        default:
                $campo = "foto";break;;
}



	
 $v= $_REQUEST['v'];	
 define("DBHOST", "localhost");
  # nombre de la base de datos
  define("DBNAME", "rodar");
  # Usuario de base de datos
  define("DBUSER", "root");
  # Password de base de datos
  define("DBPASSWORD", "rodar");
  
# Conexión a la base de datos
$link = mysql_connect(DBHOST, DBUSER, DBPASSWORD) or die(mysql_error($link));;

$sql = "SELECT $campo, mime
                FROM tabla
                WHERE nombre = '$v' ";




mysql_select_db(DBNAME, $link) or die(mysql_error($link));
$conn = mysql_query($sql, $link) or die(mysql_error($link));
$datos = mysql_fetch_array($conn);


$imagen = $datos[0];
// El mime type de la imagen
$mime = $datos[1];
// Gracias a esta cabecera, podemos ver la imagen
// que acabamos de recuperar del campo blob
header("Content-Type: $mime");
// Muestra la imagen
echo $imagen;   
echo $a23
?>


<html>
	<head >
	
	</head>					


</body>
</html>