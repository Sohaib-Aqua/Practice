<?php
//include($_SERVER['DOCUMENT_ROOT']."/Practice/connection.php");

$servername = "localhost";
$username = "root";
$password   =   "";
$db =   "aptech";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

$id = $_GET['id'];
$email  =   $_GET['email'];


if (isset($_POST['deletebtn'])) {
    $_id    =   $_POST['id'];
    $imli = $_POST['Email'];
    $deleting   =   "DELETE FROM students WHERE email='$imli'    and id='$_id'";
   $dell    =   mysqli_query($conn,$deleting);
    mysqli_close($conn);

    if($dell)
    {
        echo "Deleted Successfully";
        exit(0);
    }
    else
    {
        echo "Not Deleted";
        exit(0);
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

    <fieldset>

        <legend>Personal information:</legend>

        Email:<br>
        <input type="hidden"    name="id"   value="<?php echo $id; ?>">

        <input type="email" name="Email" value="<?php echo $email; ?>">


        <br><br>

        <input type="submit" name="deletebtn" value="delete"    onclick="return confirm('Are you sure! want to delete?')">
<!--        <button  type="submit" name="id" value="--><?//=$record['id'];?><!--" >Delete</button>-->

    </fieldset>

</form>

</body>
</html>

