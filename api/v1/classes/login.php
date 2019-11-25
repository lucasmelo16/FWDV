<?php

class Login {

    public function enviarLogin($cabecalho = array(), $conteudoAEnviar, $url, $tpRequisicao) {

        try{
            $ch = curl_init($url);
    
            if ($tpRequisicao == 'POST') {

             curl_setopt($ch, CURLOPT_POST, 1);
    
             curl_setopt($ch, CURLOPT_POSTFIELDS, $conteudoAEnviar);
             }
    
            if (!empty($cabecalho)) {

                curl_setopt($ch, CURLOPT_HTTPHEADER, $cabecalho);
             }       
    
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
                $resposta = curl_exec($ch);
    
                curl_close($ch);
        }
        catch(Exception $e){

            return $e->getMessage();
        }  
        
            return $resposta;
    }
}

   ?>