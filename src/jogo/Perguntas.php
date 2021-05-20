<?php

namespace Src\Jogo;

class Perguntas
{

    public function fazerPergunta($pergunta)
    {
        if(!$pergunta) return false;
        
        echo $pergunta;

        $resposta = trim(strtoupper(fgets(STDIN)));
        
        if ($resposta) {
            return $resposta ;
        } 
        else {
            return NULL;
        }
    }

    public function finaliza()
    {

        echo "Deseja Finalizar \n";

        $resposta = trim(strtoupper(fgets(STDIN)));
        
        if ($resposta == "SIM") {
            echo "O jogo será finalizado \n";
            exit; 
        } 
        else {
            return true;
        }
    }
}
