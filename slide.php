<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Slide</title>
    <link rel="stylesheet" href="slide.css">
</head>
<body>
    <?php 
    include("connection.php");

    // Check if ID is provided in the URL
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Select query to fetch data
        $query = mysqli_query($con, "SELECT * FROM service WHERE id='$id'");
        $row = mysqli_fetch_assoc($query); // Fetch the row

        if ($row) {
            $hed = $row['name'];
            $discr = $row['discr'];
        } else {
            die("No record found with ID $id.");
        }
    }

    // Handle form submission
    if (isset($_POST['update'])) {
        $new_hed = $_POST['name'];
        $new_discr = $_POST['discr'];

        // Update query
        $update_query = mysqli_query($con, "UPDATE `service` SET `name`='$new_hed', `discr`='$new_discr' WHERE id='$id'");

        if ($update_query) {
            header("location:table.php");
        } else {
            echo "Failed to update data.";
        }
    }
    ?>

    <!-- Form -->
    <form action="" method="post">
        <label for="hed">Header:</label>
        <input type="text" name="hed" id="hed" value="<?php echo $hed; ?>" required>
        <br><br>
        <label for="discr">Description:</label>
        <textarea name="discr" id="discr" required><?php echo $discr; ?></textarea>
        <br><br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>
