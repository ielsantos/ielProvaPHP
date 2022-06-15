<?php
include("conn.php");

$title=$_POST['title'];
$description=$_POST['description'];

$stmt=$connect->prepare("INSERT INTO posts(title,description) VALUES(:TITLE,:DESCRIPTION)");

$stmt->bindParam(":TITLE",$title);
$stmt->bindParam(":DESCRIPTION",$description);

$stmt->execute();

echo"<br> Cadastrado";





?>