<!DOCTYPE html>
<html lang="en">
<head>
<title>vukeyboards-catagory</title>
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
</head>
<body>

<?php include 'header.php';?>

<div class="row">

  <div class="main"> 
          <div class="responsive">
<div class="gallery">
  <a target="_blank" href="images/pandaswitch.jpg">
    <img src="images/pandaswitch.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">Switches</div>
</div>
        </div>
      
      
     
      <div class="responsive">
<div class="gallery">
  <a target="_blank" href="images/gmmksunsetcaps.jpg">
    <img src="images/gmmksunsetcaps.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">Keycaps</div>  
</div>
        </div>

          
<div class="responsive">
<div class="gallery">
  <a target="_blank" href="images/75V2.jpg">
    <img src="images/GK980.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">Prebuilt keyboards</div>
</div>
</div>

      
     
</div>
    </div>
    
  
    <?php include 'footer.php';?>
</body>
</html>
