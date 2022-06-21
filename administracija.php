<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="article.css">
    <title>This</title>
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

    <br><br>
    <section class="section">
        <form action="administracija.php" method="post" style="margin-left: 20%;">
            <label for="">Unesite korisničko ime:</label><br><br>
            <input type="text" name="username"><br><br>
            <label for="">Unesite lozinku:</label><br><br>
            <input type="password" name="lozinka"><br><br>
            <button type="submit" name="prijava">Prijavi se!</button>
        </form>
    </section>

    
<?php
    session_start();
    include 'connect.php';
    define('UPLPATH', 'slike/');
    $uspjesnaPrijava = false;

    if (isset($_POST['prijava'])) {
        $prijavaImeKorisnika = $_POST['username'];
        $prijavaLozinkaKorisnika = $_POST['lozinka'];
        $sql = "SELECT username, password, razina FROM korisnik WHERE username = ?";
        $stmt = mysqli_stmt_init($dbc);
        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, 's', $prijavaImeKorisnika);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
        }
        mysqli_stmt_bind_result($stmt, $imeKorisnika, $lozinkaKorisnika, 
        $levelKorisnika);
        mysqli_stmt_fetch($stmt);
            
        if (password_verify($_POST['lozinka'], $lozinkaKorisnika) && 
            mysqli_stmt_num_rows($stmt) > 0) {
            $uspjesnaPrijava = true;
            if($levelKorisnika == 1) {
                $admin = true;
                }
            else {
                $admin = false;
                }
                
            $_SESSION['$username'] = $imeKorisnika;
            $_SESSION['$level'] = $levelKorisnika;
        }
        else {
            $uspjesnaPrijava = false;
        }
    }
    if (($uspjesnaPrijava == true && $admin == true) || (isset($_POST['$username'])) && $_SESSION['$level'] == 1){
        $query = "SELECT * FROM article";
        $result = mysqli_query($dbc, $query);
        while($row = mysqli_fetch_array($result)) {
        echo '<section class="section">
        <article class="article" style="margin-left: 20%;">';
        
        echo '<form enctype="multipart/form-data" action="" method="POST">
                <div class="form-item">
                    <label for="title">Naslov vjesti:</label>
                    <div class="form-field">
                        <input type="text" name="title" class="form-field-textual"  value="'.$row['naslov'].'">
                    </div>
                </div>
                <div class="form-item">
                    <label for="about">Kratki sadržaj vijesti (do 50 znakova):</label>
                    <div class="form-field">
                        <textarea name="about" id="" cols="30" rows="10" class="form-field-textual">'.$row['sazetak'].'</textarea>
                    </div>
                </div>
                <div class="form-item">
                    <label for="content">Sadržaj vijesti:</label>
                    <div class="form-field">
                        <textarea name="content" id="" cols="30" rows="10" class="form-field-textual">'.$row['tekst'].'</textarea>
                    </div>
                </div>
                <div class="form-item">
                    <label for="pphoto">Slika:</label>
                    <div class="form-field">
                        <input type="file" class="input-text" id="pphoto" value="'.$row['slika'].'" name="pphoto"/> <br><img src="' . UPLPATH . $row['slika'] . '" width=100px>
                    </div>
                </div>
                <div class="form-item">
                    <label for="category">Kategorija vijesti:</label>
                    <div class="form-field">
                        <select name="category" id="" class="form-field-textual" value="'.$row['kategorija'].'">
                            <option value="sport">Sport</option>
                            <option value="kultura">Kultura</option>
                        </select>
                    </div>
                </div>
                <div class="form-item">
                    <label>Spremiti u arhivu: 
                <div class="form-field">';
                if($row['arhiva'] == 0) {
                    echo '<input type="checkbox" name="archive" id="archive"/> Arhiviraj?';
                }
                else {
                    echo '<input type="checkbox" name="archive" id="archive" checked/> Arhiviraj?';
                }
            echo '</div>
                </label>
                </div>
                </div>
                <div class="form-item">
                <input type="hidden" name="id" class="form-field-textual" value="'.$row['id'].'">
                <button type="reset" value="Poništi">Poništi</button>
                <button type="submit" name="update" value="Prihvati"> Izmjeni</button>
                <button type="submit" name="delete" value="Izbriši"> Izbriši</button>
                </div>
                </form>';

                echo '</article>
                </section>';

                echo '<br>';
    }
    if(isset($_POST['delete'])){
        $id=$_POST['id'];
        $query = "DELETE FROM article WHERE id=$id ";
        $result = mysqli_query($dbc, $query);
    }
    if(isset($_POST['update'])){
    $picture = $_FILES['pphoto']['name'];
    $title=$_POST['title'];
    $about=$_POST['about'];
    $content=$_POST['content'];
    $category=$_POST['category'];
    if(isset($_POST['archive'])){
        $archive=1;
    }else{
        $archive=0;
    }
    $target_dir = $picture;
    move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir);
    $id=$_POST['id'];
    $query = "UPDATE article SET naslov='$title', sazetak='$about', tekst='$content', 
    slika='$picture', kategorija='$category', arhiva='$archive' WHERE id=$id ";
    $result = mysqli_query($dbc, $query);
    }
}
else if ($uspjesnaPrijava == true && $admin == false) {
    echo '<p>Bok ' . $imeKorisnika . '! Uspješno ste prijavljeni, ali niste administrator.</p>';
    }
else if (isset($_POST['$username']) && $_SESSION['$level'] == 0) {
    echo 'Bok ' . $_SESSION['$username'] . '! Uspješno ste prijavljeni, ali niste administrator.';
    echo '<a href="administracija.php">Registrirajte se.</a>';
    }
else if ($uspjesnaPrijava == false) {
    echo "Not cool, brah, ";
    echo '<a href="registracija.php">Registrirajte se.</a>';
}
?>
        
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
</html>


