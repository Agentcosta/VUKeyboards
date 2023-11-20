  <?php  // Include the setup.php file to establish database connection
    require_once 'setup.php';
           
    // Fetch the record from the "gallery" table with a specials
    $query = "SELECT * FROM gallery WHERE special = 'S' ";
    $stmt = mysqli_prepare($conn, $query);
    //print $query;
     
 mysqli_stmt_execute($stmt);
 $result = mysqli_stmt_get_result($stmt);

 if (mysqli_num_rows($result) > 0) {
         
        while ($row = mysqli_fetch_assoc($result)) { 
    $imgname=$row['imgname'];
              $title=$row['title']; 
            $id=$row['id'];
      ?>
       <div class="row">
    <div class="column">
  <!--<a target="_blank" href="keyboard.php?id=<?php echo $id;?>"-->
    <img class="demo cursor" src="images/<?php echo $imgname;?>" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
  <!--</a>-->
</div>
      </div>
      <?php 
        } }
      ?> 