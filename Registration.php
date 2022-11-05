<?php require_once("parts/htmlTop.php");?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="username" id="username"><br>
        <label for="username">felhasználónév: </label><br><br>
        <input type="password" name="password" id="password"><br>
        <input type="password" name="passwordre" id="passwordre"><br>
        <input type="email" name="email" id="email"><br>
        <input type="text" name="firstname" id="firstname"><br>
        <input type="text" name="lastname" id="lastname"><br>
        Nem:
        <input type="radio" name="gender" value="female">nő
        <input type="radio" name="gender" value="male">férfi
        <input type="radio" name="gender" value="other">egyéb

        <input type="number" name="zipcode" id="zipcode"><br>
        <input type="text" name="city" id="city"><br>
        <input type="text" name="street" id="street"><br>
        <input type="tel" name="phone" id="phone"><br>

        <input type="submit" value="submit" name="newuser"><br>
    </form>
<?php require("DatabaseParts/Userdata_server_connect.php");?>


<?php require_once("parts/htmlBottom.php");?>