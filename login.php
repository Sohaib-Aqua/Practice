<?php
session_start();
include($_SERVER['DOCUMENT_ROOT']."/Practice/connection.php");

if(isset($_POST['go'])){
    $uname  =   $_POST['uname'];
    $pass   =   $_POST['pass'];
    $qry    =   "select * from students where first_name = '$uname' and password = '$pass' ";
    $result =   mysqli_query($conn,$qry);
    $row    =   mysqli_fetch_array($result);
//    var_dump($result);
//    die();
    if($row !=   null){
        $_SESSION['key']   =    $row['1']." ".$row['2'];
        header('location: Home.php');
    }
    else{
        header('location:login.php');
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <lbale>Username</lbale>
        <input type="text"  name="uname">
        <br><br>
        <label>Password</label>
        <input type="password"  name="pass">
        <br><br>
        <input  type="submit"   name="go"   value="Login">
    </form>

</body>
</html>
