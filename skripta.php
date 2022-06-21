<?php
    if (isset($_POST['title'])){
        $title=$_POST['title'];
    }
    if (isset($_POST['about'])){
        $about=$_POST['about'];
    }
    if (isset($_POST['content'])){
        $content=$_POST['content'];
    }
    if (isset($_POST['pphoto'])){
        $image=$_POST['pphoto'];
    }
    if (isset($_POST['category']) || $_POST['category'] = "Odabir kategorije "){
        $category=$_POST['category'];
    }
    include 'connect.php';

    $picture = $_FILES['pphoto']['name'];
    $date=date('d.m.Y.');

    if(isset($_POST['archive'])){
    $archive=1;
}
    else{
    $archive=0;
}
    $target_dir = $picture;   

    move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir);
    $query = "INSERT INTO article (datum, naslov, sazetak, tekst, slika, kategorija, 
    arhiva ) VALUES ('$date', '$title', '$about', '$content', '$picture', 
    '$category', '$archive')";

    $result = mysqli_query($dbc, $query) or die('Error querying databese.');
    mysqli_close($dbc);
        
?>
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
            <h1 class="heading">
                <?php echo $title;
                ?>
            </h1>
            <img src="<?php echo $picture; ?>" class="image">
            <br>
            <h1 class="heading2"><?php
                 echo $about;?></h1>
            <p class="p"><?php
                echo $content;?>
            </p>
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


