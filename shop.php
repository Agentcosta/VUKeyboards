<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style>
    div.scroll-container {
  background-color: #333;
  overflow: auto;
  white-space: nowrap;
  padding: 10px;
}

div.scroll-container img {
  padding: 10px;
}

</style>
</head>
<body>

<?php include 'header.php';?>

<div class="row">

    <div class="side">...</div>
  <div class="main"> 
      <div class="scroll-container">
      <div class="gallery">
  <a target="_blank" href="/images/maxresdefault.jpg">
    <img src="/" alt="Keyboard 1" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
      </div>
      
     
<div class="scroll-container">
<div class="gallery">
  <a target="_blank" href="img.jpg">
    <img src="/images/mechanical-keyboard-with-rbg.jpg" alt="keyboard 2" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
          </div>

          
<div class="scroll-container">
<div class="gallery">
  <a target="_blank" href="img_">
    <img src="img_jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
</div>
      <div class="scroll-container">
          
<div class="gallery">
  <a target="_blank" href="img_">
    <img src=".jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>
          </div>
     
</div>
    </div>
    
  
    <?php include 'footer.php';?>
</body>
</html>

