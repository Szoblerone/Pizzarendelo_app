<?php 
session_start();
$pagename="Főoldal";?>
<?php require_once("parts/htmlTop.php");?>
<?php require_once("parts/menu.php");?>

<input type="text" id="search-input" placeholder="Keresés..." class="stickyHeader">


<div id="content">

    <div class="product">
        <img src="images/magyarospizza.jpg">
        <p class="nev" data-text="Mindent Bele">Margaréta</p>
        <span class="leiras">-paradicsom szósz, papras dsad as df asika, oliva bogyó,  sajt ,pepperoni</span>
        <br>
        <div class="price">1990 Ft</div>
        <button class="more">Kosárba</button>
    </div>

    <div class="product">
        <img src="images/magyarospizza.jpg">
        <p class="nev" data-text="Mindent Bele">Sonkás</p>
        <span class="leiras">-paradicsom szósz, papras dsad as df asika, oliva bogyó,  sajt ,pepperoni</span>
        <div class="price">1990 Ft</div>
        <button class="more">Kosárba</button>
    </div>

    <div class="product">
        <img src="images/magyarospizza.jpg">
        <p class="nev" data-text="Mindent Bele">4 évszak</p>
        <span class="leiras">-paradicsom szósz, papras dsad as df asika, oliva bogyó,  sajt ,pepperoni</span>
        <div class="price">1990 Ft</div>
        <button class="more">Kosárba</button>
    </div>

    <div class="product">
        <img src="images/magyarospizza.jpg">
        <p class="nev" data-text="Mindent Bele">Húsimádó</p>
        <span class="leiras">-paradicsom szósz, papras dsad as df asika, oliva bogyó,  sajt ,pepperoni</span>
        <div class="price">1990 Ft</div>
        <button class="more">Kosárba</button>
    </div>

    <div class="product">
        <img src="images/magyarospizza.jpg">
        <p class="nev" data-text="Mindent Bele">4 sajtos</p>
        <span class="leiras">-paradicsom szósz, papras dsad as df asika, oliva bogyó,  sajt ,pepperoni</span>
        
        <div class="price">1990 Ft</div>
        <button class="more">Kosárba</button>
    </div>
</div>








<?php require_once("parts/htmlBottom.php");?>