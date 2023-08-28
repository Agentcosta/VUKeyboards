<!DOCTYPE html>
<html lang="en">
<head>
<title>vukeyboards-shop</title>
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
<?php
session_start();
//print_r($_SESSION);
if(isset($_SESSION["loggedin"])){
    $loggedin=$_SESSION["loggedin"];
    $name=$_SESSION["name"];
    $id=$_SESSION["id"];
}
else{header('Location: login.php');}
?>

<?php include 'header.php';?>
    


<div class="row">

  <div class="main">
      <?php  // Include the setup.php file to establish database connection
    require_once 'setup.php';
// Fetch records from the "contacts" table
      //if(isset($_GET['category'])) 
           if(isset($_GET['category'])) {
                $category = $_GET['category'];
    // Fetch the record from the "contacts" table with the given ID
    $query = "SELECT * FROM gallery WHERE category = '$category' ";}
       else {$query = "SELECT * FROM gallery  ";}              

    $stmt = mysqli_prepare($conn, $query);
    //mysqli_stmt_bind_param($stmt, "i", $category);
    //print $query;
     
 mysqli_stmt_execute($stmt);
 $result = mysqli_stmt_get_result($stmt);

 if (mysqli_num_rows($result) > 0) {
         
        while ($row = mysqli_fetch_assoc($result)) { 
    $imgname=$row['imgname'];
              $title=$row['title']; 
            $id=$row['id'];
      ?>
      <div class="responsive">
      <div class="gallery">
  <a target="_blank" href="keyboard.php?id=<?php echo $id;?>">
    <img src="images/<?php echo $imgname;?>" alt="Keyboard 1" width="600" height="400">
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
</body>
</html>

