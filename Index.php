<?php 
session_start();
$pagename="Főoldal";?>
<?php require_once("parts/htmlTop.php");?>
<?php require_once("parts/menu.php");?>

<input type="text" id="search-input" placeholder="Keresés..." class="stickyHeader">

<div id="content">
<?php require("DatabaseParts/Pizza_display.php");?>
</div>

<?php require_once("parts/htmlBottom.php");?>