<?php 
    require 'db.php';

$output='';
    $sql = "select * from post where title like '%".$_GET["search"]."%' or mainDescription like '%".$_GET["search"]."%' ";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){
        $output .= '<div class="col">';
        $output .= '<div class="card h-100">';
        $output .= '<img src=' .$row["image1"].' class="card-img-top" alt="...">';
        $output .= '<div class="card-body">';
        $output .= '<h5 class="card-title" id="title">'.$row["title"].'</h5>';
        $output .= '<p class="card-text" id="description">'/*.shorten($row["mainDescription"] ,100).'</p>';*/.$row["mainDescription"]. '</p>';
        $output .= '<a href="readMore.php?postID=' .$row["postId"]. '" class="read btn btn-outline-success">Read More</a>';

 //       $output .= '<a href="#" aria-current="page" class="read btn btn-outline-success" data-id="'.$row["postId"].'">Read More</a>';
        $output .= '</div>';
        $output .= '<div class="card-footer">';
        $output .= '<small class="text-muted">' .$row["postedDateTime"]. ' </small>';
        $output .= '</div>';
        $output .= '</div>';
        $output .= '</div>';
//
        }
        
        echo $output;
    }
    else{
        echo 'Data not found';
    }

    function shorten($string,$lenght){
        if(strlen($string)<=$lenght){
            echo $string;
        }
        else{
            $description = substr($string,0,$lenght). '...';
            echo $description;
        }
    }
    ?>