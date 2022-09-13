<?php include 'config.php';
session_start();
$postjson = json_decode(file_get_contents("php://input"), true);
$domain_name = "https://centralvendascamarao.com.br/backend/" ;
$target_dir = "uploads/camarao";
$target_dir = $target_dir . "/" .rand() . "_" . time() . ".jpeg";	


 	$query = $pdo->prepare("INSERT INTO camarao SET gramatura = :gramatura, preco = :preco, id_firebase=:id_firebase, id_produtor='$_SESSION[id_usuario]'");
     
       $query->bindValue(":gramatura", $postjson['gramatura']);
       $query->bindValue(":preco", $postjson['preco']);
       $query->bindValue(":id_firebase", $postjson['id_firebase']);
       $query->execute();
      
      
      if($query){
        $result = json_encode(array('success'=>true));
       
        }else{
        $result = json_encode(array('success'=>false));
    
        }

        echo $result;
 

 ?>
     