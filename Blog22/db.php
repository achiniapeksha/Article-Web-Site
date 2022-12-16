<?php
    $con=new mysqli('localhost','root','','blog');

    if($con-> connect_error){
        die("DB connection error");
    }
?>