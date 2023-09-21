<?php
// (A) PROCESS ORDER FORM
if (isset($_POST["name"])) {
  require "3-process.php"; 
  echo $result == "" 
    ? "<div class='notify'>Thank You! We have received your order</div>" 
    : "<div class='notify'>$result</div>" ;
}
?>
 
<!-- (B) ORDER FORM -->
<form method="post" target="_self">
  <label>Name</label>
  <input type="text" name="name" required value="Jon Doe">
 
  <label>Email</label>
  <input type="email" name="email" required value="jon@doe.com">
 
  <label>Quantity</label>
  <input type="number" name="qty" required min="1" max="99" value="1">
 
  <input type="submit" value="Place Order">
</form>