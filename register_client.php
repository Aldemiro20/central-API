<?php include 'config.php';
 
$postjson = json_decode(file_get_contents("php://input"), true);

 
 $query_buscar = $pdo->query("SELECT * from cliente where email = '$postjson[email]' ");
 $dados_buscar = $query_buscar->fetchAll(PDO::FETCH_ASSOC);
 if(@count($dados_buscar) > 0){
 	 $result = json_encode(array('success'=>'cliente já cadastrado!'));
 	 echo $result;
 	 exit();
 }else{
 	$query = $pdo->prepare("INSERT INTO cliente SET nome = :nome, email = :email, celular = :celular,  senha = :senha, acesso=:acesso ");
      $acesso=2;
       $query->bindValue(":nome", $postjson['nome']);
       $query->bindValue(":email", $postjson['email']);
       $query->bindValue(":celular", $postjson['celular']);
       $query->bindValue(":senha", $postjson['senha']);
       $query->bindValue(":acesso", $acesso);
       $query->execute();
       $query1 = $pdo->prepare("INSERT INTO usuarios (id,email,senha,acesso) select id,email,senha,acesso from cliente"); 
       $query1->execute();
             
  
      if($query){
        $result = json_encode(array('success'=>true));
  
        }else{
        $result = json_encode(array('success'=>false));
    
        }

        echo $result;
 }

 ?>
     