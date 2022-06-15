<?php

include("conn.php");

$id=3;

$description="Mahouka kouko no routosei";

$title="Israel";

$stmt=$connect->prepare("UPDATE posts SET description=:DESCRICAO,title=:TITLE Where id=:ID");

$stmt->bindParam(":ID",$id);
$stmt->bindParam(":DESCRICAO",$description);
$stmt->bindParam(":TITLE",$title);

$stmt->execute();
?>