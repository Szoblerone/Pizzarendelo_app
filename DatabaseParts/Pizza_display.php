<?php
require("DatabaseParts/Userdata_server_connect.php");
/*<div class="product">
<img src="images/magyarospizza.jpg">
<p class="nev" data-text="Mindent Bele">Margaréta</p>
<span class="leiras">-paradicsom szósz, papras dsad as df asika, oliva bogyó,  sajt ,pepperoni</span>
<br>
<div class="price">1990 Ft</div>
<button class="more">Kosárba</button>
</div>*/
try {
    $sql = "SELECT pizzaid, pizzaname, description, price, image  FROM pizza"; // eszerű lekérdezés
    $queryLeker = $conn->prepare($sql); // előkészített lekérdezés létrehozása
    $queryLeker->execute(); // lekérdezés lefuttatása
    while ($row = $queryLeker->fetch(PDO::FETCH_ASSOC)) { // asszociatív tömbbe olvassuk ki a lekérdezés eredményét soronként
        echo "<div class=product>";
<<<<<<< Updated upstream
        echo "<img src=" . $row["image"] . ">";
        echo "<p class=nev data-text=Mindent Bele>" . $row["pizzaid"] . ". " . $row["pizzaname"] . "</p>";
        echo "<span class=leiras>" . $row["description"] . "</span>";
=======
        echo "<img src=".$row["image"].">";
        echo "<p class=nev data-text=Mindent Bele>".$row["pizzaid"].". ".$row["pizzaname"]."</p>";
        echo "<p hidden>".$row["pizzaid"]."</p>";
        echo "<span class=leiras>".$row["description"]."</span>";
>>>>>>> Stashed changes
        echo "<br>";
        echo "<div class=price>" . $row["price"] . " Ft</div>";
        echo "<button class=more>Kosárba</button>";
        echo "</div>";
    }
} catch (PDOException $e) {
    echo "<p class='error'>Adatbázis lekérdezési hiba: " . $e->getMessage() . "</p>\n";
} catch (Exception $e) {
    echo "<p class='error'>Hiba: " . $e->getMessage() . "</p>\n";
}
?>