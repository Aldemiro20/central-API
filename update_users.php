<?php

include_once('config.php');
session_start();
$postjson = json_decode(file_get_contents("php://input"), true);
$novoemail=$postjson['email'];
$novasenha=$postjson['senha'];
$acesso=$_SESSION['acesso'];
$id=$_SESSION['id_usuario'];


if($acesso==1){
        $stmt = $pdo->prepare("UPDATE produtor SET senha = :novasenha, email = :novoemail WHERE id= :id");
       $stmt->execute(array(
        ':id'=>$id,
        ':novasenha'=>$novasenha,
        ':novoemail'=>$novoemail
       ));
       $stmt1 = $pdo->prepare("UPDATE usuarios SET senha = :novasenha, email = :novoemail WHERE id= :id and acesso=1");
       $stmt1->execute(array(
        ':id'=>$id,
        ':novasenha'=>$novasenha,
        ':novoemail'=>$novoemail
       ));

    }else{
    
        $stmt = $pdo->prepare("UPDATE cliente SET senha = :novasenha, email = :novoemail WHERE id= :id");
        $stmt->execute(array(
        ':id'=>$id,
        ':novasenha'=>$novasenha,
        ':novoemail'=>$novoemail
        ));
        $stmt1 = $pdo->prepare("UPDATE usuarios SET senha = :novasenha, email = :novoemail WHERE id= :id and acesso=2");
        $stmt1->execute(array(
         ':id'=>$id,
         ':novasenha'=>$novasenha,
         ':novoemail'=>$novoemail
        ));
    }

       
       
 
  

?>