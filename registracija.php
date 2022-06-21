<?php
    $msg = '';
?>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript">
        function validacija(event) {
 
            var slanjeForme = true;
    

            var poljeIme = document.getElementById("ime");
            var ime = document.getElementById("ime").value;
            if (ime.length == 0) {
                slanjeForme = false;
                poljeIme.style.border="1px dashed red";
                document.getElementById("porukaIme").innerHTML="<br>Unesite ime!<br>";
            } 
            else {
                poljeIme.style.border="1px solid green";
                document.getElementById("porukaIme").innerHTML="";
                }
    
            var poljePrezime = document.getElementById("prezime");
            var prezime = document.getElementById("prezime").value;
            if (prezime.length == 0) {
                slanjeForme = false;
                poljePrezime.style.border="1px dashed red";
                document.getElementById("porukaPrezime").innerHTML="<br>Unesite Prezime!<br>";
            }
            else {
                poljePrezime.style.border="1px solid green";
                document.getElementById("porukaPrezime").innerHTML="";
            }
    
    
            var poljeUsername = document.getElementById("username");
            var username = document.getElementById("username").value;
            if (username.length == 0) {
                slanjeForme = false;
                poljeUsername.style.border="1px dashed red";
                document.getElementById("porukaUsername").innerHTML="<br>Unesite korisničko ime!<br>";
            }
            else {
                poljeUsername.style.border="1px solid green";
                document.getElementById("porukaUsername").innerHTML="";
            }
    
    
            var poljePass = document.getElementById("pass");
            var pass = document.getElementById("pass").value;
            var poljePassRep = document.getElementById("passRep");
            var passRep = document.getElementById("passRep").value;
            if (pass.length == 0 || passRep.length == 0 || pass != passRep) {
                slanjeForme = false;
                poljePass.style.border="1px dashed red";
                poljePassRep.style.border="1px dashed red";
                document.getElementById("porukaPass").innerHTML="<br>Lozinke nisu iste!<br>";
                document.getElementById("porukaPassRep").innerHTML="<br>Lozinke nisu iste!<br>";
            } 
            else {
                poljePass.style.border="1px solid green";
                poljePassRep.style.border="1px solid green";
                document.getElementById("porukaPass").innerHTML="";
                document.getElementById("porukaPassRep").innerHTML="";
            }
    
            if (slanjeForme != true) {
                event.preventDefault();
            }
        };
 
     </script>
</head>
<body class="background">
    <header class="header">
        <hr class="redline">
        <img src="slike/BZ_logo.svg.png" alt="" title="BZ_logo" class="logo">
        <nav class="nav">
            <a href="index.php">HOME</a>
            <a href="kategorija.php?id=sport" class="">SPORT</a>     
            <a href="kategorija.php?id=kultura" class="">SPORT</a> 
            <a href="administracija.php">ADMINISTRATION </a> 
            <a href="unos.php">ADD NEWS</a>  
        </nav>
    </header>
    <br>    
    <section role="main" class="section">
        <article class="article" style="margin-left: 20%;">
            <form enctype="multipart/form-data" action="" method="POST">
                <div class="form-item">
                    <span id="porukaIme" class="bojaPoruke"></span>
                    <label for="title">Ime: </label>
                    <div class="form-field">
                        <input type="text" name="ime" id="ime" class="form-field-textual">
                    </div>
                </div>
                <div class="form-item">
                    <span id="porukaPrezime" class="bojaPoruke"></span>
                    <label for="about">Prezime: </label>
                    <div class="form-field">
                        <input type="text" name="prezime" id="prezime" class="form-field-textual">
                    </div>
                </div>
                <div class="form-item">
                    <span id="porukaUsername" class="bojaPoruke"></span>
                    
                    <label for="content">Korisničko ime:</label>
    
                    <?php echo '<br><span class="bojaPoruke">'.$msg.'</span>'; ?>
                    <div class="form-field">
                        <input type="text" name="username" id="username" class="form-field-textual">
                    </div>
                </div>
                <div class="form-item">
                    <span id="porukaPass" class="bojaPoruke"></span>
                    <label for="pphoto">Lozinka: </label>
                    <div class="form-field">
                        <input type="password" name="pass" id="pass" class="form-field-textual">
                    </div>
                </div>
                <div class="form-item">
                    <span id="porukaPassRep" class="bojaPoruke"></span>
                    <label for="pphoto">Ponovite lozinku: </label>
                    <div class="form-field">
                        <input type="password" name="passRep" id="passRep" class="form-field-textual">
                    </div>
                </div>
    
                <div class="form-item">
                    <button type="submit" value="Prijava" id="slanje" name="slanje" onclick="validacija(event)">Prijava</button>
                </div>
            </form>
    
        </section>
        <br>
        <section class="section">
            <p class="p1">This is what it sounds like when mortals die</p>
        </section>
        <br><br><br><br>
        <footer class="footer">
            <section class="section1">
                
            </section>
            
        </footer>
</body>
<?php   
    include 'connect.php';

    if(isset($_POST['ime'])){
        $ime = $_POST['ime'];
    }
    if(isset($_POST['prezime'])){
        $prezime = $_POST['prezime'];
    }
    if(isset($_POST['username'])){
        $username = $_POST['username'];
    }
    if(isset($_POST['pass'])){
        $lozinka = $_POST['pass'];
        $hashed_password = password_hash($lozinka, CRYPT_BLOWFISH);
    }
    
    
    $razina = 0;
    $registriranKorisnik = '';
    $sql = "SELECT username FROM korisnik WHERE username = ?";
    $stmt = mysqli_stmt_init($dbc);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, 's', $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
    }
    if(mysqli_stmt_num_rows($stmt) > 0){
        echo 'Korisničko ime već postoji!';
    }
    else{
        if(isset($_POST['slanje'])){
            $sql = "INSERT INTO korisnik (ime, prezime, username, password, 
            razina)VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($dbc);
            if (mysqli_stmt_prepare($stmt, $sql)) {
                mysqli_stmt_bind_param($stmt, 'ssssd', $ime, $prezime, $username, 
                $hashed_password, $razina);
                mysqli_stmt_execute($stmt);
                $registriranKorisnik = true;
            }
        }

    }
    mysqli_close($dbc);

 
    if($registriranKorisnik == true) {
        echo '<p>Korisnik je uspješno registriran!</p>';
        echo '<br>';
        echo "Cool, brah, ";
        echo '<a href="administracija.php">Prijavite se</a>';
    }
?>
 
    
    
 <?php
 
 ?>

