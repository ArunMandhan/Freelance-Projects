<?php
session_start();
include('connection.php');
if (empty($_SESSION['user'])) {
  header('location:login.php');
}
$email=$_SESSION['user'];
$sql=mysqli_query($con,"select * from login where email = '$email' ");
$users=mysqli_fetch_assoc($sql);

extract($_POST);
if(isset($add))
{
  if($name=="" || $email=="" || $msg=="")
  {

    echo '<script>alert("Fill All the Given Fields Before Submit..")</script>';
  }
  else
  {
    $query="INSERT INTO `contact`(`username`, `email`, `message`) VALUES ('$name','$email','$msg')";
    mysqli_query($con,$query);
    echo '<script>alert("Message Sent Successfully...")</script>'; 
  }  


}


?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us</title>

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

  <!-- Responsive Top NavBar -->
  <div class="topnav" id="myTopnav">
    <img src="images/logo.png" class="logo">
    <a href="index.php" style="margin-left: 70px;">Home</a>
    <a href="gallery.html">Gallery</a>
    <a href="faculty.html">Faculty</a>
    <a href="academic.html">Academics</a>
    <a href="about.html">About Us</a>
    <a href="contact.php" class="active">Contact Us</a>
    <a href="#" style="margin-left:300px"><i class="fa fa-fw fa-search"></i> Search</a>
    <a> Welcome <?php echo $users['username']; ?></a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  <!-- end navbar -->

  <div class="container">
    <form action="" method="post">

      <label for="fname">User Name</label><br>
      <input type="text" id="fname" name="name" placeholder="Enter Your Name..">
      <br>

      <label for="lname">User Email</label><br>
      <input type="email" id="email" name="email" placeholder="Enter Your Email..">
      <br>

      <label for="subject">Message</label><br>
      <textarea id="subject" name="msg" placeholder="Write Your Message Here.." style="height:200px"></textarea>
      <br>

      <input type="submit" value="Submit" name="add">

    </form>

    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53942.13311997865!2d-118.30336243472964!3d34.015856671795405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c7e49c71a5ed%3A0xaa905a5bb427a2c4!2sUniversity%20of%20Southern%20California!5e0!3m2!1sen!2s!4v1669146816838!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

  <!----footer list-->
  <div class="ftr">
    <footer>
      <div class="footer-content-wrapper">
        <div class="footer-col large-25 small-50 tiny-100 ta-l flt">
          <h3>About Us</h3>
          <a href="#">About CTU</a>
          <a href="#">Vision and Mission</a>
          <a href="#">Objectives</a>
          <a href="#">Core Values</a>
          <a href="#">Privacy Policy</a>

          </div
          ><div class="footer-col large-25 small-50 tiny-100 ta-l flt">
            <h3>Academics</h3>
            <a href="#">Mechanical Engineering</a>
            <a href="#">Electrical Engineering</a>
            <a href="#">Software Engineering</a>
            <a href="#">Civil Engineering</a>
            <a href="#">Computer Science</a>
            <a href="#">Managment Sciences</a>
            <a href="#">Data Sciences</a>

            </div
            ><div class="footer-col large-25 small-50 tiny-100 ta-l flt">
              <h3>Facilities & Services</h3>
              <a href="#">Library</a>
              <a href="#">Mechanical Labs</a>
              <a href="#">Electrical Labs</a>
              <a href="#">Computer Science Labs</a>
              <a href="#">IT Infrastructure</a>
              <a href="#">Career Guidance</a>
              </div
              ><div class="footer-col large-25 small-50 tiny-100 ta-l flt">
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
          <div class="footer-bottom" style="text-align: center; padding-left: 150px; display: inline;">
            <a> <strong>&#169;Copyright- 2022: Comsate Technical University</strong></a> 
          </div>
          <br><br>
        </div>
        <!---FOOTER--->
        <!-- scripts files -->
        <script type="text/javascript" src="myscript.js"></script>
      </body>
      </html>