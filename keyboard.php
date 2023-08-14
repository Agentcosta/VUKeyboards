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
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}    
    </style>
</head>
<body>

<?php include 'header.php';?>

<div class="row">
<?php  // Include the setup.php file to establish database connection
    require_once 'setup.php';
// Check if the ID parameter is provided in the URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    // Fetch the record from the "contacts" table with the given ID
    $query = "SELECT * FROM gallery WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
          $imgname=$row['imgname'];
              $title=$row['title']; }}
        // Display the edit form with the existing record's data
        ?>
  <div class="main">
<div class="card">
  <img src="images/<?php echo $imgname;?>" alt="Denim Jeans" style="width:100%">
  <h1><?php echo $title;?></h1>
  <p class="price">$19.99</p>
  <p>Some text about the jeans..</p>
  <p><button>Add to Cart</button></p>
</div>
</div>
    </div>
    
  
    <?php include 'footer.php';?>
</body>
</html>