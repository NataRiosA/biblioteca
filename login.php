<?php
$host="127.0.0.1";
$port="5432";
$user="postgres";
$pass="password";
$dbname="biblioteca";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass") or die('No se ha podido conectar: ' . pg_last_error());

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];
$query = pg_query($conn,"SELECT * FROM usuario WHERE usuario = '".$nombre."'and contraseña = '".$pass."'");
$nr = pg_num_rows($query);

if($nr==1)
{
    header("Location: index.html");
    //echo"Bienvenido:".$nombre;

}
else if ($nr == 0)
{
    echo"Contraseña o usuario incorecto";
}


?>