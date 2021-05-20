<?php

use Src\Jogo\Jogo;

require "vendor\\autoload.php";

 

$novoJogo = new Jogo("lasanha");

echo "Responda com sim ou nao \n ";



do {
    $j = $novoJogo->jogar();
} while ($j);

 