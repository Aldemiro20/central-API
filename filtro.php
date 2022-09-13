<?php

include_once('config.php');
session_start();
$postjson = json_decode(file_get_contents("php://input"), true);



$filtro = $postjson['filtro'];
    $resultado = [];
     
    switch($filtro){
        case 'trinta':
            $query = $pdo->query("SELECT * from camarao");
            $res = $query->fetchAll(PDO::FETCH_ASSOC);
            $resultado = $res;
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
            $result = json_encode(array('success'=>true, 'produtos'=>$dados));
            echo $result;
        break;
        case 'dez':
            $query = $pdo->query("SELECT * from camarao where gramatura=10 ");
            $res = $query->fetchAll(PDO::FETCH_ASSOC);
            $resultado = $res;
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
            $result = json_encode(array('success'=>true, 'produtos'=>$dados));
            echo $result;
        break;
        case 'vinte':
            $query = $pdo->query("SELECT * from camarao where gramatura=20 ");
            $res = $query->fetchAll(PDO::FETCH_ASSOC);
            $resultado = $res;
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
            $result = json_encode(array('success'=>true, 'produtos'=>$dados));
            echo $result;
        break;
        case 'trinta':
            $query = $pdo->query("SELECT * from camarao where gramatura=30 ");
            $res = $query->fetchAll(PDO::FETCH_ASSOC);
            $resultado = $res;
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
            $result = json_encode(array('success'=>true, 'produtos'=>$dados));
            echo $result;
        break;
       
        case 'quarenta':
            $query = $pdo->query("SELECT * from camarao where gramatura=40 ");
            $res = $query->fetchAll(PDO::FETCH_ASSOC);
            $resultado = $res;
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
            $result = json_encode(array('success'=>true, 'produtos'=>$dados));
            echo $result;
        break;
        case 'cinquenta':
            $query = $pdo->query("SELECT * from camarao where gramatura=50 ");
            $res = $query->fetchAll(PDO::FETCH_ASSOC);
            $resultado = $res;
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
            $result = json_encode(array('success'=>true, 'produtos'=>$dados));
            echo $result;
        break;
        case 'sessenta':
            $query = $pdo->query("SELECT * from camarao where gramatura=60 ");
            $res = $query->fetchAll(PDO::FETCH_ASSOC);
            $resultado = $res;
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
            $result = json_encode(array('success'=>true, 'produtos'=>$dados));
            echo $result;
        break;
        case 'setenta':
            $query = $pdo->query("SELECT * from camarao where gramatura=70 ");
            $res = $query->fetchAll(PDO::FETCH_ASSOC);
            $resultado = $res;
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
            $result = json_encode(array('success'=>true, 'produtos'=>$dados));
            echo $result;
        break;
        case 'oitenta':
            $query = $pdo->query("SELECT * from camarao where gramatura=80 ");
            $res = $query->fetchAll(PDO::FETCH_ASSOC);
            $resultado = $res;
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
            $result = json_encode(array('success'=>true, 'produtos'=>$dados));
            echo $result;
        break;
        case 'noventa':
            $query = $pdo->query("SELECT * from camarao where gramatura=90 ");
            $res = $query->fetchAll(PDO::FETCH_ASSOC);
            $resultado = $res;
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
            $result = json_encode(array('success'=>true, 'produtos'=>$dados));
            echo $result;
        break;
        case 'cem':
            $query = $pdo->query("SELECT * from camarao where gramatura=100 ");
            $res = $query->fetchAll(PDO::FETCH_ASSOC);
            $resultado = $res;
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
            $result = json_encode(array('success'=>true, 'produtos'=>$dados));
            echo $result;
        break;
    }


?>