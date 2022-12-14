<!doctype html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password   =   "";

// Create connection
$conn = new mysqli($servername, $username, $password);



// Check connection
if ($conn === FALSE) {
    die("Connection failed: " . mysqli_connect_error());
}

$query="CREATE DATABASE IF NOT EXISTS Aptech";
mysqli_query($conn,$query);

// Change db to "aptech" db
$db =   mysqli_select_db($conn, "aptech");

$table="CREATE TABLE IF NOT EXISTS students(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL, 
    gender VARCHAR(50) NOT NULL,
    mobile VARCHAR(11) NOT NULL
                    
)";
// check table
//$querycheck='SELECT 1 FROM `persons`';
//$query_result=$conn->query($querycheck);


if($conn->query($table) === TRUE) {
    echo "<script> alert('Record Inserted');
    window.location.href = 'index.php';
    </script>";
}else{
    echo "Database and Table Offline" . $conn->error;
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['submit'])) {
    $first_name = $_POST['firstname'];

    $last_name = $_POST['lastname'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $mobile = $_POST['mobile'];

    $gender = $_POST['gender'];

    // If file upload form is submitted
    $status = $statusMsg = '';

    if (!empty($_FILES["image"]["name"])) {
        //  Get file info
        $target_dir = 'images/';
        $target_file = $target_dir . basename($_FILES['image']['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $filesize = getimagesize($_FILES['image']['size']);
        if ($filesize !== false) {
            echo "File is an image - " . $filesize["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["image"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    else{
        echo "tasweer to dal do";
    }

}
mysqli_close($conn);
?>

</body>
</html>
