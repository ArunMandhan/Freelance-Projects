<?php 
session_start();
include('connection.php');
if (empty($_SESSION['user'])) {
  header('location:login.php');
}
$email=$_SESSION['user'];
$sql=mysqli_query($con,"select * from login where email = '$email' ");
$users=mysqli_fetch_assoc($sql);
?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Gallery</title>
</head>
<body>

<!-- Responsive Top NavBar -->
<div class="topnav" id="myTopnav">
  <img src="images/logo.png" class="logo">
  <a href="index.php"  style="margin-left: 70px;">Home</a>
  <a href="gallery.php" class="active">Gallery</a>
  <a href="faculty.php">Faculty</a>
  <a href="academic.php">Academics</a>
  <a href="about.php">About Us</a>
  <a href="contact.php">Contact Us</a>
  <a href="#" style="margin-left:300px"><i class="fa fa-fw fa-search"></i> Search</a>
  <a> Welcome <?php echo $users['username']; ?></a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
  <i class="fa fa-bars"></i>
  </a>
</div>

  <div class="txt2">
  <h1>University Gallery</h1>
</div>

<section class="gellery_section">
<div class="gallery">
    <img src="images/gallery/img_5terre.jpg" alt="Cinque Terre" >
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
    <img src="images/gallery/img_forest.jpg" alt="Forest">
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
    <img src="images/gallery/img_lights.jpg" alt="Northern Lights" >
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
    <img src="images/gallery/img_mountains.jpg" alt="Mountains">
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
    <img src="images/gallery/img_5terre.jpg" alt="Cinque Terre" >
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
    <img src="images/gallery/img_forest.jpg" alt="Forest">
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
    <img src="images/gallery/img_lights.jpg" alt="Northern Lights" >
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
    <img src="images/gallery/img_mountains.jpg" alt="Mountains">
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
    <img src="images/gallery/img_5terre.jpg" alt="Cinque Terre" >
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
    <img src="images/gallery/img_forest.jpg" alt="Forest">
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
    <img src="images/gallery/img_lights.jpg" alt="Northern Lights" >
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
    <img src="images/gallery/img_mountains.jpg" alt="Mountains">
  <div class="desc">Add a description of the image here</div>
</div>
</section>
 
  <!----footer list-->
<div class="gallery_ftr">
<footer>
  <div class="footer-content-wrapper">
    <div class="footer-col large-25 small-50 tiny-100 ta-l flt footer_div">
      <h3>About Us</h3>
      <a href="#">About CTU</a>
      <a href="#">Vision and Mission</a>
      <a href="#">Objectives</a>
      <a href="#">Core Values</a>
      <a href="#">Privacy Policy</a>
       
    </div
    ><div class="footer-col large-25 small-50 tiny-100 ta-l flt footer_div">
      <h3>Academics</h3>
      <a href="#">Mechanical Engineering</a>
      <a href="#">Electrical Engineering</a>
      <a href="#">Software Engineering</a>
      <a href="#">Civil Engineering</a>
      <a href="#">Computer Science</a>
      <a href="#">Managment Sciences</a>
      <a href="#">Data Sciences</a>

    </div
    ><div class="footer-col large-25 small-50 tiny-100 ta-l flt footer_div">
      <h3>Facilities & Services</h3>
      <a href="#">Library</a>
      <a href="#">Mechanical Labs</a>
      <a href="#">Electrical Labs</a>
      <a href="#">Computer Science Labs</a>
      <a href="#">IT Infrastructure</a>
      <a href="#">Career Guidance</a>
    </div
    ><div class="footer-col large-25 small-50 tiny-100 ta-l flt footer_div">
      <h3>Contact Us</h3>
      <a href="#">3300 PointSett Highway</a>
      <a href="#">GreenVille, SSC29613</a>
      <a href="#">864.294.2000</a>
      <a href="#">info@comsate.com</a>
      <a>Follow Us</a>
       <img src="images/icons/f1.png">
      <img src="images/icons/in2.png">
      <img src="images/icons/y1.png">
    </div>
  </div>
  <div class="clearfix"></div>  
</footer>

<div class="footer-bottom" style=";padding-right: 575px;">
  <a> <strong>&#169;Copyright- 2022: Comsate Technical University</strong></a> 
</div>
<br><br>
</div>
  <!---FOOTER--->

<!-- script files -->

<script type="text/javascript" src="myscript.js"></script>

</body>
</html>