<?php
    include 'connect.php';
    define('UPLPATH', 'slike/');
    $kategorija=$_GET['id'];
    $query = "SELECT * FROM article WHERE arhiva=0 AND kategorija='$kategorija'";
    $result = mysqli_query($dbc, $query);


?>
<!DOCTYPE html>
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
            <a href="kategorija.php?id=kultura" class="">CULTURE</a> 
            <a href="administracija.php">ADMINISTRATION </a> 
            <a href="unos.php">ADD NEWS</a>   
        </nav>
    </header>

    <br><br>

    
    <?php
        $query = "SELECT * FROM article WHERE arhiva=0 AND kategorija='kultura'";
        $i=0;
        while($row = mysqli_fetch_array($result)) {
            echo '<section class="section">';
            echo '<article class="article">';
            echo '<img class="image" src="' . UPLPATH . $row['slika'] . '">';
            echo '<h5 class="heading2">';
            echo '<a href="article.php?id='.$row['id'].'">';
            echo $row['naslov'];
            echo '</a></h5>';
            echo '<h4 class="p">' . $row['sazetak'] . '</h4>';
            echo '</article>';
            echo '</section>';
            echo '<br>';
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