<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include("connection.php");
    ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="styls.css">
</head>
<body>
  <div class="dashboard">
    <!-- Navigation Bar -->
    <nav class="navbar">
      <h1>My Dashboard</h1>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">All table</a></li>
        <li><a href="#">Udate settings</a></li>
        <li><a href="#">Service</a></li>
      </ul>
    </nav>

    <!-- Main Content -->
    <header class="header">
      <h2>Welcome Back!</h2>
      <p>Here are your latest stats:</p>

    <section class="cards">
      <div class="card">
        <h3>Total Users</h3>
        <p><?php
         $query=mysqli_query($con,"SELECT count(*) as total_user FROM dat");
         $row=mysqli_fetch_array($query);
         echo $row['total_user'];
         ?></p>
      </div>
      <div class="card">
        <h3>Revenue</h3>
        <p>$5,630</p>
      </div>
      <div class="card">
        <h3>New Signups</h3>
        <p>230</p>
      </div>
    </section>
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
        <td><a href="slide.php?id=<?php echo $row['id'];?>">edit</a>//<a href="delet.php?id=<?php echo $row['id'];?>">delete</a></td>
    </tr>
    <?php
    }
    ?>
        </tbody>
    </table>
    <header>
  </div>
</body>
</html>
