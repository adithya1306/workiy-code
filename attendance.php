<?php

require_once('config/db.php');
$query = "select * from attendance";
$res = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css">
  <title>Attendance Report</title>
</head>
<body class = "bg-dark">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card mt-5">
          <div class="card-header">
            <h2 class="display-6 text-center">
              Attendance Report
            </h2>
          </div>
          <div class="card-body">
            <table class="table table-bordered text-center">
              <tr class="bg-dark text-white">
                <td>EmpId</td>
                <td>First Name</td>
                <td>Second Name</td>
                <td>Date</td>
                <td>Attendance</td>
                <td>Update</td>
              </tr>
              <tr>
              <?php
                while($row = mysqli_fetch_assoc($res))
                {
              ?>
                <td><?php echo $row['empid']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['attendance']; ?></td>
                <td><a href="#" class="btn btn-primary">Update</a></td>
              </tr>
              <?php
                }
              ?>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>
</html>