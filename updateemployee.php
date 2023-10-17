<?php 
 if(isset($_POST['submit1'])){
    $id = intval($_POST['id']);
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $salary = floatval($_POST['salary']);
    $dob = date('Y-m-d', strtotime($_POST['dob']));
    $gender = $_POST['gender'];
    $blood = $_POST['blood'];

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "crudphp";
$conn =  mysqli_connect("localhost","root","","crudphp");

  $sql = "UPDATE employee set fname='$fname',lname='$lname',phone='$phone',email='$email',salary=$salary,dob='$dob',gender='$gender',blood_group='$blood' where id=$id";
    if (mysqli_query($conn, $sql)) {
     include_once('display.php');
    }else{
        echo "something went wrong";
    }
 }
?>