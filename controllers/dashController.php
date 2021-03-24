<?php

class dashController extends controller{

    public function index(){
        $data = [];
       

        $key = "live_fe1d87a35ec3d34ffd96c83595ade2";

        $ch = curl_init();

    curl_setopt_array($ch, [

    CURLOPT_URL => 'https://api.api-futebol.com.br/v1/campeonatos',

    CURLOPT_POST => true,

    CURLOPT_HTTPHEADER => [
        'Authorization: Bearer ' . $key,
        'Content-Type: application/json',
        'x-li-format: json'
    ],

    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_PROTOCOLS => CURLPROTO_HTTPS
]);

   $resultado = json_decode(curl_exec($ch),false);
   curl_close($ch);

   $campeonato_id = 10;
   
   $ch = curl_init();

   curl_setopt_array($ch, [
   
       CURLOPT_URL => "https://api.api-futebol.com.br/v1/campeonatos/".$campeonato_id."/tabela",
   
       CURLOPT_POST => true,
   
       CURLOPT_HTTPHEADER => [
           'Authorization: Bearer ' . $key,
           'Content-Type: application/json',
           'x-li-format: json'
       ],
   
       CURLOPT_RETURNTRANSFER => true,
       CURLOPT_PROTOCOLS => CURLPROTO_HTTPS
   ]);
   
      $resultado_table = json_decode(curl_exec($ch),true);
      curl_close($ch);


         //$data['table'] = $resultado_table;
         //var_dump($resultado_table);EXIT;
         //var_dump($resultado_table['taca-rio-fase-de-grupos']['grupo-a'][0]['time']['nome_popular'] , $resultado_table['taca-rio-fase-de-grupos']['grupo-a'][0]['jogos'],$resultado_table['taca-rio-fase-de-grupos']['grupo-a'][0]['vitorias'],$resultado_table['taca-rio-fase-de-grupos']['grupo-a'][0]['derrotas'],$resultado_table['taca-rio-fase-de-grupos']['grupo-a'][0]['gols_pro']);exit;
         //$data['camp'] = $resultado;

         $db = new DAO();
         $data['candidato'] = $db->select('SELECT * FROM tb_funcionario WHERE candidato = :candidato ORDER BY voto DESC',[
             ':candidato'=> 1
         ]);


         $vote_maior =[];
         $maior = 0;
         for($i=0;$i<count($data['candidato']);$i++){
             $vote_maior[$i] = $data['candidato'][$i]['voto'];
             if($vote_maior[$i] > $maior){
                $maior = $vote_maior[$i];
             } 
         }

         //var_dump($maior);

         //var_dump($data['candidato']);
         
       
        $this->template('initial',$data);



    }
}