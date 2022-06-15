<?php
include("conn.php");
$id=2;


$stmt=$connect->prepare("DELETE FROM posts WHERE id=:ID");



$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "<br> deletado";







?>