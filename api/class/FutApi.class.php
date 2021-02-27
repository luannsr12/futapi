<?php

 /**
  * Fut API
  */
 class FutApi {

   private $url_api = "http://jsuol.com.br/c/monaco/utils/gestor/commons.js?callback=simulador_dados_jsonp&file=commons.uol.com.br/sistemas/esporte/modalidades/futebol/campeonatos/dados/{ANO}/{CAMPEONATO}/dados.json";

    function __construct($ano=0, $campeonato=0){
      $this->ano = $ano;
      $this->campeonato  = $campeonato;
      $this->url_request = str_replace('{CAMPEONATO}',$campeonato,str_replace('{ANO}',$ano,$this->url_api));
      $this->json_dados  = json_decode(substr(trim(str_replace('simulador_dados_jsonp(','',file_get_contents($this->url_request))),0,-2));
    }


    // retorna dados da equipe
    public function equipe($request){

      if(!isset($request['id'])){
        return json_encode(array('erro' => '401', 'msg' => 'id is required'));
      }

      if(is_numeric($request['id'])){
        $obj = $this->json_dados;
        $id  = $request['id'];
        return json_encode($obj->equipes->$id);
      }else{
        return false;
      }

    }


    // retorna todos os jogos de determinada rodada
    public function rodada($request){

      if(!isset($request['rodada'])){
        return json_encode(array('erro' => '401', 'msg' => 'rodada is required'));
      }

      $obj = $this->json_dados;
      $rodada = $request['rodada'];

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

    // retorna as informações do campeonato
    public function campeonato($request){
        $obj = $this->json_dados;
        return json_encode($obj);
    }

    // retorna as equipes
    public function equipes($request){
      $obj = $this->json_dados;
      return json_encode($obj->equipes);
    }


    // retorna a classificacao
    public function classificacao($request){
      $obj = $this->json_dados;

      foreach ($obj->fases as $key => $value) {
        $classificacao = $value->classificacao;

        $tabela = array();

        foreach ($classificacao->equipe as $key => $value) {
          $tabela[$value->pos] = $value;

        }

       echo json_encode($tabela);

      }

    }

    


 }


?>
