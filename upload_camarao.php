<?php include 'config.php';
session_start();
$postjson = json_decode(file_get_contents("php://input"), true);
$domain_name = "https://centralvendascamarao.com.br/backend/" ;
$target_dir = "uploads/camarao";
$target_dir = $target_dir . "/" .rand() . "_" . time() . ".jpeg";	


if(move_uploaded_file($_FILES['data']['tmp_name'], $target_dir)){
		
  $target_dir = $domain_name . $target_dir ;
  $stmt = $pdo->prepare("UPDATE camarao SET foto = :foto where id_produtor='$_SESSION[id_usuario]'");
  $stmt->execute(array(':foto'=>$target_dir));
  
  $MESSAGE = "Upload feito." ;
  echo json_encode($MESSAGE);
}
 

 ?>
     