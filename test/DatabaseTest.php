<?php

use PHPUnit\Framework\TestCase;

include_once ("src/Human.php");
include_once("src/Animal.php");
include_once("src/config.php");

class DatabaseTest extends TestCase
{
    protected $db;

    protected function setUp(): void
    {

        $this->db = new mysqli('localhost', 'root', '', 'demo3');

        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    public function testHumanTable()
    {

        $result = $this->db->query("SELECT * FROM mock_data");


        $this->assertTrue($result !== false);


        $this->assertGreaterThan(0, $result->num_rows);
    }

    public function testAnimalsTable()
    {

        $result = $this->db->query("SELECT * FROM mock_data");


        $this->assertTrue($result !== false);


        $this->assertGreaterThan(0, $result->num_rows);
    }

    protected function tearDown(): void
    {

        $this->db->close();
    }
}
