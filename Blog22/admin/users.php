<?php
    require '../db.php';

    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        if(isset($_GET['adminId'])){
            $sql = 'select * from admin where adminId='.$_GET['adminId'];
            $result = $con->query($sql);
            $records = $result->fetch_assoc();
        }
        else{
            $sql = 'select * from admin';
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
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "insert into admin (adminName,Username,Password) values ('$name','$username','$password')";

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
        if(isset($_GET['adminId'])){
            $password = $_GET['password'];
            $adminId = $_GET['adminId'];

            $sql = "update admin set Password='$name' where adminId='$adminId'";

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

            $sql = "delete from admin where adminId='$adminId'";

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