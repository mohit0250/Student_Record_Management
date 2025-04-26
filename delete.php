<?php

include 'connect.php';


if (isset($_GET['delete_id'])) {

    $id = $_GET['delete_id'];

    
    $delete_sql = "DELETE FROM students_data WHERE id = '$id'";

    if (mysqli_query($conn, $delete_sql)) {

        header("Location: admin_view_records.php");
        exit(); 
    } else {

        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {

    echo "Invalid request. ";
}

mysqli_close($conn);
?>
