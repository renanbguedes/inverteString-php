<?php

use PHPUnit\Framework\TestCase;

final class InverteString
{
    public function inverteString($string)
    {
        $caracteres = str_split($string);
        $n = count($caracteres);
        for ($i = 0; $i <= floor(($n - 2) / 2); $i++) {
            $tmp = $caracteres[$i];
            $caracteres[$i] = $caracteres[$n - 1 - $i];
            $caracteres[$n - 1 - $i] = $tmp;
        }
        return $caracteres;
    }
}

final class InverteStringTest extends TestCase
{
    public function testInverteString()
    {
        $inversor = new InverteString;
        $stringOriginal = "desenvolvimento";
        $stringResultante = implode($inversor->inverteString($stringOriginal));
        $this->assertSame($stringResultante, "otnemivlovnesed");
    }
}
