<?php
require("DatabaseParts/Userdata_server_connect.php");
try {
    $ready = 1;
    $sqlu = "UPDATE orders SET ready=:ready WHERE orderid = :orderidq"; // paraméterezett lekérdezés
    $queryMent = $conn->prepare($sqlu);
    $queryMent->bindParam(":orderidq", $_GET["q"], PDO::PARAM_STR);
    $queryMent->bindParam(":ready", $ready, PDO::PARAM_STR);
    $queryMent->execute();
    echo "kész---------------------";
} catch (PDOException $e) {
    echo "<p class='error'>Adatbázis mentési hiba: " . $e->getMessage() . "</p>\n";
} catch (Exception $e) {
    echo "<p class='error'>Hiba: " . $e->getMessage() . "</p>\n";
}
?>