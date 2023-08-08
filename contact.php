<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style>
/* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
    .side {
  flex: 40%;
  background-color: gray; /* Dark side column background */
  padding: 20px;
}

.main {
  flex: 60%;
  background-color: gray; /* Darker content background */
  padding: 20px;
  border-radius: 0px;
}
    h2 {
        color: beige;
        font-family: Arial, Helvetica, sans-serif;
    }
    label {
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
    
    }
</style>
</head>
<body>
<?php include 'header.php';?>
    <div class="row">
  <div class="side"><h2>About us </h2>
     <div class="container">
         <p>
      This is all about us</p>
      </div>
        </div>
  <div class="main">   <h2>Should you have any inquiry, please feel to shoot us an email at support@vukeyboards.com, we'll get back to you as soon as we can.</h2>
<div class="container">
<form action="action_page.php" method="POST"> 
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="" placeholder="enter first name"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="" placeholder="enter last name"><br><br>
  <label for="email">email:</label><br>
  <input type="text" id="email" name="email" value="" placeholder="enter email"><br><br>
    <label for="comment">what would you like to tell us" cols="40" value="<?php print $comment;?>"></textarea><br><br>
 <input type="submit" value="Submit">
</form>
      </div>
        </div>
</div>
        
    
 


<?php include 'footer.php';?>
</body>
</html>