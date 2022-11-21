<?php
if(isset($_SESSION["username"])){
    echo "<a href=Profile.php>Profil</a>";
    ?><button id="user" name="user" onclick="showHint()" >Kijelentkezés</button>
    <script>
        function showHint(){
          <?php session_destroy(); ?>
        }
    </script>
    <?php
}else{
   ?> 
     <button data-modal-target="#modal">Bejelentkezés</button>
  <div class="modal" id="modal">
    <div class="modal-header">
      <div class="title">Bejelentkezés</div>
      <button data-close-button class="close-button">&times;</button>
    </div>
    <div class="modal-body">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <form class="modal-content animate" action="/action_page.php">
         <div class="container" style="background-color: #Ba181b;">
         <input type="text" name="username" placeholder="Felhasználónév" required><br>
         <input type="password" name="password" placeholder="Jelszó" required>
        <button type="submit" name="user">Bejelentkezés</button>
         </div>
     </form>
</form>
    </div>
  </div>
  <div id="overlay"></div>
<?php
}
?>