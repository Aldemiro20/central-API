<?php include 'config.php';
 session_start();
$postjson = json_decode(file_get_contents("php://input"), true);

 
 $query_buscar = $pdo->query("SELECT * from produtor where email = '$postjson[email]' ");
 $dados_buscar = $query_buscar->fetchAll(PDO::FETCH_ASSOC);
 if(@count($dados_buscar) > 0){
 	 $result = json_encode(array('success'=>'passo já cadastrado!'));
 	 echo $result;
 	 exit();
 }else{
 	$query = $pdo->prepare("INSERT INTO produtor SET nome = :nome, email = :email, celular = :celular, senha = :senha, acesso=:acesso ");
   $acesso=1;
       $query->bindValue(":nome", $postjson['nome']);
       $query->bindValue(":email", $postjson['email']);
       $query->bindValue(":celular", $postjson['celular']);
       $query->bindValue(":senha", $postjson['senha']);   
       $query->bindValue(":acesso", $acesso);   
       $query->execute();
       $query1 = $pdo->prepare("INSERT INTO usuarios (id,email,senha,acesso) select id,email,senha,acesso from produtor"); 
       $query1->execute();
       $email= $postjson['email'];
       $senha= $postjson['senha'];
       $stmt = $pdo->prepare("SELECT id from produtor WHERE email=:email and senha=:senha and acesso=:acesso");
       $stmt->bindValue(":email", $email);
       $stmt->bindValue(":senha", $senha); 
       $stmt->bindValue(":acesso", $acesso);
       $run=$stmt->execute();
       $rs=$stmt->fetch(PDO::FETCH_ASSOC);
       $id_produtor=$rs['id'];
       $_SESSION['id_produtor']=$id_produtor;
             
      if($query){
        $result = json_encode(array('success'=>true));
  
        }else{
        $result = json_encode(array('success'=>false));
    
        }

        echo $result;
 }

 ?>
     