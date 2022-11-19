<?php 
session_start();
$pagename="Főoldal";?>
<?php require_once("parts/htmlTop.php");?>
<?php require_once("parts/menu.php");?>
<script src="cart.js" defer></script>

<input type="text" id="search-input" placeholder="Keresés..." class="stickyHeader">

<div id="content">
<?php require("DatabaseParts/Pizza_display.php");?>
</div>

<div id="cart-div" class="uk-overflow-auto container" >
        <table id="cart-table" class="uk-table uk-table-hover uk-table-middle uk-table-divider">
            <thead>
                <tr>
                    <th class="uk-table-shrink"></th>
                    <th class="uk-table-small sty"><h3>Pizza</h3></th>
                    <th class="uk-table-small"></th>
                    <th class="uk-width-small sty"><h3>Ár</h3></th>
                    <th class="uk-table-shrink uk-text-small sty"><h3>Mennyiség</h3></th>
                    <th class="uk-table-shrink uk-text-small sty"><h3>Összesen</h3></th>

                </tr>
            </thead>
            <tbody>


            </tbody>
            <tr>
              <td><input class="uk-checkbox" type="checkbox"></td>
              <td><img class="uk-preserve-width uk-border-circle"  width="40" alt=""></td>
              <td class="uk-table-link">
                  <h3 class = "item-name"><strong>Végösszeg</strong></h3>
              </td>
              <td class="uk-text-truncate"><h3></h3></td>
              <td class="uk-text-truncate"><h3></h3></td>
              <td class="uk-text-truncate grand-total"><h3><strong>0 Ft</strong></h3></td>
              <td class=""><input class="order" type="button" value="Megrendel"></td>
              
          </tr>
        </table>
    </div>
   
<?php require_once("parts/htmlBottom.php");?>