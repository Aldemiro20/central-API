<?php
include 'config.php';
session_start();
$postjson = json_decode(file_get_contents("php://input"), true);

 $query_buscar = $pdo->query("SELECT * from usuarios where email='$postjson[email]' and senha = '$postjson[senha]'");
 $dados_buscar = $query_buscar->fetchAll(PDO::FETCH_ASSOC);

 if(@count($dados_buscar)>0){

 $email=$postjson['email'];
 $senha=$postjson['senha'];
 $stmt = $pdo->prepare("SELECT * from usuarios WHERE email=:email and senha=:senha");
 $stmt->bindValue(":email", $email);
 $stmt->bindValue(":senha", $senha);
 $run=$stmt->execute();
 $rs=$stmt->fetch(PDO::FETCH_ASSOC);
 $id_user=$rs['id'];
 $acesso=$rs['acesso'];
 $_SESSION["id_usuario"]=$id_user;
 $_SESSION['acesso']=$acesso;
if($acesso==1){
	$result = json_encode(array('mensagem'=>'producer'));
	echo $result;
}else{
	$result = json_encode(array('mensagem'=>'cliente'));
	echo $result;
}

}
 else{
 	 $result = json_encode(array('mensagem'=>'errado'));
 	 echo $result;
 	 
  }

 ?>
 
 