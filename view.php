<?php
include($_SERVER['DOCUMENT_ROOT']."/Practice/connection.php");


$fetch =" select * from students";
$record    =   mysqli_query($conn,$fetch);
$count = mysqli_num_rows($record);


//print_r($data);

if($count != 0 ){
    ?>
    <table border="1" >"
    <tr >
    <th>id</th>
    <th>first name</th>
    <th>last name</th>
    <th>email</th>
    <th>password</th>
    <th>gender</th>
    <th>mobile</th>
    <th>edit</th>
    </tr>
        <?php
    while($data = mysqli_fetch_assoc($record)){
        echo "<tr>";
        echo "<td >" .$data['id']."</td>";
        echo "<td>" .$data['first_name']."</td>";
        echo "<td>" .$data['last_name']."</td>";
        echo "<td>" .$data['email']."</td>";
        echo "<td>" .$data['password']."</td>";
        echo "<td>" .$data['gender']."</td>";
        echo "<td>" .$data['mobile']."</td>";
        echo "<td>" ."<a href='edit.php?id=$data[id]&f_name=$data[first_name]&l_name=$data[last_name]' >Edit</a>"."</td>";
        echo "<td>" ."<a href='delete.php?id=$data[id]&email=$data[email]' >Delete</a>"."</td>";
        echo "</tr>";


        echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "nothing";
}


