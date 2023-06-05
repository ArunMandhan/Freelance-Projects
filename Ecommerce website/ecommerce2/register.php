<?php

session_start();

include('server/connection.php');

//if user has already registered, then take user to account page
if(isset($_SESSION['logged_in'])){

  header('location: account.php');
  exit;

}

if(isset($_POST['register'])){

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
 

  
  //check whether there is a user with this email or not
  $stmt1= $conn->prepare("SELECT count(*) FROM users where user_email=?");
  $stmt1->bind_param('s',$email);
  $stmt1->execute();
  $stmt1->bind_result($num_rows);
  $stmt1->store_result();
  $stmt1->fetch();
  
  //if there is a user already registered with this email
  if($num_rows != 0){
    header('location: register.php?error=user with this email already exists');

    //if no user registered with this email before
  }else{


  //create a new user
  $stmt = $conn->prepare("INSERT INTO users(user_name,user_email,user_password)
                  VALUES (?,?,?)");

  $stmt->bind_param('sss',$username,$email,$password);

  //if account was created successfully
  if($stmt->execute()){
        $_SESSION['user_email'] = $email;
        $_SESSION['user_name'] = $username;
        $_SESSION['logged_in'] = true;
        header('location: account.php?register=You registered successfully');

    //account could not be created
  }else{

    header('location: register.php?error=could not create an account at the moment');
  
  }

 }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

    <!--Register-->
    <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Register</h2>
            <hr class="mx-auto">
        </div>
        <div class="mx-auto container">
            <form id="register-form" method="POST" action="register.php">
              <p style="color: red;"><?php if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" id="register-username" name="username" placeholder="Username" required/>
                </div>
 
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" id="register-email" name="email" placeholder="Email" required/>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="register-password" name="password" placeholder="Password" required/>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn" id="register-btn" name="register" value="Register"/>
                </div>
                
                <div class="form-group">
                    <a id="login-url" href="login.php" class="btn">Already have an account? Login</a>
                </div>
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