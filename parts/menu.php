<nav>
    <div class="topnav">
        <a href="Index.html">Főoldal</a>
        <a href="Profile.php">Profil</a>
        <a href="Registration.php">Regisztráció</a>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
           <!-- Button to open the modal login form -->
            <button onclick="document.getElementById('id01').style.display='block'">Bejelentkezés</button>

            <!-- The Modal -->
            <div id="id01" class="modal">
            <span onclick="document.getElementById('id01').style.display='none'"
            class="close" title="Close Modal">&times;</span>

            <!-- Modal Content -->
            <form class="modal-content animate" action="/action_page.php">
                

                <div class="container" style="background-color: #00b6a1;">
                
                <input type="text" placeholder="Felhasználónév" name="uname" required><br>

                
                <input type="password" placeholder="Jelszó" name="psw" required>
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Mégse</button>

                <button type="submit">Bejelentkezés</button>

                
               
                </div>

                
              
                
                
            </form>
            </div>
        </form>
        
    </div>
</nav>