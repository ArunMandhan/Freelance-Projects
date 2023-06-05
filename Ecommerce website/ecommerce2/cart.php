<?php

 session_start();

 if(isset($_POST['add_to_cart'])){

  //if userhas already added a product to cart
  if(isset($_SESSION['cart'])){

    $products_array_ids = array_column($_SESSION['cart'],"product_id"); // [2,3,4,10,15]
    //if product has already been added to cart or not
    if( !in_array($_POST['product_id'], $products_array_ids) ){

      $product_id = $_POST['product_id'];

      $product_array = array(
                      'product_id' => $_POST['product_id'],
                      'product_name' => $_POST['product_name'],
                      'product_price' => $_POST['product_price'],
                      'product_image' => $_POST['product_image'],
                      'product_quantity' => $_POST['product_quantity'],
      );

      $_SESSION['cart'][$product_id] = $product_array;


    //product has already been added
    }else{

         echo '<script>alert("Product was already to cart");</script>';
         
    }


    //if this is the first product
  }else{

    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $product_array = array(
                     'product_id' => $product_id,
                     'product_name' => $product_name,
                     'product_price' => $product_price,
                     'product_image' => $product_image,
                     'product_quantity' => $product_quantity


    );

    $_SESSION['cart'][$product_id] = $product_array;
    //[ 2=>[] , 3=>[] , 5=>[] ]

  }


  //calculate total
  calculateTotalCart();


  //remove product from cart
  }else if(isset($_POST['remove_product'])){

    $product_id = $_POST['product_id'];
    unset($_SESSION['cart'][$product_id]);

    //calculate total
    calculateTotalCart();
  
  }else if( isset($_POST['edit_quantity']) ){

    //we get id and quantity from the form
    $product_id = $_POST['product_id'];
    $product_quantity = $_POST['product_quantity'];
    
    //get the product array from the session
    $product_array = $_SESSION['cart'][$product_id];
      
    //update product quantity
    $product_array['product_quantity'] = $product_quantity;

    //return array back its place
    $_SESSION['cart'][$product_id] = $product_array;
    
    //calculate total
    calculateTotalCart();


 }else{
    header('location: index.php');
 }
      $total = 0;

 function calculateTotalCart(){

     foreach($_SESSION['cart'] as $key => $value){

      $product = $_SESSION['cart'][$key];

      $price = $product['product_price'];
      $quantity = $product['product_quantity'];

      $total = $total + ($price * $quantity);

     }

     $_SESSION['total'] = $total;
 }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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
                <a class="nav-link" href="login.php">Login</a>
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

    <!--Cart-->
    <section class="cart container my-5 py-5">
        <div class="container mt-5">
            <h2 class="font-weight-bold">Your Cart</h2>
            <hr>
        </div>

        <table class=""mt-5 pt-5>
            <tr>
                <th>Device</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>

           <?php foreach($_SESSION['cart'] as $key => $value){ ?>

            <tr>
                <td>
                    <div class="product-info">
                       <img src="assets/imgs/<?php echo $value['product_image']; ?>"/>
                           <div>
                                 <p><?php echo $value['product_name']; ?></p>
                                 <small><span>$</span><?php echo $value['product_price']; ?></small>
                                 <br>
                                 <form method="POST" action="cart.php">
                                  <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>"/>
                                    <input type="submit" name="remove_product" class="remove-btn" value="remove"/>
                                 </form>
                                 
                           </div>
                    </div>
                </td>
                <td> 
                    <form method="POST" action="cart.php">
                    <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>"/>
                    <input type="number" name="product_quantity" value="<?php echo $value['product_quantity'] ?>"/>
                    <input type="submit" class="edit-btn" value="edit" name="edit_quantity"/>
                    </form>
                </td>

                <td>
                    <span>$</span>
                    <span class="product-price"><?php echo $value['product_quantity'] * $value['product_price']; ?></span>
                </td>
            </tr>
          
          <?php } ?>

        </table>

        <div class="cart-total">
            <table>
                <!--<tr>
                    <td>Subtotal</td>
                    <td>RM1,200</td>
                </tr>-->
              <tr>
                <td>Total</td>
                <td>$<?php echo $_SESSION['total']; ?></td>
              </tr>
            </table>
        </div>

        <div class="checkout-container">
          <form method="POST" action="checkout.php">
            <input type="submit" class="btn checkout-btn" value="CHECKOUT" name="checkout">
            </form>
        </div>
    </section>

     <!--Footer-->
     <footer class="mt-5 py-5">
      <div class="row container mx-auto pt-5">
          <div class="footer-one col-lg-3 col-md-6 col-sm-12">
              <img class="logo" src="assets/imgs/logo.png"/>
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