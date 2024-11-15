<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include("connection.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <form action="" method="post">
    <div class="contein">
        <div class="cont">
            <h1>welcome to slide change</h1>
        </div>
        <div class="inpts">
            <input type="text" name="hed" id="" placeholder="heads">
            <br>
            <textarea name="mssg" id="" placeholder="content"></textarea>
            <br>
            <input type="submit" value="send" name="mss">
        </div>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>header</th>
                    <th>discription</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sel=mysqli_query($con,"SELECT * FROM slide") ;
                while ($row=mysqli_fetch_array($sel)) {?>
                    <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['hed']?></td>
                    <td><?php echo $row['discr']?></td>
                    <td><a href="delet.php?id"></a></td>
                </tr>
          
               <?php
               }
               ?>
                ?>
            </tbody>
        </table>
    </div>
    </form>
</body>
</html>
<?php
if (isset($_POST['mss'])) {
$h=$_POST['hed'];
$mss=$_POST['mssg'];

//insert query
$query=mysqli_query($con,"INSERT INTO slide (hed,discr) VALUES ('$h','$mss')");
if ($query) {
    echo "data inserted";
}
else {
    echo"not inserted";
}
}
?>