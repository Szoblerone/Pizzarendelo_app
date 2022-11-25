<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $usernamedata=trim($_POST["username"]);
    $passworddata=trim($_POST["password"]);
    if (empty($usernamedata)) {
        echo "Felhasználó név megadása kötelező!";
        die();
    }
    if (empty($passworddata)) {
        echo "Jelszó megadása kötelező!";
        die();
    }
    require("DatabaseParts/Userdata_server_connect.php");
    try {
        $userid=$username=$password=$email=$firstname=$lastname=$gender=$birthdate=$zipcode=$city=$street=$phone=$isadmin="";
        $sql = "SELECT userid,username,email,password,firstname,lastname,gender,birthdate,zipcode,city,street,phone,IsAdmin FROM users WHERE username=:username AND password=:password";	// paraméterezett lekérdezés
        $queryKeres = $conn->prepare($sql);		// előkészített lekérdezés létrehozása
        $queryKeres->bindParam(":username",$usernamedata,PDO::PARAM_STR);	// paraméterhez érték kötése
        $queryKeres->bindParam(":password",$passworddata,PDO::PARAM_STR);
        $queryKeres->execute();					// lekérdezés lefuttatása
        if ($queryKeres->rowCount()>=1){		// ha legalább egy soros az eredmény (talált ilyen terméket)
            $queryKeres->bindColumn("userid",$userid);
            $queryKeres->bindColumn("username",$username);	// az eredmény értékeihez változókat kötünk
            $queryKeres->bindColumn("email",$email);
            $queryKeres->bindColumn("password",$password);
            $queryKeres->bindColumn("firstname",$firstname);
            $queryKeres->bindColumn("lastname",$lastname);
            $queryKeres->bindColumn("gender",$gender);
            $queryKeres->bindColumn("birthdate",$birthdate);
            $queryKeres->bindColumn("zipcode",$zipcode);
            $queryKeres->bindColumn("city",$city);
            $queryKeres->bindColumn("street",$street);
            $queryKeres->bindColumn("phone",$phone);
            $queryKeres->bindColumn("IsAdmin",$isadmin);
            while ($row = $queryKeres->fetch(PDO::FETCH_BOUND)){	// a változókba olvassuk ki az eredményt soronként
            $_SESSION["userid"] = $userid;
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            $_SESSION["email"] = $email;
            $_SESSION["firstname"] = $firstname;
            $_SESSION["lastname"] = $lastname;
            $_SESSION["gender"] = $gender;
            $_SESSION["birthdate"] = $birthdate;
            $_SESSION["zipcode"] = $zipcode;
            $_SESSION["city"] = $city;
            $_SESSION["street"] = $street;
            $_SESSION["phone"] = $phone;
            $_SESSION["isadmin"]=$isadmin;
            echo "<p>Üdvözöljük kedves ".$firstname." ".$lastname."!</p>";
            }
        }else {
            echo "<p>Hibás a felhasználónév vagy jelszó!</p>\n";
        }
    }
    catch (PDOException $e){
        echo "<p class='error'>Adatbázis lekérdezési hiba: ".$e->getMessage()."</p>\n";
    }
    catch (Exception $e){
        echo "<p class='error'>Hiba: ".$e->getMessage()."</p>\n";
    }
}
?>