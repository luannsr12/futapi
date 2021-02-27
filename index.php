<?php

  /* ApiFut
   * @author: Luan Alves
   * @ano: 2021
   * Api:  http://jsuol.com.br/
   */


   /*  Var campeonato
    * 30 => Campeonato Brasileiro
    * 12 => Campeonato Alemão
    */

   if(isset($_GET['url'])){

     if(is_file('routes/'.$_GET['url'].'.php')){

        if(isset($_GET['ano']) && isset($_GET['campeonato'])){

           $ano          = $_GET['ano'];
           $idcampeonato = $_GET['campeonato'];

         }else{
           echo json_encode(array('erro' => '401', 'msg' => 'Unauthorized'));
           die;
         }

       include_once 'routes/'.$_GET['url'].'.php';

     }else{
       echo json_encode(array('erro' => '404', 'msg' => 'route not found'));
     }
   }else{
     echo json_encode(array('erro' => '404', 'msg' => 'route not found'));
   }


?>
