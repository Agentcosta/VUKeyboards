<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style>

</style>
</head>
<body>
<?php include 'header.php';?>
    <div class="row">
  <div class="side">...</div>
  <div class="main">   <h2>Contact Form</h2>

<form action="action_page.php" method="POST"> 
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <label for="email">email:</label><br>
  <input type="text" id="email" name="email" value="john@mail.com"><br><br>
    <label for="comment">comment:</label><br>
 <textarea name="comment" rows="5" cols="40" value="<?php print $comment;?>"></textarea><br><br>
 <input type="submit" value="Submit">
</form>
        </div>
</div>
    
 


<?php include 'footer.php';?>
</body>
</html>