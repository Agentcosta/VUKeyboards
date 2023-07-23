<!DOCTYPE html>
<html lang="en">
<head>
<title>Vu Keyboards-home page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style>
  table {
            width: 100%;
            border-collapse: collapse;
        }


        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }


        tr:hover {
            background-color: #f5f5f5;
        }

</style>
</head>
<body>
    <div>
   <?php include 'header.php';?>
    <div class="row"> 
  <div class="side">...</div>
 <?php  // Include the setup.php file to establish database connection
    require_once 'setup.php';
// Check if the ID parameter is provided in the URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    // Fetch the record from the "contacts" table with the given ID
    $query = "SELECT * FROM contact WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

?>
        </div>
</div>
   
  
     
 <?php include 'footer.php';?>

    

</body>
</html>

