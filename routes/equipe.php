<?php

 if(isset($_GET['id'])){

  $id        = $_GET['id'];

  $url       = "http://jsuol.com.br/c/monaco/utils/gestor/commons.js?callback=simulador_dados_jsonp&file=commons.uol.com.br/sistemas/esporte/modalidades/futebol/campeonatos/dados/{$ano}/{$idcampeonato}/dados.json";
  $content   = file_get_contents($url);

  $obj       = json_decode(substr(trim(str_replace('simulador_dados_jsonp(','',$content)),0,-2));

  echo json_encode($obj->equipes->$id);

}else{
  echo json_encode(array('erro' => '401', 'msg' => 'Unauthorized'));
}

?>
