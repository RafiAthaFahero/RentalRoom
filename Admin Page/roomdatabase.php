<?php
require 'functions.php';

//query data from the "room" table
$result = mysqli_query($conn, "SELECT * FROM room");

?>


<!DOCTYPE html>
<html lang="en">
<head>    

    <title>Room Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</table>
</head>
<body>
    <ul>
    <h2>Room Database</h2>
    </ul>
    
    <ul>
    <button><a href="roomform.php">Add Room Data</a></button> <button><a href="homeadmin.php">Back</a></button>  
    </ul>
    <br>

    <table border="1" cellpadding="1" cellspacing="0" class="table table-striped">
        <!--Structure-->
        <tr>
            <th>No.</th>
            <th>Room ID</th>
            <th>Room Gender</th>
            <th>Room Label</th>
            <th>Room Location</th>
            <th>Room Window</th>
            <th>Room Monthly Cost</th>
            <th>Room Availability</th>
            <th>Room Description</th>
            <th>Action</th>
        </tr>
        <?php $i= 1; ?>
        <?php  foreach( $result as $row) : ?>
        
            <tr>
            <td>
            <?= $i; ?>
            </td>
            <td>
            <?= $row["room_id"]; ?>
            </td>
            <td>
            <?= $row["room_gender"]; ?>
            </td>
            <td>
            <?= $row["room_label"]; ?>
            </td>
            <td>
            <?= $row["room_location"]; ?>
            </td>
            <td>
            <?= $row["room_window"]; ?>
            </td>
            <td>
            <?= $row["room_monthly_cost"]; ?>
            </td>
            <td>
            <?= $row["room_availabality"]; ?>
            </td>
            <td>
            <?= $row["room_description"]; ?>
            </td>
            <td>
                <button><a href="updateroom.php?room_id=<?= $row["room_id"]; ?>"> Update  </a></button>
                <button><a href="deleteroom.php?room_id=<?= $row["room_id"]; ?>"> Delete </a></button>
            </td>
        </tr>
        <?php  $i++; ?>
        <?php  endforeach; ?>
    </table>
    
     
</body>
</html>