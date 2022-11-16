<nav>
    <div class="topnav">
        <a href="Index.php">Főoldal</a>
        <a href="Registration.php">Regisztráció</a>
        <?php require_once("parts/session.php");?>
        
      <?php require("DatabaseParts/User_login_verification.php");?>  
    </div>
</nav>