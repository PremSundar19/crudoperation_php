<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
      #id {
        display: none;
    }
  </style>
</head>

<body>

<?php
        $id = intval($_REQUEST['id']);
        $conn =  mysqli_connect("localhost","root","","crudphp");

        $sql = "SELECT * FROM employee where id=$id";
        $result = mysqli_query($conn,$sql);

         $id =0;
         $fname ="";
         $lname ="";
         $phone = "";
         $email ="";
         $salary = 0.0;
         $dob = "";
         $blood = "";
         $gender = "";
        
        if (mysqli_num_rows($result) > 0) {
          if($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                $id     = $row['id'];
                $fname   = $row['fname'];
                $lname   = $row['lname'];
                $phone   = $row['phone'];
                $email  = $row['email'];
                $salary = $row['salary'];
                $dob = $row["dob"];
                $blood = $row['blood_group'];
                $gender = $row['gender'];
                echo "</tr>";
            }
        }
  ?>
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
          <form action="updateemployee.php"  method="post">
          <div class="mb-3">
                    <input type="number" class="form-control" id="id" name="id" value="<?php echo "$id" ?>" hidden>
                </div>
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" value="<?php echo "$fname" ?>">
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" value="<?php echo "$lname" ?>">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" class="form-control" id="phone" name="phone" value="<?php echo "$phone" ?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo "$email" ?>">
                </div>
                <div class="mb-3">
                    <label for="salary" class="form-label">Salary</label>
                    <input type="number" class="form-control" id="salary" name="salary" value="<?php echo "$salary" ?>">
                </div>
                <div class="mb-3">
                    <label for="dob" class="form-label">Date Of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $dob?>" > 
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <input type="radio" id="gender" name="gender" value="male"<?php if($gender === 'male'){echo 'checked';}?>>male
                    <input type="radio" id="gender" name="gender" value="female"<?php if($gender === 'female'){echo 'checked';}?> >female
                    <input type="radio" id="gender" name="gender" value="others"<?php if($gender === 'others'){echo 'checked';}?> >others

                </div>
                <div class="mb-3">
                    <label for="blood-group" class="form-label">Blood Group</label>
                    <select class="form-select" id="blood-group" name="blood" value="<?php echo $blood ?>">
                        <option value="A+"  <?php if ($blood == 'A+') echo 'selected'; ?>>A+</option>
                        <option value="A-"  <?php if ($blood == 'A-') echo 'selected'; ?>>A-</option>
                        <option value="B+"  <?php if ($blood == 'B+') echo 'selected'; ?>>B+</option>
                        <option value="B-"  <?php if ($blood == 'B-') echo 'selected'; ?>>B-</option>
                        <option value="O+"  <?php if ($blood == 'O+') echo 'selected'; ?>>O+</option>
                        <option value="O-"  <?php if ($blood == 'O-') echo 'selected'; ?>>O-</option>
                        <option value="AB+" <?php if ($blood == 'AB+') echo 'selected';?>>AB+</option>
                        <option value="AB-" <?php if ($blood == 'AB-') echo 'selected'; ?>>AB-</option>
                    </select>
                </div>
                <button type="submit" name="submit1"class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
</div>
</body>
</html>