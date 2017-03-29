<?php


function lerJson(){
    
    $arquivo = "php/data.json";

    $info = file_get_contents($arquivo);

    $lendo = json_decode($info, true);

    $linha = array();

        foreach($lendo as $c){
            $l = array_push($linha, 
                    array( 
                        "colocacao"=>$c['Lugar'],
                        "nome"=>$c['Cidade capital'],
                        "pais"=>$c['País/território'],
                        "populacao"=>$c['População da cidade']
                        ));
        }

        return $linha;

    }




?>
