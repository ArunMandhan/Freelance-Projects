<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>

       <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
      <div class="container">
        <img src="assets/imgs/logo.png"/>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>

          
            <li class="nav-item">
              <a class="nav-link" href="shop.php">Shop</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            
            <li class="nav-item">
            <a href="cart.php"><i class="fas fa-shopping-bag"></i></a>
            <a href="account.php"><i class="fas fa-user"></i></a>
            </li>


          </ul>
          
        </div>
      </div>
    </nav>

       <!--Featured-->
       <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
          <h3>Our Featured</h3>
          <hr>
          <p>Here you can check out our featured devices!</p>
        </div>
        <div class="row mx-auto container-fluid">
        
        <?php include ('server/get_featured_products.php');?>
        <?php while($row= $featured_products->fetch_assoc()){ ?>


          <div class="device text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image'];?>">
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>

            <form method="POST" action="cart.php">
            <input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>"/>
            <input type="hidden" name="product_image" value="<?php echo $row['product_image'];?>"/>
            <input type="hidden" name="product_name" value="<?php echo $row['product_name'];?>"/>
            <input type="hidden" name="product_price" value="<?php echo $row['product_price'];?>"/>

            <input type="number" name="product_quantity" value="1"/>
            <a href="<?php echo "cart.php?product_id=". $row['product_id'];?>"><button class="buy-btn" type="submit" name="add_to_cart">Add to Cart</button></a>
          </div>
            </form>
           
          
         
        <?php } ?>
        </div>

      </section>

        <!--Footer-->
     <footer class="mt-5 py-5">
      <div class="row container mx-auto pt-5">
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
              <img class="logo"  src="assets/imgs/logo.png"/>
              <p class="pt-3">We provide the best devices for the most affordable prices</p>
          </div>
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <h5 class="pb-2">Featured</h5>
          <url class="text-uppercase">
            <li><a href="#">Ipad</a></li>
            <li><a href="#">Camera</a></li>
            <li><a href="#">Laptop</a></li>
            <li><a href="#">Mobile Phone</a></li>
          </url>
          </div>
      </div>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>