<?php
include_once 'src/Human.php';
use PHPUnit\Framework\TestCase;

class HumanTest extends TestCase
{
    public function testConstructor()
    {
        $id = 1;
        $email = 'test@example.com';
        $ip_address = '127.0.0.1';

        $human = new Human($id, $email, $ip_address);

        $this->assertEquals($id, $human->id);
        $this->assertEquals($email, $human->email);
        $this->assertEquals($ip_address, $human->ip_address);
    }
}
