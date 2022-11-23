<?php 
session_start();
$pagename="Folyamatban lévő rendelések";
require_once("DatabaseParts/User_Login_verification.php");
require_once("parts/htmlTop.php");
require_once("parts/menu.php");

require("DatabaseParts/Order_display.php");

require_once("parts/htmlBottom.php");
?>