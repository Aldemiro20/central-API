<?php

include_once('config.php');
$postjson = json_decode(file_get_contents("php://input"), true);
$email=$postjson['email'];
$novasenha=$postjson['senha'];

// verifica a existencia do email introduzido na base de dados

$stmt = $pdo->prepare("SELECT * from usuarios WHERE email=:email");
$stmt->bindValue(":email", $email);
$run=$stmt->execute();
$rs=$stmt->fetch(PDO::FETCH_ASSOC);

if($rs){
   // pega o id do usuario do email introduzido
    $query = $pdo->query("SELECT id,acesso from usuarios WHERE email= '$email'");
    $query->execute();
    $linha=$query->fetch(PDO::FETCH_ASSOC);
    $r_id=$linha['id'];
    $r_acesso=$linha['acesso'];
    $id=$r_id;

//permite redefinir a senha
if($_adm==1){
        $stmt = $pdo->prepare("UPDATE produtor SET senha = :novasenha WHERE id= :id");
       $stmt->execute(array(
        ':id'=>$id,
        ':novasenha'=>$novasenha
       ));
    }else{
    
        $stmt = $pdo->prepare("UPDATE cliente SET senha = :novasenha WHERE id= :id");
        $stmt->execute(array(
        ':id'=>$id,
        ':novasenha'=>$novasenha
        ));
    }

       
       
    echo "  usuario existe";
   
      
     }
     else{
         echo "nao existe";
     }

 
  

?>