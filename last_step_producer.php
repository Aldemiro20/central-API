<?php
 include_once('config.php');
 session_start();
 
	$domain_name = "https://centralvendascamarao.com.br/backend/" ;
	$target_dir = "uploads/documentos";
	$target_dir = $target_dir . "/" .rand() . "_" . time() . ".jpeg";	
	if(move_uploaded_file($_FILES['data']['tmp_name'], $target_dir)){
		
	
		$target_dir = $domain_name . $target_dir ;
		$stmt = $pdo->prepare("UPDATE produtor SET documento = :documento where id='$_SESSION[id_produtor]'");
		$stmt->execute(array(':documento'=>$target_dir));
		
		$MESSAGE = "Upload feito." ;
		echo json_encode($MESSAGE);
	}
 
 
?>