<?php
    require '../db.php';

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        if(isset($_GET['postID'])){
            $sql = 'select * from post where postId='.$_GET['postID'];
            $result = $con->query($sql);
            $records = $result->fetch_assoc();
        }
        else{
            $sql = 'select * from post';
            $result = $con -> query($sql);
            $records = array();

            while($row = $result->fetch_assoc()){
                $records[]= $row;
            }
        }
        header("HTTP/1.1 200 OK");
        echo json_encode($records);
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $title = $_POST['title'];
        $mainDescription = $_POST['mainDescription'];
        $subDescription = $_POST['subDescription'];
        //$postedDateTime = $_POST['postedDateTime'];
        $status = 'on';
        $image1 = $_POST['image1'];
        $image2 = $_POST['image2'];
        $image3 = $_POST['image3'];
        $image4 = $_POST['image4'];
        $categoryId = $_POST['categoryId'];
        $adminId = 'admin003';//$_POST['adminId'];
        $sql = "insert into post (title,mainDescription,subDescription,status,image1,image2,image3,image4,categoryId,adminId) 
                            values ('$title','$mainDescription','$subDescription','$status','$image1','$image2','$image3','$image4','$categoryId','$adminId')";
        

        if($con->query($sql) === true){
            header("HTTP/1.1 200 OK");
            echo json_encode(array('message' => 'Success'));
        }
        else{
            header("HTTP/1.1 200 ERROR");
            echo json_encode(array('message' => 'Error'));
        }
    }

    if($_SERVER['REQUEST_METHOD'] === 'PUT'){
        if(isset($_GET['postId'])){
            $postId = $_GET['postId'];
            $title = $_GET['title'];
            $mainDescription = $_GET['mainDescription'];
            $subDescription = $_GET['subDescription'];
            $postedDateTime = $_GET['postedDateTime'];
            $status = $_GET['status'];
            $image1 = $_GET['image1'];
            $image2 = $_GET['image2'];
            $image3 = $_GET['image3'];
            $image4 = $_GET['image4'];
            $categoryId = $_GET['categoryId'];
            $adminId = $_GET['adminId'];

            $sql = "update post set  title = '$title',
                                        mainDescription = '$mainDescription',
                                        subDescription = '$subDescription',
                                        postedDateTime = '$postedDateTime',
                                        status = '$status',
                                        image1 = '$image1',
                                        image2 = '$image2',
                                        image3 = '$image3',
                                        image4 = '$image4',
                                        categoryId = '$categoryId',
                                        adminId = '$adminId' 
                    where postId='$postId'";

            if($con->query($sql) === true){
                header("HTTP/1.1 200 ok");
                echo json_encode(array('message' => 'Success'));
            }
            else{
                header("HTTP/1.1 200 Error");
                echo json_encode(array('message' => 'Error'));
            }
        }

    }

    if($_SERVER['REQUEST_METHOD'] === 'DELETE'){
        if(isset($_GET['postId'])){
            $postId = $_GET['postId'];

            $sql = "delete from post where postId='$postId'";

            if($con->query($sql) === true){
                header("HTTP/1.1 200 ok");
                echo json_encode(array('message' => 'Success'));
            }
            else{
                header("HTTP/1.1 200 Error");
                echo json_encode(array('message' => 'Error'));
            }
        }

    }

    

?>