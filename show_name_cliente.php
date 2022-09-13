<?php

include_once('config.php');
session_start();
$query = $pdo->query("SELECT * from cliente where id='$_SESSION[id_usuario]'");

$res = $query->fetchAll(PDO::FETCH_ASSOC);

for ($i = 0; $i < count($res); $i++) {
  foreach ($res[$i] as $key => $value) {
  }
  $dados[] = array(
    
    'nome' => $res[$i]['nome'],
    
    
   
  );
}

if (count($res) > 0) {
  $result = json_encode(array('success'=>true, 'produtos'=>$dados));
} else {
  $result = json_encode(array('success'=>false, 'produtos'=>'0'));
}

echo $result;

?>