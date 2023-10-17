<?php 
    if(isset($_POST['submit'])){
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $number = $_POST['number']; 
    $email = $_POST['email'];
    $salary = floatval($_POST['salary']);
    $dob = date('Y-m-d', strtotime($_POST['dob']));
    $blood = $_POST['blood'];
    $gender = $_POST['gender'];
    
    $conn =  mysqli_connect("localhost","root","","crudphp");
    $sql = "INSERT INTO employee (fname,lname,phone, email, salary,dob,gender,blood_group) VALUES ('$fname','$lname','$number','$email',$salary,'$dob','$gender','$blood')";
    mysqli_query($conn,$sql);
    include_once("display.php");
             
   }
?>
