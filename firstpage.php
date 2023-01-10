<?php include('include/header.php');?>

  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MZ Store</title>
    <link rel="stylesheet" href="firstpage.css">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Collegiate+One&family=DynaPuff&family=Great+Vibes&family=Kanit:wght@100&family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Collegiate+One&family=Dancing+Script&family=DynaPuff&family=Great+Vibes&family=Kanit:wght@100&family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Collegiate+One&family=Dancing+Script&family=DynaPuff&family=Great+Vibes&family=Kanit:wght@100&family=Lobster&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Alumni+Sans+Collegiate+One&family=Dancing+Script&family=DynaPuff&family=Great+Vibes&family=Kanit:wght@100&family=Lobster&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Alumni+Sans+Collegiate+One&family=Asap:ital,wght@1,500&family=Dancing+Script&family=DynaPuff&family=Great+Vibes&family=Kanit:wght@100&family=Lobster&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Alumni+Sans+Collegiate+One&family=Asap:ital,wght@1,500&family=Dancing+Script&family=DynaPuff&family=Great+Vibes&family=Kanit:wght@100&family=Libre+Baskerville:wght@400;700&family=Lobster&family=Oswald:wght@200;400&family=Pacifico&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/efb0f3a753.js" crossorigin="anonymous"></script>
    <style>
body {
  background-image: url('pictures/olive.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<body>
      <!-- section acceuil -->
      <section id="container">
        <header>
          <div class="logo">
            <img src="pictures/PIC.jpeg" alt=""/>
            </div>
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
      
</ul>
        </header>
        <div class="container-text">
        
            <h1>Be Natural, Be Beautiful, Be you</h1>
            <p>Glow today, Glow Everyday</p>
        </div>
      </section> 
      <!-- section a propos -->
       <section id="a-propos">
          <div>
              <p class="tittle-section"> About us</p>
              <h1 class="sub-tittle-section" > Who we are ? </h1>
              <div class="description-photo">
                      <div class="desc">
                          <p> MZ Store<br/>
                            Do you want to buy luxury goods  ?<br/>
                            Do you want to benefit from our different services  ?<br/>
                            Do you want to take care of yourself everyday with higher quality products?<br/>
                            Our store is here to help you , we are here for you!
                          </p>
  
                          <H2>NOS SERVICES</H2>
                          <div class="list-services">
                              <div class="service">
                                <i class="fa-regular fa-gauge-high"></i>
                                  <p>FAST</p>
                              </div>
                              <div class="service">
                                  <i class="fas fa-money-check-alt"></i>
                                  <p>ECONOMIQUE</p>
                              </div>
                              <div class="service">
                                  <i class="fas fa-check"></i>
                                  <p>EASY</p>
                              </div>
                          </div>
                  </div>
                  <img src="desc.jpg" alt="">
              </div>
          </div>
      </section> 
      <span></span>
      <!-- section gallerie destination -->
      <section id="gallerie">
              <p class="tittle-section">Products</p>
              <h1 class="sub-tittle-section">Glow today , Glow everyday </h1>
              <div class="liste-photos">
                  <div class="gallerie-img">
                      <img src="pictures/serum5.jpg" alt="">
                      <div class="show-country"><p></p></div>
                  </div>
                  <div class="gallerie-img">
                      <img src="pictures/ttttt.jpeg" alt="">
                      <div class="show-country"><p></p></div>
                  </div>
                  <div class="gallerie-img">
                      <img src="pictures/vvv.jpeg" alt="">
                      <div class="show-country"><p></p></div>
                  </div>
                  <div class="gallerie-img">
                      <img src="pictures/uuu.jpeg" alt="">
                      <div class="show-country"><p></p></div>
                  </div>
  
              </div>
      </section> 
      <span></span>
     <!--  section contact -->
     <section id="inscrire">
        <p class="tittle-section">Contact us</p>
        <h1 class="sub-tittle-section">Contact form</h1>
       
        <div>
          <form action="mailto:onayvoyages@gmail.com" method="post" enctype="text/plain">
              <label for="provenance"> first Name</label>
              <input type="text" name="provenance" id="provenance" placeholder="your first name">
      
              <label for="arrivee">Last Name</label>
              <input type="text" name="arrivee" id="arrivee" placeholder="your last name">
          <label for="retour">e-mail</label>
          <input type="email" name="retour" id="retour" placeholder="your e-mail">
      
        
                <input type="submit" value="Done">
            </form>
            <div class="sociale">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
             
        </div>
    </section>
  <span></span>
      <!-- footer -->
      <footer>
        <p>Projet 2022 - &copy; MZ store</p>
        
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
</html>
<?php include('include/footer.php');?>

       
