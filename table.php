<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include("connection.php"); // Ensure database connection
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Table</title>
    <style>
        /* CSS for styling the table */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #6c5ce7;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #dfe6e9;
        }

        .btn-edit {
            padding: 5px 10px;
            color: #fff;
            background-color: #0984e3;
            text-decoration: none;
            border-radius: 3px;
            transition: background-color 0.3s;
        }

        .btn-edit:hover {
            background-color: #74b9ff;
        }
    </style>
</head>
<body>
    <h1>Data from Slide Table</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Header</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Query to fetch data from the slide table
            $query = mysqli_query($con, "SELECT id, hed, discr FROM slide");
    while ($row=mysqli_fetch_array($query)) {
    ?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['hed'];?></td>
        <td><?php echo $row['discr'];?></td>
        <td><a href="slide.php?id=<?php echo $row['id'];?>">edit</a></td>
    </tr>
    <?php
    }
    ?>
        </tbody>
    </table>
</body>
</html>
