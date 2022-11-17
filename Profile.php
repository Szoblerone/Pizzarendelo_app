<?php
session_start();
$pagename="Profil";
require_once("parts/htmlTop.php");
require_once("parts/menu.php");
require("DatabaseParts/Userdata_server_connect.php");

?>


<style type="text/css">
.tg  {border-collapse:collapse;border-color:#C44D58;border-spacing:0;margin:50px auto;}
.tg td{background-color:#F9CDAD;border-color:#C44D58;border-style:solid;border-width:0px;color:#002b36;
  font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{background-color:#FE4365;border-color:#C44D58;border-style:solid;border-width:0px;color:#fdf6e3;
  font-family:Arial, sans-serif;font-size:14px;font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
@media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}
</style>
<div class="tg-wrap"><table class="tg">
<tbody>
  <tr>
    <td class="tg-c3ow" colspan="3">Felhasználói adatok</td>
  </tr>
  <tr>
    <td class="tg-0pky">felhasználónév</td>
    <td class="tg-0lax">Sanyika</td>
    <td class="tg-0pky"><!-- Button to open the modal login form -->
     <button class="change" onclick="document.getElementById('id02').style.display='block'">modosítás</button>
     <div id="id02" class="modal">
     <span onclick="document.getElementById('id02').style.display='none'"
     class="close" title="Close Modal">&times;</span>
     <form class="modal-content animate" action="/action_page.php">
         <div class="container" style="background-color: #Ba181b;">
         <input type="text" name="username" placeholder="Felhasználónév" required><br>
         <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Mégse</button>
             <button type="submit" name="user">Bejelentkezés</button>
         </div>
     </form>
     </div>
    </td>
  </tr>
  <tr>
    <td class="tg-0pky">jelszó</td>
    <td class="tg-0lax"></td>
    <td class="tg-0pky">     
      <button class="change" onclick="document.getElementById('id03').style.display='block'">modosítás</button>
     <div id="id03" class="modal">
     <span onclick="document.getElementById('id03').style.display='none'"
     class="close" title="Close Modal">&times;</span>
     <form class="modal-content animate" action="/action_page.php">
         <div class="container" style="background-color: #Ba181b;">
         <input type="text" name="username" placeholder="Felhasználónév" required><br>
         <input type="password" name="password" placeholder="Jelszó" required>
         <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Mégse</button>
             <button type="submit" name="user">Bejelentkezés</button>
         </div>
     </form>
     </div></td>
  </tr>
  <tr>
    <td class="tg-0pky">email</td>
    <td class="tg-0lax"></td>
    <td class="tg-0pky">módosítás</td>
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
require_once("parts/htmlBottom.php");
?>