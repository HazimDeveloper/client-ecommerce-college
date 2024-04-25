<?php

require './functions.php';

//ambil data di URL

$id = $_GET["id"];


//query data mahasisiswa
$prod_order = query("SELECT * FROM product WHERE productID = $id");

?>


<!DOCTYPE html>
<html lang="en" >
  <head>
    <title>Breyerstore.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <style>
    html{
      scroll-behavior: smooth
    }
    @media only screen and (max-width: 600px) {
  .site-logo img {
    width: 100px;
  }
}
  </style>
  <body >
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner" style="background: rgb(215,23,23);
    background: linear-gradient(90deg, rgba(215,23,23,1) 0%, rgba(254,254,254,0) 0%, rgba(23,191,230,1) 100%);">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
          
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <!-- <a href="index.html" class="js-logo-clone">Casify</a> -->
                <img src="images/breyer-logo.png" style="height:100px;object-fit: fill;" >
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
          
            </div>

          </div>
        </div>
      </div> 
    </header>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">

          <div class="col-md-12 order-2">

            <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Your Order</h2></div>
              </div>
            </div>
            
            <div class="row mb-5">
              <div class="col">
<?php foreach($prod_order as $prod) : ?>
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    
                    <a href=""><img src="images/admin-shirt.jpg" style="" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href=""><?= $prod["productName"] ?></a></h3>
                    <p class="mb-0"><?= $prod["productDesc"] ?></p>
                    <p class="text-primary font-weight-bold">RM<?= $prod["productPrice"] ?></p>
                   
                    <a href="order.php?id=<?= $prod["productID"]?>" class="btn btn-primary" >Order Now</a>
                  </div>
                </div>
              </div>

            </div>
           
          </div>
          <?php endforeach;?>
          </div>
        
        </div>
        <div class="col-md-7">

<form action="#" method="post">
  
  <div class="p-3 p-lg-5 border">
    <div class="form-group row">
      <div class="col-md-6">
        <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="c_fname" name="c_fname">
      </div>
      <div class="col-md-6">
        <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="c_lname" name="c_lname">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-12">
        <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
        <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-12">
        <label for="c_subject" class="text-black">Subject </label>
        <input type="text" class="form-control" id="c_subject" name="c_subject">
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-12">
        <label for="c_message" class="text-black">Message </label>
        <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-lg-12">
        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
      </div>
    </div>
  </div>
</form>
</div>
      
      </div>
    </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <p>
              <p>
         
                Made With 💓 With Annie 
           
                </p>
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>


  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>