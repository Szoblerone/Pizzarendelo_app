<?php 
   if(isset($_GET["order"])){
    header("location:Order.php");
   }
    
//$pizzaId= ;

//require_once("Userdata_server_connect");

/*try {
    $sql = "INSERT INTO orders (orderid)  VALUES (:orderid)"; 
    $queryMent = $conn->prepare($sql);	
    $queryMent->bindParam(":orderid",$pizzaId,PDO::PARAM_INT);
    $queryMent->execute();

}


catch (PDOException $e){
    echo "<p class='error'>Adatbázis mentési hiba: ".$e->getMessage()."</p>\n";
}
catch (Exception $e){
    echo "<p class='error'>Hiba: ".$e->getMessage()."</p>\n";
}
*/

?>