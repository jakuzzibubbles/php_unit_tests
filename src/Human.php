<?php

class Human {
    public $id;
    public $email;
    public $ip_address;

    public function __construct($id, $email, $ip_address) {
        $this->id = $id;
        $this->email = $email;
        $this->ip_address = $ip_address;
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}


$sql = "SELECT id, email, ip_address FROM mock_data LIMIT 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $person = new Human($row["id"], $row["email"], $row["ip_address"]);
        echo "ID: " . $person->id . ", Email: " . $person->email . ", IP-Adresse: " . $person->ip_address . "\n";
    }
} else {
    echo "Keine Daten gefunden.";
}


