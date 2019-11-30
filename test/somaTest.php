<?php
    use PHPUnit\Framework\TestCase;

    class SomaTest extends TestCase
    {
        public function testSoma()
        {
            $this->assertEquals(4, soma(2,2));
        }
    }
?>