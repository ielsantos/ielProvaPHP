<?php
$user="root";
$dbname="atividade";
$host="localhost";
$password="";

try{
$connect=new PDO("mysql:host=" . $host .";dbname=" .$dbname,$user,$password);
echo"conexão com sucesso";
}
catch(Exception $e){
	echo"erro";
}
?>