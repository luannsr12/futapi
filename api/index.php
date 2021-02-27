      <?php

      header('Content-Type: application/json');

      /* ApiFut
      * @author: Luan Alves
      * @ano: 2021
      * Api:  http://jsuol.com.br/
      */


      /*  Var campeonato
      * 30 => Campeonato Brasileiro
      * 12 => Campeonato Alemão
      */

      require_once 'class/FutApi.class.php';
      if(isset($_GET['url'])){

        if(isset($_GET['ano']) && isset($_GET['campeonato'])){

          $explo_request = explode('/',$_GET['url']);
          $function_name = $explo_request[0];

          $futapi = new FutApi(trim($_GET['ano']),trim($_GET['campeonato']));

          if(method_exists($futapi,$function_name)){
            $request_parms = $_REQUEST;
            $function_exec = $futapi->$function_name($request_parms);
            if($function_exec){
              echo $function_exec;
            }
          }else{
            echo json_encode(array('erro' => '404', 'msg' => 'method not found'));
          }

        }else{
          echo json_encode(array('erro' => '401', 'msg' => 'ano is required and campeonato is required'));
        }


      }else{
        echo json_encode(array('erro' => '404', 'msg' => 'Not found'));
      }



?>
