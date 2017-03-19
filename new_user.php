<?php
session_start();
//Variables de conexion a la base de datos
$host='localhost'; // Nombre del host
$username='root'; // usuarioMysql
$password=''; // password Mysql
$db_name='comentarios'; // Nombre de la BD
$tbl_name='users'; // Nombre d ela tabla


mysql_connect($host,$username,$password)//Conexión
or die("cannot connect"); //En caso de error
mysql_select_db($db_name)//seleccion de base de datos
or die("cannot select DB");//en caso de error

//Variables que toman valor de lo enviado desde el form
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];





if (filter_var($email, FILTER_VALIDATE_EMAIL)) {//Filtro de validación de mail
   $sql='select mail from users where email =$email';//SEleccionamos la lista completa del campo usuarios
$result=mysql_query($sql);


if($count>0){//Si ya existe un usuario con ese mail

echo "<center>
<h1><font color='red'>Error el mail ingresado ya existe";
}else{//Si el usuario no existe

$sql="INSERT INTO users (id, username, email, password) VALUES( 2,'$username','$email', '$password')";
$result=mysql_query($sql);

if($result){
  header("location:index.php");//Si todo es correcto redireccionamos a la index
}else {
echo "ERROR MySql";
}
// cerramos la conexión
mysql_close();
}
}else{
echo"<center>
<h1><font color='red'>Error el mail ingresado no es v&aacute;lido<br><a href='index.php'>Inicio</a>";
}
?>
