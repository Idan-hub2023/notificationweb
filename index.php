<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php
    include("connection.php");
    include("select.php");
    ?>
</head>
<body>
   <form action="" method="post">
   <div class="contein">
        <div class="slide">
            <div class="hover">
                <h1>WELCOME TO THE NOTIFICATION </h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam possimus dignissimos culpa nostrum corrupti nisi cumque consequuntur</p>
            </div>
        </div>
        <div class="inpts">
            <h1>Login</h1>
            <div>
                <label for="">Email</label>
                <input type="text" name="email" id="" placeholder="username">
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" name="password" id="" placeholder="password">
            </div>
            <a href="account.php">Create account?</a>
            <div class="btns">
            <input type="submit" value="Login" name="submit">
        </div>
        </div>
    </div>
   </form>
</body>
</html>