<?php
    require 'db.php';

//getting data for mainData from post table for display first view
$resultMain = mysqli_query($con,"select * from post");

//storing mainData in an array
$data = array();
while($row = mysqli_fetch_assoc($resultMain)){
    $data[]=$row;
}
//returning response in json format
echo json_encode($data);

?>