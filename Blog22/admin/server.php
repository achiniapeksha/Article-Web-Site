<?php 
session_start();

$username = "";
$adminName = "";
$errors = array();
$db= mysqli_connect('localhost', 'root', '', 'blog');

if(isset($_POST['register'])){
  
  $username = $_POST['username'];
  $adminName = $_POST['adminName'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];
  
  if(empty($username)){
    array_push($errors, "Username is required");
  }
  
  if(empty($adminName)){
    array_push($errors, "Email is required");
  }
  
  if(empty($password_1)){
    array_push($errors, "Password is required");
  }
  
  if($password_1 != $password_2){
    array_push($errors, "The two passwords do not match");
  }
  
  if(count($errors) == 0){
    $query = "SELECT * FROM  admin WHERE Username='$username'";
    $result = mysqli_query($db, $query);
    if(mysqli_num_rows($result)== 1){
      array_push($errors, "This username already registerd.");
      
    }
    else{
      $password = md5($password_1);
      $sql = "INSERT INTO admin (adminId,adminName,Username, Password) Values ('admin008','$adminName','$username','$password')";
      mysqli_query($db, $sql);
      
      
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }
    
  }
}

if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  if(empty($username)){
    array_push($errors, "Username is required");
  }
  
  if(empty($password)){
    array_push($errors, "Password is required");
  }
  
  
  if(count($errors) == 0){
    $password = md5($password);
    $query = "SELECT * FROM admin WHERE Username ='$username' and Password ='$password' ";
    $result = mysqli_query($db, $query);
    if(mysqli_num_rows($result)== 1){
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }
    else{
      array_push($errors, "Wrong username/password combination");
      header('location: login.php');
    }
    
  }
}


if(isset($_GET['logout'])){
  session_destroy();
  unset($_SESSION['username']);
  header('location: index.php');
}
?>
