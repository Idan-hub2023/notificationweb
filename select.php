<?php
if (isset($_POST["submit"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //select query
 if (empty($email) || empty($password)) {
    echo'<script>alert ("input is not completed fill it"); </script>';
 }
 else {
    $query=mysqli_query($con,"SELECT email,password FROM dat WHERE email='$email' AND password='$password'");
    if ($row=mysqli_fetch_array($query)) {
        header("location:home.php");
    }
    else {
        echo'<script>alert ("create account "); </script>';
    }
 }
}
?>