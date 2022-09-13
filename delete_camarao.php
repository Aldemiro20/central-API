<?php
include_once('config.php');
session_start();
$postjson = json_decode(file_get_contents("php://input"), true);

$id=$postjson['idCamarao'];
try{
$stmt=$pdo->prepare("DELETE FROM camarao where id=:id ");
$stmt->bindParam(':id',$id);
$stmt->execute();


}catch(PDOExcetion $e){
echo "ERRO: ".$e->getMessage();
}

?>