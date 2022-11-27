<?php
session_start();
$pagename = "Főoldal";
require_once("DatabaseParts/User_Login_verification.php");
require_once("parts/htmlTop.php");
require_once("parts/menu.php");
?>

<script src="cart.js" defer></script>

<input type="text" id="search-input" placeholder="Keresés..." class="stickyHeader">

<div id="content">
    <?php require("DatabaseParts/Pizza_display.php"); ?>
</div>

<?php require_once("OrderFunction.php")?>

<div id="cart-div" class="uk-overflow-auto container">
    <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <table id="cart-table" class="uk-table uk-table-hover uk-table-middle uk-table-divider">
            <thead>
                <tr>
                    <th class="uk-table-shrink"></th>
                    <th class="uk-table-small sty">
                        <h3>Pizza</h3>
                    </th>
                    <th class="uk-table-small"></th>
                    <th class="uk-width-small sty">
                        <h3>Ár</h3>
                    </th>
                    <th class="uk-table-shrink uk-text-small sty">
                        <h3>Mennyiség</h3>
                    </th>
                    <th class="uk-table-shrink uk-text-small sty">
                        <h3>Összesen</h3>
                    </th>

                </tr>
            </thead>
            <tbody>
                <!-- -----------------Shopping cart Items will be here---------- -->

            </tbody>
            <tr>

                <td><img class="uk-preserve-width uk-border-circle" width="40" alt=""></td>
                <td class="uk-table-link">
                    <h3 class="item-name"><strong>Végösszeg</strong></h3>
                </td>
                <td class="uk-text-truncate">
                    <h3></h3>
                </td>
                <td class="uk-text-truncate">
                    <h3></h3>
                </td>
                <td class="uk-text-truncate grand-total">
                    <h3><strong>0 Ft</strong></h3>
                </td>
<<<<<<< Updated upstream
                <td class=""><input type="submit" name="order" value="Megrendel"></td>
=======
                <td class=""><input type="submit" name="order" value="Megrendel" onclick="alertFunction()"></td>
>>>>>>> Stashed changes

            </tr>
        </table>   
    </form>
</div>

<?php require_once("parts/htmlBottom.php"); ?>