<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "webgunea"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Konektatzeko akatsa: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $izena = $_POST['izena'];
    $abizena = $_POST['abizena'];
    $telefonoa = $_POST['telefonoa'];
    $emaila = $_POST['emaila'];
    $informazioajaso = $_POST['informazioajaso'];
    $arazoa = $_POST['arazoa'];
    $explikazioa = $_POST['explikazioa'];

    $stmt = $conn->prepare("INSERT INTO Kontaktua (Izena, Abizena, Telefono, Emaila, Informazioa_Jasotzeko_Modua, Akats_Mota, Arazoaren_Informazioa)
                            VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $izena, $abizena, $telefonoa, $emaila, $informazioajaso, $arazoa, $explikazioa);

    if ($stmt->execute()) {
        echo "Zure inzidentzia ondo bidali da, laster jasoko duzu gure erantzuna, eskerrik asko zure pazientziagatik.";
    } else {
        echo "Akatsa: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
