<!DOCTYPE html>
<html lang="en">
<head>
<title>Vu Keyboards-home page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css">
    

<style>
* {
  box-sizing: border-box;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
    div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsivegallery {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsivegallery {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsivegallery {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
    
</style>
    <script>
   
  let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
} 
         </script>
</head>
<body>
    <div class="wrapper">
    
   <?php
    // We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
    include 'header.php';?>
    <div class="row"> 
  
  <div class="main">  
       <div class="responsive">
      <div class="gallery">
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
 <?php  // Include the setup.php file to establish database connection
    require_once 'setup.php';
           
    // Fetch the record from the "gallery" table with a specials
    $query = "SELECT * FROM gallery WHERE special = 'S' ";
    $stmt = mysqli_prepare($conn, $query);
    //print $query;
     
 mysqli_stmt_execute($stmt);
 $result = mysqli_stmt_get_result($stmt);
 if (mysqli_num_rows($result) > 0) {
         
        while ($row = mysqli_fetch_assoc($result)) { 
    $imgname=$row['imgname'];
              $title=$row['title']; 
            $id=$row['id'];
      ?>
    <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/<?php echo $imgname;?>" style="width:100%">
    <div class="text"><?php echo $title;?></div>
  </div>
      <?php 
        } }
      ?> 

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  
</div>
        </div>
      <?php
      // Fetch the record from the "gallery" table with a specials
    $query = "SELECT * FROM gallery WHERE special = 'A' ";
    $stmt = mysqli_prepare($conn, $query);
    //print $query;
     
 mysqli_stmt_execute($stmt);
 $result = mysqli_stmt_get_result($stmt);
 if (mysqli_num_rows($result) > 0) {
         
        while ($row = mysqli_fetch_assoc($result)) { 
    $imgname=$row['imgname'];
              $title=$row['title']; 
            $id=$row['id'];
      ?>

       <div class="responsivegallery">
  <div class="gallery">
    <a target="_blank" href="kb">
      <img src="images/<?php echo $imgname;?>" alt="Mountains">
    </a>
    <div class="desc"><?php echo $title;?></div>
  </div>
</div>
      <?php 
        } }
      ?> 

</div>
              </div>
   
  
     
 <?php include 'footer.php';?>
    </div>

    


<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
    </body>
</html>
