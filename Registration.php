<?php $pagename="Regisztráció";?>
<?php require_once("parts/htmlTop.php");?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="username" id="username" placeholder="felhasználónév"><br>
        <input type="password" name="password" id="password" placeholder="jelszó"><br>
        <input type="password" name="passwordre" id="passwordre" placeholder="jelszó még egyszer"><br>
        <input type="email" name="email" id="email" placeholder="email cím"><br>
        <input type="text" name="firstname" id="firstname" placeholder="vezetéknév"><br>
        <input type="text" name="lastname" id="lastname" placeholder="keresztnév"><br>
        Nem:
        <input type="radio" name="gender" value="female">nő
        <input type="radio" name="gender" value="male">férfi
        <input type="radio" name="gender" value="other">egyéb<br><br>

        <label for="birthdate">Adja meg a születési évét:</label>
        <input type="date" name="birthdate" id="birthdate" min="1900-01-01"><br><br>

        <input type="number" name="zipcode" id="zipcode" placeholder="irányító szám"><br>
        <input type="text" name="city" id="city" placeholder="város"><br>
        <input type="text" name="street" id="street" placeholder="utca és ház szám"><br>
        <input type="tel" name="phone" id="phone" placeholder="telefonszám"><br>

        <input type="submit" value="Elküld" name="newuser"><br>
    </form>
<?php require("DatabaseParts/Userdata_server_connect.php");?>


<?php require_once("parts/htmlBottom.php");?>