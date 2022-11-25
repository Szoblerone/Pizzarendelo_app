<?php
require("DatabaseParts/Userdata_server_connect.php");
    try {
        $sql = "SELECT orderid, user, pizzas, ready FROM orders";		// eszerű lekérdezés
        $queryLeker = $conn->prepare($sql);					// előkészített lekérdezés létrehozása
        $queryLeker->execute();								// lekérdezés lefuttatása
        while ($row = $queryLeker->fetch(PDO::FETCH_ASSOC)){	// asszociatív tömbbe olvassuk ki a lekérdezés eredményét soronként
        $orderid = $row["orderid"];
        $userid=$row["user"];
        $pizza = explode(" ", $row["pizzas"]);
        $isReady=$row["ready"];
        if($userid==$sessionuserid){
        try {
            $sql = "SELECT pizzaid, pizzaname, description, price FROM pizza";		// eszerű lekérdezés
            $queryLeker = $conn->prepare($sql);					// előkészített lekérdezés létrehozása
            $queryLeker->execute();								// lekérdezés lefuttatása
            while ($row = $queryLeker->fetch(PDO::FETCH_ASSOC)){	// asszociatív tömbbe olvassuk ki a lekérdezés eredményét soronként
            foreach ($pizza as $value) {
                if ($row["pizzaid"]==$value) {
                   echo $row["pizzaname"]." ".$row["description"]." ".$row["price"]."<br>";
                }
            }
            }
            echo "<button type=submit value=1 >Teljesítve</button></div>";
        }catch (PDOException $e){
            echo "<p class='error'>Adatbázis lekérdezési hiba: ".$e->getMessage()."</p>\n";
        }
        catch (Exception $e){
            echo "<p class='error'>Hiba: ".$e->getMessage()."</p>\n";
        }
        
    }}
}
    catch (PDOException $e){
        echo "<p class='error'>Adatbázis lekérdezési hiba: ".$e->getMessage()."</p>\n";
    }
    catch (Exception $e){
        echo "<p class='error'>Hiba: ".$e->getMessage()."</p>\n";
    }
?>