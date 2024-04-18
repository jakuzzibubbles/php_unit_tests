<?php
include("config.php");

class Animals {
    public $habitat;
    public $rarity_level;

    public function __construct($habitat, $rarity_level){
        $this->habitat = $habitat;
        $this->rarity_level = $rarity_level;
    }
}

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Failed to connect: " . $conn->connect_error);
}


$sql = "SELECT habitat, rarity_level FROM mock_data LIMIT 6";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    $animals = array();
    while ($row = $result->fetch_assoc()){
        $animal = new Animals($row["habitat"], $row["rarity_level"]);
        $animals[] = $animal;
    }
} else {
    echo "No animal found.";
}
?>

<html>
<head>
    <title>User Data</title>
</head>
<body>
    <?php foreach ($animals as $animal) : ?>
    <form action="">
        <label for="habitat">Habitat:</label>
        <input type="text" id="habitat" name="habitat" value="<?php echo $animal->habitat; ?>"><br>
        <label for="rarity_level">Rarity Level:</label>
        <input type="text" id="rarety_level" name="rarity_level" value="<?php echo $animal->rarity_level; ?>"><br>
    </form>
    <?php endforeach; ?> <
</body>
</html>
