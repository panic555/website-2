<?php
    include 'connect.php';
    define('UPLPATH', 'slike/');
?>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
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
    <br>    
    <section class="section">
        <article class="orangeHline" style="height: fit-content ;">
            <h3 class="heading1">SPORT ></h3>
        </article>
        
            <?php
                $query = "SELECT * FROM article WHERE arhiva=0 AND kategorija='sport' LIMIT 3";
                $result = mysqli_query($dbc, $query);
                $i=0;
                while($row = mysqli_fetch_array($result)) {
                    echo '<article class="article">';
                    echo '<img class="image" src="' . UPLPATH . $row['slika'] . '">';
                    echo '<h5 class="heading2">';
                    echo '<a class="a0" href="article.php?id='.$row['id'].'">';
                    echo $row['naslov'];
                    echo '</a></h5>';
                    echo '<h4 class="heading3">' . $row['sazetak'] . '</h4>';
                    echo '</article>';
                }
            ?> 
        </article>
    </section>
    <br>
    <section class="section">
        <article class="redHLine" style="height: fit-content ;">
            <h3 class="heading1">CULTURE></h3>
        </article>
        
            <?php
                $query = "SELECT * FROM article WHERE arhiva=0 AND kategorija='kultura' LIMIT 3";
                $result = mysqli_query($dbc, $query);
                $i=0;
                while($row = mysqli_fetch_array($result)) {
                    echo '<article class="article">';
                    echo '<img class="image" src="' . UPLPATH . $row['slika'] . '">';
                    echo '<h5 class="heading2">';
                    echo '<a class="a1" href="article.php?id='.$row['id'].'">';
                    echo $row['naslov'];
                    echo '</a></h5>';
                    echo '<h4 class="heading3">' . $row['sazetak'] . '</h4>';
                    echo '</article>';
                }
            ?> 
        </article>
    </section>
    <br>
    <section class="section">
        <p class="p">This sentence has zero connection with the web page itself.</p>
    </section>
    <br><br><br>
    <footer class="footer">
        <section class="section1">
            
        </section>
        
    </footer>
</body>
</html>