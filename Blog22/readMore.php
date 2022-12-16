<?php include('db.php'); ?>
         

<?php

//if (isset($_GET['postID'])){
        
            
    $pID = $_GET['postID'];
    
    $query = "SELECT * from post where postId LIKE '%$pID%'  ";
    
    //$query = "SELECT * FROM itemtb";
    
    $result = mysqli_query($con ,$query);
        
    $row = mysqli_fetch_array($result);
            
    $title = $row['title'];
    $image1 = $row['image1'];
    $image2 = $row['image2'];
    $mainDescription = $row['mainDescription'];
    $image3 = $row['image3'];
    $image4 = $row['image4'];
    $subDescription = $row['subDescription'];
    $postedDateTime = $row['postedDateTime'];
//}
   
?>
<div>
    <div>
        <?php echo $title ?>
    </div>
    <div>
        <?php echo '<img src=' .$image1.' height="50" width="100" class="card-img-top" alt="...">';
    echo '<img src=' .$image2.' height="50" width="100" class="card-img-top" alt="...">'; ?>    </div>
    <p> <?php echo $mainDescription ?></p>
    <div>
        <?php echo '<img src=' .$image3.' height="50" width="100" class="card-img-top" alt="...">';
    echo '<img src=' .$image4.' height="50" width="100" class="card-img-top" alt="...">'; ?>

</div>
<p> <?php echo $subDescription ?></p>
<div>
    <?php echo $postedDateTime ?>
</div>

</div>
