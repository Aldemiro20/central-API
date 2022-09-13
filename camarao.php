<?php

include_once('config.php');
session_start();
$query = $pdo->query("SELECT * from camarao");

$res = $query->fetchAll(PDO::FETCH_ASSOC);

for ($i = 0; $i < count($res); $i++) {
  foreach ($res[$i] as $key => $value) {
  }
  $dados[] = array(
    
    'id' => $res[$i]['id'],
    'id_produtor' => $res[$i]['id_produtor'],
    'preco' => $res[$i]['preco'],
    'gramatura' => $res[$i]['gramatura'],
    'foto' => $res[$i]['foto'],
    'id_firebase' => $res[$i]['id_firebase'],
   
  );
}

if (count($res) > 0) {
  $result = json_encode(array('success'=>true, 'produtos'=>$dados));
} else {
  $result = json_encode(array('success'=>false, 'produtos'=>'0'));
}

echo $result;

?>