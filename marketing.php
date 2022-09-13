<?php

include_once('config.php');
session_start();
$query = $pdo->prepare("SELECT * from marketing ORDER BY id DESC limit 1");
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);

for ($i = 0; $i < count($res); $i++) {
  foreach ($res[$i] as $key => $value) {
  }
  $dados[] = array(
  
    'id' => $res[$i]['id'],
    'imagem' => $res[$i]['imagem'],
   
  );
}

if (count($res) > 0) {
  $result = json_encode(array('success'=>true, 'produtos'=>$dados));
} else {
  $result = json_encode(array('success'=>false, 'produtos'=>'0'));
 
}


echo $result;

?>