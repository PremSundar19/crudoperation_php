<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
            background-color: powderblue;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th {
            background-color: #f2f2f2;
            text-align: left;
            padding: 8px;
            border: 1px solid black;
        }

        td {
            padding: 8px;
            border: 1px solid black;
        }

        /* tr:nth-child(even) {
            background-color: #f2f2f2;
        } */

        tr:hover {
            background-color: #ddd;
        }

    </style>
</head>
<body>
   <h2>Employee Details</h2>


  <table>
    <h4><a href="AddEmployee.html">Add Employee</a></h4>
    <tr>
     <!-- <td>ID</td> -->
     <td>First_Name</td>
     <td>Last_Name</td>
     <td>Phone</td>
     <td>Email</td>
     <td>Salary</td>
     <td>DOB</td>
     <td>Gender</td>
     <td>Blood Group</td>
     <td>Edit</td>
     <td>Delete</td>
    </tr>
<?php
  include_once("config.php");

$sql = "SELECT * FROM employee";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        // echo "<td>{$row['id']}</td>";
        echo "<td>{$row['fname']}</td>";
        echo "<td>{$row['lname']}</td>";
        echo "<td>{$row['phone']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "<td>{$row['salary']}</td>";
        echo "<td>{$row['dob']}</td>";
        echo "<td>{$row['gender']}</td>";
        echo "<td>{$row['blood_group']}</td>";
        echo "<td><a href='editemployee.php?id={$row['id']}'>Edit</a></td>";
        echo "<td><a href='deleteemploye.php?id={$row['id']}'>Delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No records found</td></tr>";
}
echo "</table>";
mysqli_close($conn);

    ?>
</body>
</html>