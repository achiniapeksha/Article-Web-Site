<?php
    require 'db.php';

//getting data for recentData from post table for display first view
$resultRecent = mysqli_query($con,"select * from post order by postId desc");

//storing recentData in an array
$recentData = array();
while($rowRecent = mysqli_fetch_assoc($resultRecent)){
    $recentData[]=$rowRecent;
}
//returning response in json format
echo json_encode($recentData);
?>