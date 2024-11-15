<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include("connection.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="post">
<div class="contein">
        <div class="slide">
            <div class="hover">
                <h1>WELCOME TO THE NOTIFICATION </h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam possimus dignissimos culpa nostrum corrupti nisi cumque consequuntur</p>
                <div class="btns">
            <input type="submit" value="Enjoy Create account" disabled>
        </div>
            </div>
        </div>
        <div class="inpts">
            <div class="email">
            </div>
            <h1>Create account</h1>
            <div>
                <label for="">first name</label>
                <input type="text" name="fname" id="" placeholder="first name">
            </div>
            <div>
                <label for="">last name</label>
                <input type="text" name="lname" id="" placeholder="last name">
            </div>
            <div>
                <label for="">email</label>
                <input type="email" name="email" id="" placeholder="email">
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" name="pass" id="" placeholder="password">
            </div>
            <div class="btns">
            <input type="submit" value="Create account" name="submit">
        </div>
        </div>
    </div>
</form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    //insert query
    if (empty($fname) || empty($lname) || empty($email) || empty($password)) {
        echo '<script>alert("please inter full infromation");</script>';
    }
    else {
        $query=mysqli_query($con,"INSERT INTO dat (fname,lname,email,password) values ('$fname','$lname','$email','$password') ");
        if ($query) {
            header("location:index.php");
        }
    }
}
?>