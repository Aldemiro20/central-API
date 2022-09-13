<?php
include_once('config.php');
session_start();
$id=$_SESSION['id_usuario'];
try{
$stmt=$pdo->prepare("DELETE FROM cliente where id=:id ");
$stmt->bindParam(':id',$id);
$stmt->execute();
$stmt1=$pdo->prepare("DELETE FROM usuarios where id=:id and acesso='$_SESSION[acesso]'");
$stmt1->bindParam(':id',$id);
$stmt1->execute();
echo $stmt->rowCount();
}catch(PDOExcetion $e){
echo "ERRO: ".$e->getMessage();
}

?>