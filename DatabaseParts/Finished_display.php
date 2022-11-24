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
        if($isReady==1){
        try {
            $firstname=$lastname=$zipcode=$city=$street=$phone="";
            $sql = "SELECT firstname, lastname, zipcode, city, street, phone FROM users WHERE userid=:useridt";		// eszerű lekérdezés
            $queryKeres = $conn->prepare($sql);		// előkészített lekérdezés létrehozása
            $queryKeres->bindParam(":useridt",$userid,PDO::PARAM_STR);	// paraméterhez érték kötése
            $queryKeres->execute();					// lekérdezés lefuttatása
            if ($queryKeres->rowCount()>=1){
                $queryKeres->bindColumn("firstname",$firstname);
                $queryKeres->bindColumn("lastname",$lastname);
                $queryKeres->bindColumn("zipcode",$zipcode);
                $queryKeres->bindColumn("city",$city);
                $queryKeres->bindColumn("street",$street);
                $queryKeres->bindColumn("phone",$phone);
                while ($row = $queryKeres->fetch(PDO::FETCH_ASSOC)){
                echo "<div class=oderdisplay>";
                echo $orderid."<br>";
                echo "név: ".$firstname." ".$lastname." cél: ".$zipcode." ".$city." ".$street." telefon: ".$phone."<br>";
            }
        }else{
           echo "nincs ilyen felhasználó!";
        }
        }
        catch (PDOException $e){
            echo "<p class='error'>Adatbázis lekérdezési hiba: ".$e->getMessage()."</p>\n";
        }
        catch (Exception $e){
            echo "<p class='error'>Hiba: ".$e->getMessage()."</p>\n";
        }
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