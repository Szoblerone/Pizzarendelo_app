<?php 
try {
    $conn = new PDO("mysql:host=localhost;dbname=userdata","root","");	// adatbázis kapcsolat PDO-val
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);		// kivétel alapú hibakezelés beállítása
}
catch (PDOException $e){
    echo "<p class='error'>Adatbázis kapcsolódási hiba: ".$e->getMessage()."</p>\n";		// PDO által dobott adatbázis hiba
    die;
}
catch (Exception $e){
    echo "<p class='error'>Hiba: ".$e->getMessage()."</p>\n";		// valamilyen más hiba
    die;
}
?>