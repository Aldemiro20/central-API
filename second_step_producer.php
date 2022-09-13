<?php include 'config.php';
 session_start();
$postjson = json_decode(file_get_contents("php://input"), true);

 
 	$query = $pdo->prepare("UPDATE produtor SET sitio = :sitio, endereco = :endereco, cep = :cep, estado = :estado where id='$_SESSION[id_produtor]' ");
  
       $query->bindValue(":sitio", $postjson['sitio']);
       $query->bindValue(":endereco", $postjson['endereco']);
       $query->bindValue(":cep", $postjson['cep']);
       $query->bindValue(":estado", $postjson['estado']);
       $query->execute();
      if($query){
        $result = json_encode(array('success'=>true));
  
        }else{
        $result = json_encode(array('success'=>false));
    
        }

        echo $result;
        ?>

 
     