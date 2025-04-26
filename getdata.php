<?php
// Database connection
include 'connect.php'; // Isme aapke database connection ka code hona chahiye

// SQL query to fetch all students' data from 'students_data' table
$sql = "SELECT * FROM students_data";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    // Loop through the rows and fetch each record
    while ($row = mysqli_fetch_assoc($result)) {
        // Access the data directly like this
       $fullName = $row['fullName'];
        $fatherName = $row['fatherName'];
        $dob = $row['dob'];
        $gender = $row['gender'];
        $contact = $row['contact'];
        $email = $row['email'];
        $address = $row['address'];
        $category = $row['category'];
        $course = $row['course'];
        $year = $row['year'];

        // Display the data (optional, to check if data is fetched correctly)
    }
} else {
    echo "No records found.";
}
?>
