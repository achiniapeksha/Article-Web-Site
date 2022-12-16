<?php
    require '../db.php';



    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        if(isset($_GET['id'])){
            $sql = 'select * from category where categoryId='.$_GET['id'];
            $result = $con->query($sql);
            $records = $result->fetch_assoc();
        }
        else{
            $sql = 'select * from category';
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
        $name = $_POST['name'];
        $sql = "insert into category (categoryName) values ('$name')";

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
        if(isset($_GET['id'])){
            $name = $_GET['name'];
            $id = $_GET['id'];

            $sql = "update category set categoryName='$name' where categoryId='$id'";

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
        if(isset($_GET['id'])){
            $id = $_GET['id'];

            $sql = "delete from category where categoryId='$id'";

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