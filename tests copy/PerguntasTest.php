<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Src\Jogo\Perguntas;

final class PerguntasTest extends TestCase
{
    public function testfazerPergunta(): void
    {
        $pergunta = new Perguntas;
        $resp = $pergunta->fazerPergunta("Qual seu nome");
        $this->assertEquals("ADALGISIO",$resp);
    }

    
}