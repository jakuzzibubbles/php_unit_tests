<?php

use PHPUnit\Framework\TestCase;

include_once("src/Animal.php");

class AnimalTest extends TestCase
{
    public function testConstructor()
    {
        $habitat = 'Forest';
        $rarity_level = 'Common';

        $animal = new Animals($habitat, $rarity_level);

        $this->assertEquals($habitat, $animal->habitat);
        $this->assertEquals($rarity_level, $animal->rarity_level);
    }
}
