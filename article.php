<?php
    include 'connect.php';
    define('UPLPATH', 'slike/');
    $id=$_GET['id'];
    $query = "SELECT * FROM article WHERE id=$id";
    $result = mysqli_query($dbc, $query);
    $row = mysqli_fetch_array($result);


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
        <img src="BZ_logo.svg.png" alt="" title="BZ_logo" class="logo">
        <nav class="nav">
            <a href="index.php">HOME</a>
            <a href="kategorija.php?id=sport" class="">SPORT</a>     
            <a href="kategorija.php?id=kultura" class="">CULTURE</a> 
            <a href="administracija.php">ADMINISTRATION </a> 
            <a href="unos.php">ADD NEWS</a>   
        </nav>
    </header>

    <br><br>

    <section class="section">
        <article class="article">
            <?php
                echo $row['kategorija'];
                echo "<br>";
                echo $row['datum']
            ?>
            <h1 class="heading">
                <?php
                    echo $row['naslov'];
                ?>
            </h1>
            
            <img src="<?php echo UPLPATH . $row['slika']; ?>" class="image">
            <h1 class="heading2"><?php
                echo $row['sazetak'];
            ?></h1> 
            <p class="p"> <?php echo $row['tekst']; ?> </p>
        </article>
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
</html>