<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include("connection.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="contein">
    <div class="top_nav">
   <div class="log">
    <h1>notification</h1>
   </div>
   <div class="links">
    <a href="http://">Home</a>
    <a href="http://">privet notification</a>
    <a href="http://">puplic notification</a>
    <a href="http://">news</a>
   </div>
      <input type="button" value="logout" name="sub" class="btns">
</div>
<div class="slide">
   <?php 
    $query= mysqli_query($con,"SELECT hed,discr FROM slide");
   while ($row=mysqli_fetch_array($query)) {
?>
<h1><?php echo $row['hed'];?></h1>
<p><?php echo $row['discr'];?></p>
<?php
   }?>
</div>

</div>
<div class="hd">
    <h1>Our service</h1>
</div>
<div class="cards">
    <?php
    $query= mysqli_query($con,"SELECT * FROM service");
    while ($row=mysqli_fetch_array($query)) {
        ?>
         <div class="card1">
        <h1><?php echo $row['name'];?></h1>
        <p><?php echo $row['discr'];?></p>
    </div>
        <?php
    }
    ?>
</div>
<div class="about">
    <div class="img">
        <img src="pexels-daliladalprat-2055500.jpg" alt="" srcset="">
    </div>
    <div class="cont">
    <h1>About us</h1>
    <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus dolor aut at magnam, suscipit facere iusto eum ducimus ipsa quaerat magni iure quam voluptatibus. Magnam voluptate architecto rerum mollitia delectus!</P>
    </div>
</div>
<div class="worker">
    <div class="work">
        <div class="slide">
            <img src="pexels-daliladalprat-2055500.jpg" alt="" srcset="">
        </div>
        <div class="disc">
            <h2>name</h2>
            <p>dipaltement</p>
        </div>
    </div>
    <div class="work">
        <div class="slide">
            <img src="pexels-daliladalprat-2055500.jpg" alt="" srcset="">
        </div>
        <div class="disc">
            <h2>name</h2>
            <p>dipaltement</p>
        </div>
    </div>
    <div class="work">
        <div class="slide">
            <img src="pexels-daliladalprat-2055500.jpg" alt="" srcset="">
        </div>
        <div class="disc">
            <h2>name</h2>
            <p>dipaltement</p>
        </div>
    </div>
    <div class="work">
        <div class="slide">
            <img src="pexels-daliladalprat-2055500.jpg" alt="" srcset="">
        </div>
        <div class="disc">
            <h2>name</h2>
            <p>dipaltement</p>
        </div>
    </div>
</div>
<footer>
    <div class="footer-content">
        <div class="footer-links">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </div>
        <div class="footer-socials">
            <a href="#" class="social-icon">FB</a>
            <a href="#" class="social-icon">TW</a>
            <a href="#" class="social-icon">IG</a>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Company Name. All Rights Reserved.</p>
    </div>
</footer>
</body>
</html>
<?php 
if (isset($_POST['sub'])) {
  header("location:index.php");
}
?>