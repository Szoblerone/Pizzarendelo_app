<?php
session_start();
$pagename="Profil";
require_once("parts/htmlTop.php");
require_once("parts/menu.php");
required("DatabaseParts\Userdata_server_connect.php");

require_once("parts/htmlBottom.php");
?>