<!DOCTYPE html>
<html lang="en">
<head>
<title>Vu Keyboards-home page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css">
    <style>
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
    color: white;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}</style>
<style>

</style>
</head>
<body>
   <?php include 'header.php';?>
    <div class="row"> 
  
  <div class="main">  
       <div class="responsive">
      <div class="gallery">
  <a target="_blank" href="images/i12_q2-knob-full-navy_800x.jpg">
    <img src="images/i12_q2-knob-full-navy_800x.jpg" alt="custom keyboards" width="600" height="400">
  </a>
  <div class="desc">Navyblue Knob Pre-built Keyboard</div>
</div>
           </div>
      <div class="responsive">

<div class="gallery">
  <a target="_blank" href="images/blueamurai.jpg">
    <img src="images/blueamurai.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">Blue samurai Pre-built Keyboard</div>
</div>
            </div>
      <div class="responsive">
<div class="gallery">
  <a target="_blank" href="images/Theory.jpg">
    <img src="images/Theory.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">Theory 11 Pre-built Keyboard</div>
</div>
      </div>
      <div class="responsive">
<div class="gallery">
  <a target="_blank" href="images/MilkywayBlue.jpg">
    <img src="images/MilkywayBlue.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">Milkyway Pre-built Keyboard</div>
</div>
        </div>
</div>
              </div>
    
   
  
     
 <?php include 'footer.php';?>

    

</body>
</html>

