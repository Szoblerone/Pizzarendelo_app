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
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <!-- Button to open the modal login form -->
     <button onclick="document.getElementById('id01').style.display='block'">Bejelentkezés</button>
    
     <!-- The Modal -->
     <div id="id01" class="modal">
     <span onclick="document.getElementById('id01').style.display='none'"
     class="close" title="Close Modal">&times;</span>
    
     <!-- Modal Content -->
     <form class="modal-content animate" action="/action_page.php">
         
    
         <div class="container" style="background-color: #Ba181b;">
         
         <input type="text" name="username" placeholder="Felhasználónév" required><br>
         <input type="password" name="password" placeholder="Jelszó" required>
    
         <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Mégse</button>
             <button type="submit" name="user">Bejelentkezés</button>
         </div>
     </form>
     </div>
    </form>
<?php
}
?>