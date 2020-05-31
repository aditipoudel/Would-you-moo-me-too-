<?php
$con=mysqli_connect("localhost","root","","moopagedb");



if (isset($_POST['submit']))
   
    #this is for button click
    {
        $a=$_POST['fname'];
        $b=$_POST['mname'];
        $c=$_POST['lname'];
        $d=$_POST['countryname'];
        $g=$_POST['email'];
        $f=$_POST['Message'];
        

        $que="INSERT INTO `contactpage` ( `fname`, `mname`, `lname`, `countryname`, `email`, `Message`) VALUES ('$a', '$b', '$c', '$d', '$g', '$f' )";
         if (mysqli_query($con,$que)) 
        {
            echo "<script> window.alert('Thank you! Message sent.')</script>";
        }
        else
        {
            echo "<script> window.alert('Opps! Something went wrong!!')</script>";
        }

        
    }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge" >
    <link
    href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap"
    rel="stylesheet"
  />
    <link rel="stylesheet" href="./style.css" >
    
    <title>Would  you care for me too?</title>
  </head>
  <body>
    <nav>
      <div class="moo">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
      <ul class="nav-links">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="Gallery.html">Gallery</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
    <div class="container">
        <div style="text-align:center">
          
        <h1>Thinking about us, leave us a message:</h1>
        </div>
        <div class="row">
          <div class="column">
            <img src="img/bull-calf-heifer-ko-162240.jpeg" style="width:100%">
          </div>
          <div class="column">
            <form method="POST"  action="contact.php">
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="fname" placeholder="Your first name.." required>
              <label for="mname">Middle Name</label>
              <input type="text" id="mname" name="mname" placeholder="Your middle name if any..">
              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="lname" placeholder="Your last name.." required>
              <label for="country">Country</label>
              <input type="text" id="countryname" name="countryname" placeholder="Country name.." required>
              <label for="email">E-mail</label>
              <input type="text" id="email" name="email" placeholder="email here..">
              <label for="Message">Your Message</label>
              <textarea id="Message" name="Message" placeholder="Write something.." style="height:170px" required></textarea>
              <input type="submit" value="submit" name="submit">
            </form>
          </div>
        </div>
      </div>
    <script src="app.js"></script>
  </body>
</html>
