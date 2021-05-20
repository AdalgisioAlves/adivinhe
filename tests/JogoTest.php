<?php declare(strict_types=1);
namespace Tests;
use PHPUnit\Framework\TestCase;

use Src\Jogo\Jogo;

final class JogoTest extends TestCase
{
    public function testJogar(): void
    {
        $jogo = new Jogo("lasanha");
        $this->assertObjectHasAttribute('nomePrato', $jogo);
    }
 
}
