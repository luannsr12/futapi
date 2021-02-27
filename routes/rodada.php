<?php

  if(isset($_GET['rodada'])){

    $rodada       = $_GET['rodada'];
    $url       = "http://jsuol.com.br/c/monaco/utils/gestor/commons.js?callback=simulador_dados_jsonp&file=commons.uol.com.br/sistemas/esporte/modalidades/futebol/campeonatos/dados/{$ano}/{$idcampeonato}/dados.json";
    $content   = file_get_contents($url);

    $obj       = json_decode(substr(trim(str_replace('simulador_dados_jsonp(','',$content)),0,-2));

    foreach ($obj->fases as $key => $value) {
      $jogos = $value->jogos;

      $jogo = array();

      foreach ($jogos->rodada->$rodada as $key => $value) {
        $idjogo = $value;
        $jogo[$idjogo] = $jogos->id->$idjogo;

      }

      echo json_encode($jogo);

    }

}


?>
