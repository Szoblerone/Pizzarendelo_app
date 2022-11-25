<?php 
session_start();
$sessionuserid = $_SESSION["userid"];
$pagename="Profil";
require_once("DatabaseParts/User_Login_verification.php");
require_once("parts/htmlTop.php");
require_once("parts/menu.php");
?>
<script defer src="script.js"></script>
<div class="tg-wrap"><table class="tg">
<tbody>
  <tr>
    <td class="tg-c3ow" colspan="3">Felhasználói adatok</td>
  </tr>
  <tr>
    <td class="tg-0pky">felhasználónév</td>
    <td class="tg-0lax"><?php echo $username=$_SESSION["username"];?></td>
    <td class="tg-0pky">
  <button data-modal-target="#modal1">Módosítás</button>
  <div class="modal" id="modal1">
    <div class="modal-header">
      <div class="title">Felhasználónév módosítás</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
      <form action="" method="post">
        <input type="text" name="usernamechange" id="usernamechange" placeholder="Új felhasználónév">
        <input type="button" value="Elküld">
      </form>
    </div>
  </div>
  <div id="overlay"></div></td>
  </tr>
  <tr>
    <td class="tg-0pky">jelszó</td>
    <td class="tg-0lax"><?php echo $password=$_SESSION["password"];?></td>
    <td class="tg-0pky">
   <button data-modal-target="#modal2">Módosítás</button>
  <div class="modal" id="modal2">
    <div class="modal-header">
      <div class="title">jelszó módosítás</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
      <form action="" method="post">
        <input type="text" name="usernamechange" id="usernamechange" placeholder="Új jelszó">
        <input type="button" value="Elküld">
      </form>
    </div>
  </div>
</td>
  </tr>
  <tr>
    <td class="tg-0pky">email</td>
    <td class="tg-0lax"><?php echo $email=$_SESSION["email"];?></td>
    <td class="tg-0pky"> <button data-modal-target="#modal3">Módosítás</button>
  <div class="modal" id="modal3">
    <div class="modal-header">
      <div class="title">email módosítás</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
      <form action="" method="post">
        <input type="text" name="usernamechange" id="usernamechange" placeholder="Új email">
        <input type="button" value="Elküld">
      </form>
    </div>
  </div></td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0lax"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0lax"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0lax"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0lax"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0lax"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0lax"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0lax"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0lax"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky"></td>
    <td class="tg-0lax"></td>
    <td class="tg-0pky"></td>
  </tr>
</tbody>
</table></div>




<?php
require("DatabaseParts/order_history.php");
require_once("parts/htmlBottom.php");
?>