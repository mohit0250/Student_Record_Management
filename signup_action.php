<?php
include'connect.php';
session_start();
if(isset($_POST['signup'])){
$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
   
   $sql = "INSERT INTO signup (email, password,confirm_password) 
   
    VALUES ('$email', '$password','$confirm_password')";


$result = mysqli_query($conn, $sql);


if ($result) {

        
        header("Location: index.php");
        
    } 
    
    else {
        echo "Error: " . mysqli_error($conn);  
        }

}

?>
