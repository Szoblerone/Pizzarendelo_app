<<<<<<< Updated upstream
<?php 

    if (isset($_GET["order"])) {
        $pizzaid = $_GET["pizzaId"];
        var_dump($pizzaid);
    }
   
//$pizzaId= ;
=======
<?php
if (isset($_SESSION["userid"])) {
    $accountId = $_SESSION["userid"];
    if (isset($_GET["order"])) {
        
        $pizzaId = $_GET["pizzaId"];
        $pizzas = implode(' ', $pizzaId);
>>>>>>> Stashed changes

        require_once("DatabaseParts/Userdata_server_connect.php");
        try {
            $sql = "INSERT INTO orders (user,pizzas)  VALUES (:accountId,:pizzas)";
            $queryMent = $conn->prepare($sql);
            $queryMent->bindParam(":pizzas", $pizzas, PDO::PARAM_STR);
            $queryMent->bindParam(":accountId", $accountId, PDO::PARAM_STR);
            $queryMent->execute();
        } catch (PDOException $e) {
            echo "<p class='error'>Adatbázis mentési hiba: " . $e->getMessage() . "</p>\n";
        } catch (Exception $e) {
            echo "<p class='error'>Hiba: " . $e->getMessage() . "</p>\n";
        }
        header("location:Order.php");

    }
} else {
    echo '<script>
        function alertFunction(){
            alert("Rendelés elött kérem jelentkezzen be!");
        }
        </script>';
}

<<<<<<< Updated upstream
catch (PDOException $e){
    echo "<p class='error'>Adatbázis mentési hiba: ".$e->getMessage()."</p>\n";
}
catch (Exception $e){
    echo "<p class='error'>Hiba: ".$e->getMessage()."</p>\n";
}
*/
=======



>>>>>>> Stashed changes

?>