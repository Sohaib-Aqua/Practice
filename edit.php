<?php
$servername = "localhost";
$username = "root";
$password   =   "";
$db =   "aptech";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

$id =   $_GET['id'];
$f_name =$_GET['f_name'];


if (isset($_POST['updatebtn'])){
    $frst_name = $_POST["firstname"];
    $_update    =   "UPDATE students set first_name = '$frst_name' where id =   $id ";
    $res    =    mysqli_query($conn,$_update );
    if($res != null){
        echo "<script> alert('hogaya') </script>";
    }

}
mysqli_close($conn);

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

            First name:<br>

            <input type="text" name="firstname" value="<?php echo $f_name ?>">

            <br><br>

            <input type="submit" name="updatebtn" value="update">

        </fieldset>

    </form>

</body>
</html>

