<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
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

 <!--Profile-->
 <section class="my-5 py-5">
    <div class="row container mx-auto">
        <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
            <h2 class="form-weight-bold">Profile User</h2>
            <hr class="mx-auto">
    
        <div class="mx-auto container">
            <form id="profile-form" method="POST" action="account.php">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="profile-name" name="name" placeholder="Name" required/>
                </div>
 
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" id="profile-email" name="email" placeholder="Email" required/>
                </div>

                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" id="profile-phonenumber" name="phonenumber" placeholder="Phone Number" required/>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn" id="profile-btn" name="submit" value="Submit"/>
                </div>

            </form>
         </div>
        </div>
    </div>
 </section>

 <section class="my-5 py-5">
    <div class="row container mx-auto">
        <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
            <h2 class="form-weight-bold">Shipping Details</h2>
            <hr class="mx-auto">
    
        <div class="mx-auto container">
            <form id="profile-form" method="POST" action="account.php">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="profile-name" name="name" placeholder="Name" required/>
                </div>
 
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" id="profile-address" name="address" placeholder="address" required/>
                </div>

                <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" id="profile-city" name="city" placeholder="City" required/>
                </div> 

                <div class="form-group">
                    <label>State</label>
                    <input type="text" class="form-control" id="profile-state" name="state" placeholder="state" required/>
                </div> 

                <div class="form-group">
                    <label>Postcode</label>
                    <input type="text" class="form-control" id="profile-postcode" name="postcode" placeholder="Postcode" required/>
                </div> 

                <div class="form-group">
                    <label>Country</label>
                    <input type="text" class="form-control" id="profile-country" name="country" placeholder="Country" required/>
                </div> 

                <div class="form-group">
                    <input type="submit" class="btn" id="profile-btn" name="submit" value="Submit"/>
                </div>
      
            </form>
         </div>
        </div>
    </div>
 </section>

  <section class="my-5 py-5">
    <div class="row container mx-auto">
        <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
            <h2 class="form-weight-bold">Payment Details</h2>
            <hr class="mx-auto">
    
        <div class="mx-auto container">
            <form id="profile-form" method="POST" action="account.php">
                <div class="form-group">
                    <label>Card Number</label>
                    <input type="text" class="form-control" id="profile-name" name="name" placeholder="Name" required/>
                </div>
 
                <div class="form-group">
                    <label>Expiry Details</label>
                    <input type="text" class="form-control" id="profile-email" name="email" placeholder="Email" required/>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn" id="profile-btn" name="submit" value="Submit"/>
                </div>


            </form>
         </div>
        </div>
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