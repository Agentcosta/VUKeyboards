  <div class="header">
  <h1 align="left">Vu Keyboards </h1>
</div>
    <div class="navbar">
        <a href="index.php">Home</a>
          <div class="dropdown">
    <button class="dropbtn"> <a href="shop.php">Shop</a>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="shop.php?category=Pre-built">Pre-built</a>
      <a href="shop.php?category=Keycaps">Keycaps</a>
      <a href="shop.php?category=Switches">Switches</a>
      <a href="shop.php?category=Frames">Frames</a>
    </div>
  </div> 
        <a href="contact.php">Contact Us</a>
        <a href="cart.php" class="right">Cart</a>
    <?php
    if(isset( $loggedin)){
?>
       <a href="logout.php" class="right">Logout</a>  
<?php }
else{ ?>
    <a href="login.php" class="right">Login</a>
    <?php }
    ?>

        <a href="search.php" class="right">Search</a>

    </div>