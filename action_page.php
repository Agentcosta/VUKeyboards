<html>
<body>
<?php 
//print_r ($_POST);
    
$fname= $_POST["fname"];
$lname= $_POST["lname"];
$email= $_POST["email"];
$comment= $_POST["comment"];

include 'setup.php';


$sql = "INSERT INTO `contacts` (`fname`, `lname`, `email`, `comment`) 
VALUES ('$fname', '$lname', '$email', '$comment');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
    
</body>