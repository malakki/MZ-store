<?php 
 session_start() ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Collegiate+One&family=DynaPuff&family=Great+Vibes&family=Kanit:wght@100&family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Collegiate+One&family=Dancing+Script&family=DynaPuff&family=Great+Vibes&family=Kanit:wght@100&family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Collegiate+One&family=Dancing+Script&family=DynaPuff&family=Great+Vibes&family=Kanit:wght@100&family=Lobster&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Alumni+Sans+Collegiate+One&family=Dancing+Script&family=DynaPuff&family=Great+Vibes&family=Kanit:wght@100&family=Lobster&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Alumni+Sans+Collegiate+One&family=Asap:ital,wght@1,500&family=Dancing+Script&family=DynaPuff&family=Great+Vibes&family=Kanit:wght@100&family=Lobster&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Alumni+Sans+Collegiate+One&family=Asap:ital,wght@1,500&family=Dancing+Script&family=DynaPuff&family=Great+Vibes&family=Kanit:wght@100&family=Libre+Baskerville:wght@400;700&family=Lobster&family=Oswald:wght@200;400&family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
<section id="container">
        <header>
            <div class="logo">
              <p>MZ store</p>
          </div>
  
          <!-- menu responsive -->
          <div class="menu-toggle"></div>
  
  <ul class="menu">
      <li><a href="skin.php">Skin care</a></li>
      <li><a href="makeup.php">makeup</a></li>
      <li><a href="hair.php">Hair</a></li>
      <li><a href="perfumes.php">Perfumes</a></li>
      <li><a href="body.php">Body care</a></li>
      <li><a href="panier.php" class="link">Panier<span><?=array_sum($_SESSION['panier'])?></span></a></li>
    
  </ul>                    
        </header>
        <div class="container-text">
        <h1>I hope your day is as nice as Your hair </h1>
    </div>
    <!-- afficher le nombre de produit dans le panier -->
    
    <section class="products_list">
        <?php 
        //inclure la page de connexion
        include_once "con_dbb.php";
        //afficher la liste des produits
         $req = mysqli_query($con, "SELECT * FROM hair");
         while($row = mysqli_fetch_assoc($req)){ 
        ?>
        <form action="" class="product">
            <div class="image_product">
                <img src="pictures/<?=$row['img']?>">
            </div>
            <div class="content">
                <h4 class="name"><?=$row['name']?></h4>
                <h2 class="price"><?=$row['price']?>DH</h2>
                <a href="ajouter_panier.php?id=<?=$row['id']?>" class="id_product">Add</a> 
            </div>
        </form>
        <?php } ?>
    </section>
</body>
<footer>
        <p>Zainab-Malak - &copy; MZ Store</p>
    </footer>
</html>