<!DOCTYPE html>

<html>

<body>

<h2>Signup Form</h2>

<form action="insert.php" method="post" enctype="multipart/form-data">

    <fieldset>

        <legend>Personal information:</legend>

        First name:<br>

        <input type="text" name="firstname">

        <br>

        Last name:<br>

        <input type="text" name="lastname">

        <br>

        Email:<br>

        <input type="email" name="email">

        <br>

        Password:<br>

        <input type="password" name="password" >

        <br>

        Mobile:<br>

        <input type="mobile" name="mobile">

        <br>

        Gender:<br>

        <input type="radio" name="gender" value="Male">Male

        <input type="radio" name="gender" value="Female">Female

        <br><br>

        <label>Select Image File:</label>
        <input type="file" name="image">

        <br><br>
        <input type="submit" name="submit" value="submit">

    </fieldset>

</form>





