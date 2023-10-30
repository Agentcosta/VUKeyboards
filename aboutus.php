
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
      Welcome to Vu Keyboards, where innovation meets precision in the world of keyboards. We are a leading keyboard manufacturer dedicated to creating high-quality, cutting-edge input devices that redefine the way you interact with technology. With a passion for design and a commitment to performance, Vu Keyboards is at the forefront of the keyboard industry. Our products are engineered to deliver a seamless and comfortable typing experience, making them ideal for both professionals and enthusiasts. Discover the perfect balance of form and function with Vu keyboards, setting a new standard in the world of input devices.</p>
      </div>
        </div>
  <div class="main">   <h2>Should you have any inquiry, please feel to shoot us an email at support@vukeyboards.com, we'll get back to you as soon as we can.</h2>
<div class="container">
<?php
// Include the setup.php file to establish database connection
require_once 'setup.php';
// Check if the form is submitted
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if all required form fields are filled
    if(isset($_POST['id'], $_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['comment'])) {
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
                // Update the record in the "contacts" table
        $query = "UPDATE contacts SET fname = ?, lname = ?, email = ?, comment = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ssssi", $fname, $lname, $email, $comment, $id);
                if(mysqli_stmt_execute($stmt)) {
            echo 'Record updated successfully.';
        } else {
            echo 'Error updating record: ' . mysqli_stmt_error($stmt);
        }
        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo 'All form fields are required.';
    }
} else {
    echo 'Invalid request.';
}

// Close the database connection
mysqli_close($conn);
?>

<?php
$title="about the team">
    >
      </div>
        </div>
</div>
        
    
 


<?php include 'footer.php';?>
</body>
</html>