<?php

// getdata.php3 - by Florian Dittmer <dittmer@gmx.net>
// Example php script to demonstrate the direct passing of binary data
// to the user. More infos at http://www.phpbuilder.com
// Syntax: getdata.php3?id=<id>

if($id) {

// you may have to modify login information for your database server:
@MYSQL_CONNECT("localhost","root","rodar");

@mysql_select_db("rodar");

$query = "select bin_data,filetype from binary_data where id=$id";
$result = @MYSQL_QUERY($query);

$data = @MYSQL_RESULT($result,0,"bin_data");
$type = @MYSQL_RESULT($result,0,"filetype");

Header( "Content-type: $type");
echo $data;

};
?>

------------------
FIN MOSTRAR IMAGEN
------------------ 