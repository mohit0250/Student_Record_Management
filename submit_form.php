<?php
include 'connect.php';
session_start();
if (isset($_POST['submit'])) {
    $fullName = mysqli_real_escape_string($conn, $_POST['fullName']);
    $fatherName = mysqli_real_escape_string($conn, $_POST['fatherName']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);

    $sql = "INSERT INTO students_data (fullName, fatherName, dob, gender, contact, email, address, category, course, year) 
            VALUES ('$fullName', '$fatherName', '$dob', '$gender', '$contact', '$email', '$address', '$category', '$course', '$year')";

    
    $result = mysqli_query($conn, $sql);

    
    if ($result) {
    $formM=true;
      header('location:registration.php');
    } else {
        echo "Error: " . mysqli_error($conn);  
    }
}

mysqli_close($conn);
?>
