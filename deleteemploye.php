<?php 
$id = intval($_REQUEST['id']);
     
 $server = "localhost";
 $user = "root";
 $pass = "";
 $dbname = "crudphp";

$conn =  mysqli_connect("localhost","root","","crudphp");
$sql = "DELETE FROM employee where id=$id";
if(mysqli_query($conn,$sql)){
   include_once('display.php');
}
?>