<?php 
session_start();
$pagename="Regisztráció";
require_once("DatabaseParts/User_Login_verification.php");
require_once("parts/htmlTop.php");
require_once("parts/menu.php");
?>
<div class="registration-form">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="username" id="username" placeholder="felhasználónév"><br>
        <input type="password" name="password" id="password" placeholder="jelszó">
        <input type="password" name="passwordre" id="passwordre" placeholder="jelszó mégegyszer"><br>
        <input type="email" name="email" id="email" placeholder="email"><br>
        <input type="text" name="firstname" id="firstname" placeholder="vezetéknév">
        <input type="text" name="lastname" id="lastname" placeholder="keresztnév"><br>
        Nem:
        <input type="radio" name="gender" value="female" checked>nő
        <input type="radio" name="gender" value="male">férfi
        <input type="radio" name="gender" value="other">egyéb<br>

        <input type="date" name="birthdate" id="birthdate"><br>
        <input type="number" name="zipcode" id="zipcode" placeholder="irányítószám">
        <input type="text" name="city" id="city" placeholder="város">
        <input type="text" name="street" id="street" placeholder="utca és házszám"><br>
        <input type="tel" name="phone" id="phone" placeholder="telefonszám"><br>

        <input type="submit" value="Elküld" name="newuser">
    </form></div>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $usernamedata=trim($_POST["username"]);
    $passworddata=trim($_POST["password"]);
    $passwordredata=trim($_POST["passwordre"]);
    $emaildata=trim($_POST["email"]);
    $firstnamedata=trim($_POST["firstname"]);
    $lastnamedata=trim($_POST["lastname"]);
    $genderdata=$_POST["gender"];
    $birthdatedata=$_POST["birthdate"];
    $zipcodedata=trim($_POST["zipcode"]);
    $citydata=trim($_POST["city"]);
    $streetdata=trim($_POST["street"]);
    $phonedata=trim($_POST["phone"]);

    if (empty($usernamedata)) {
        echo "Felhasználó név megadása kötelező!";
        die();
    }
    if(5>$usernamedata && 15<$usernamedata){ 
        echo "A felhasználó név nem megfelelő hossszúságú!";
        die();
    }
    $username=$usernamedata;
    if (empty($passworddata)) {
        echo "Jelszó megadása kötelező!";
        die();
    }
    if(5>$passworddata && 15<$passworddata){ 
        echo "A jelszó nem megfelelő hossszúságú!";
        die();
    }
    if ($passworddata!=$passwordredata) {
        echo "A két jelszó nem eggyezik meg!";
        die();
    }
    $password=$passworddata;
    if (!filter_var($emaildata, FILTER_VALIDATE_EMAIL)) {
        echo "Nem jó email formátum!";
        die();
    }
    $email=$emaildata;
    if(empty($firstnamedata)){
        echo "A vezetéknév nem lehet üres!";
        die();
    }
    if(3>$firstnamedata && 20<$firstnamedata){ 
        echo "A vezetéknév nem megfelelő hosszúságú!";
        die();
    }
    $firstname=$firstnamedata;
    if(empty($lastnamedata)){
        echo "A keresztnév nem lehet üres!";
        die();
    }
    if(3>$lastnamedata && 20<$lastnamedata){ 
        echo "A keresztnév nem megfelelő hosszúságú!";
        die();
    }
    $lastname=$lastnamedata;
    if (empty($genderdata)) {
        echo "Kötelező nemet választani!";
        die();
    }
    $gender=$genderdata;
    if (empty($birthdatedata)) {
        echo "Kötelező a születési időt megadni!";
        die();
    }
    $birthdate=$birthdatedata;
    if (empty($zipcodedata)) {
        echo"Az irányítószám nem lehet üres!";
        die();
    }
    if ($zipcodedata<1000 || $zipcodedata>9999) {
        echo"Nem jó irányítószám nem jó formátumú!";
        die();
    }
    $zipcode=$zipcodedata;
    if (empty($citydata)) {
        echo "A város nem lehet üres!";
        die();
    }
    $city=$citydata;
    if(empty($streetdata)){
        echo "Az utca és házszám nem lehet üres!";
        die();
    }
    $street=$streetdata;
    if (empty($phonedata)) {
        echo "A telefonszám nem lehet üres!";
        die();
    }
    if(!preg_match("/^[0-9]{3}[0-9]{4}[0-9]{4}$/", $phonedata)) {
        echo "Nem jó telefonszám formátum!";
        die();
    }
    $phone=$phonedata;
    require("DatabaseParts/Userdata_server_connect.php");
    try {
        $sql = "SELECT username FROM users WHERE username=:username";	// paraméterezett lekérdezés
        $queryKeres = $conn->prepare($sql);		// előkészített lekérdezés létrehozása
        $queryKeres->bindParam(":username",$username,PDO::PARAM_STR);	// paraméterhez érték kötése
        $queryKeres->execute();					// lekérdezés lefuttatása
        if ($queryKeres->rowCount()>=1){		// ha legalább egy soros az eredmény (talált ilyen terméket)
            $queryKeres->bindColumn("username",$username);	// az eredmény értékeihez változókat kötünk
            while ($row = $queryKeres->fetch(PDO::FETCH_BOUND)){	// a változókba olvassuk ki az eredményt soronként
            echo "A felhasználónév már foglalt!";
            die();
            }
    }
    }
    catch (PDOException $e){
        echo "<p class='error'>Adatbázis lekérdezési hiba: ".$e->getMessage()."</p>\n";
    }
    catch (Exception $e){
        echo "<p class='error'>Hiba: ".$e->getMessage()."</p>\n";
    }
    try {
        $sql = "SELECT email FROM users WHERE email=:email";	// paraméterezett lekérdezés
        $queryKeres = $conn->prepare($sql);		// előkészített lekérdezés létrehozása
        $queryKeres->bindParam(":email",$email,PDO::PARAM_STR);	// paraméterhez érték kötése
        $queryKeres->execute();					// lekérdezés lefuttatása
        if ($queryKeres->rowCount()>=1){		// ha legalább egy soros az eredmény (talált ilyen terméket)
            $queryKeres->bindColumn("email",$email);	// az eredmény értékeihez változókat kötünk
            while ($row = $queryKeres->fetch(PDO::FETCH_BOUND)){	// a változókba olvassuk ki az eredményt soronként
            echo "Az email cím már foglalt!";
            die();
            }
    }
    }
    catch (PDOException $e){
        echo "<p class='error'>Adatbázis lekérdezési hiba: ".$e->getMessage()."</p>\n";
    }
    catch (Exception $e){
        echo "<p class='error'>Hiba: ".$e->getMessage()."</p>\n";
    }
    try {
			$sql = "INSERT INTO users (username,password,email,firstname,lastname,gender,birthdate,zipcode,city,street,phone)
            VALUES (:username,:password,:email,:firstname,:lastname,:gender,:birthdate,:zipcode,:city,:street,:phone) ";	// paraméterezett lekérdezés
			$queryMent = $conn->prepare($sql);							// előkészített lekérdezés létrehozása
			$queryMent->bindParam(":username",$username,PDO::PARAM_STR);			// paraméterekhez érték rendelése
            $queryMent->bindParam(":password",$password,PDO::PARAM_STR);			// paraméterekhez érték rendelése
            $queryMent->bindParam(":email",$email,PDO::PARAM_STR);			// paraméterekhez érték rendelése
            $queryMent->bindParam(":firstname",$firstname,PDO::PARAM_STR);			// paraméterekhez érték rendelése
            $queryMent->bindParam(":lastname",$lastname,PDO::PARAM_STR);			// paraméterekhez érték rendelése
            $queryMent->bindParam(":gender",$gender,PDO::PARAM_STR);			// paraméterekhez érték rendelése
            $queryMent->bindParam(":birthdate",$birthdate,PDO::PARAM_STR);			// paraméterekhez érték rendelése
            $queryMent->bindParam(":zipcode",$zipcode,PDO::PARAM_INT);			// paraméterekhez érték rendelése
            $queryMent->bindParam(":city",$city,PDO::PARAM_STR);			// paraméterekhez érték rendelése
            $queryMent->bindParam(":street",$street,PDO::PARAM_STR);			// paraméterekhez érték rendelése
            $queryMent->bindParam(":phone",$phone,PDO::PARAM_STR);			// paraméterekhez érték rendelése
			$queryMent->execute();										// lekérdezés lefuttatása
            echo "Új felhasználó hozzá adva!";
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
		}
		catch (PDOException $e){
			echo "<p class='error'>Adatbázis mentési hiba: ".$e->getMessage()."</p>\n";
		}
		catch (Exception $e){
			echo "<p class='error'>Hiba: ".$e->getMessage()."</p>\n";
		}
    }
require_once("parts/htmlBottom.php");
?>