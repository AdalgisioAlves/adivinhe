<?php

namespace Src\Jogo;

use Src\Jogo\Perguntas;

class Jogo
{
    private $nomePrato;
    private $adjetivoPrato;
    private $pergunta;
    
    function __construct($prato)
    {
        $this->nomePrato = $prato;
        $this->pergunta = new Perguntas;
    }

    public function jogar()
    {

        echo "Pense em um prato que gosta \n";

        #Se a resposta for massa, pergunta se é lasanha
        $resposta = $this->pergunta->fazerPergunta("O Prato que você pensou é uma massa? \n");

        if ($resposta == 'SIM') {

           
            if ($this->adjetivoPrato) 
            {

                $resposta = $this->pergunta->fazerPergunta("O Prato que você pensou é " . $this->adjetivoPrato . " ? \n");

                if ($resposta == "SIM") {

                    $resposta = $this->pergunta->fazerPergunta("O Prato que você pensou é " . $this->nomePrato . " ? \n");
                    
                    if ($resposta == "SIM") {

                        echo "Acertei de novo! \n";
                        $this->pergunta->finaliza();
                        return true;

                    } elseif ($resposta == "NAO") {

                        $this->verificaNovoPrato();
                        return true;
                    }
                } elseif ($resposta == "NAO") {
                }
            } 
            else {
                $resposta = $this->pergunta->fazerPergunta("O Prato que você pensou é " . $this->nomePrato . " ? \n");
            }

            if ($resposta == 'SIM') {

                echo "Acertei de novo! \n";
                $this->pergunta->finaliza();
                return true;

            } elseif ($resposta == 'NAO') {

                $this->verificaNovoPrato();
                return true;
            }

        }
        elseif ($resposta == 'NAO') {

            $resposta = $this->pergunta->fazerPergunta("O prato que você pensou é bolo de chocolate ? \n");
            if ($resposta == "SIM") {

                echo "Acertei de novo! \n";
                $this->pergunta->finaliza();
                return true;
                
            }
            elseif($resposta == "NAO")
            {

                $resposta =  $this->verificaNovoPrato();
                return true;  

            }
            
        }
        
    }

    public function verificaNovoPrato()
    {
        $resposta = $this->pergunta->fazerPergunta("Qual prato você pensou ? \n");
        $novoPrato = $resposta;

        if ($resposta != null) {

            $resposta = $this->pergunta->fazerPergunta($novoPrato . " é_____,mas " . $this->nomePrato . " não. \n");

            $this->nomePrato = $novoPrato;

            if ($resposta != null) {

                $this->adjetivoPrato = $resposta;
                $this->pergunta->finaliza();
                return true;

            }
        }
    }
}
