<?php
include 'connect.php';

$nameFilter = "";
$yearFilter = "";
$courseFilter = "";

if (isset($_GET['filter_name'])) {
    $nameFilter = $_GET['filter_name'];
}
if (isset($_GET['filter_year'])) {
    $yearFilter = $_GET['filter_year'];
}
if (isset($_GET['filter_course'])) {
    $courseFilter = $_GET['filter_course'];
}

$sql = "SELECT * FROM students_data WHERE 1";

if (!empty($nameFilter)) {
    $sql .= " AND LOWER(fullName) LIKE LOWER('" . mysqli_real_escape_string($conn, $nameFilter) . "%')";
}
if (!empty($yearFilter)) {
    $sql .= " AND year = '" . mysqli_real_escape_string($conn, $yearFilter) . "'";
}
if (!empty($courseFilter)) {
    $sql .= " AND LOWER(course) = LOWER('" . mysqli_real_escape_string($conn, $courseFilter) . "')";
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
    <style>
        .container {
            width: 90%;
            margin: 30px auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        .filter-section {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        .filter-section label {
            font-size: 12px;
            font-weight: bold;
            color: #333;
            margin-right: 10px;
            display: inline-block;
        }
        .filter-section input, .filter-section select {
            padding: 8px;
            font-size: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            width: 180px;
            box-sizing: border-box;
            transition: all 0.3s ease;
        }
        button {
            padding: 8px 20px;
            font-size: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #45a049;
         
            transform: scale(1.03);

        
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 30px 0;
            font-family: 'Arial', sans-serif;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }
        td {
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        table caption {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
        }
        table th, table td {
            padding: 12px;
            text-align: center;
        }
        table td {
            font-size: 14px;
        }
        td a {
            display: inline-block;
            margin-right: 10px;
            padding: 8px 16px;
            text-align: center;
        }
        td a:last-child {
            margin-right: 0;
        }
    </style>
</head>
<body>

<?php
include'navbar_user.php';
?>

<div class="container">
    <div class="filter-section">
        <form method="get" action="">
            <label for="filter_name">Name:</label>
            <input type="text" id="filter_name" name="filter_name" value="<?php echo $nameFilter; ?>" placeholder="Enter name">
            <label for="filter_year">Year:</label>
            <select name="filter_year" id="filter_year">
                <option value="">Select Year</option>
                <option value="1" <?php if ($yearFilter == "1") echo 'selected'; ?>>1</option>
                <option value="2" <?php if ($yearFilter == "2") echo 'selected'; ?>>2</option>
                <option value="3" <?php if ($yearFilter == "3") echo 'selected'; ?>>3</option>
            </select>
            <label for="filter_course">Course:</label>
            <select name="filter_course" id="filter_course">
                <option value="">Select Course</option>
                <option value="Pharmacy" <?php if ($courseFilter == "Pharmacy") echo 'selected'; ?>>Pharmacy</option>
                <option value="Information technology" <?php if ($courseFilter == "Information technology") echo 'selected'; ?>>Information technology</option>
                <option value="Electronics" <?php if ($courseFilter == "Electronics") echo 'selected'; ?>>Electronics</option>
                <option value="Civil Engineering" <?php if ($courseFilter == "Civil Engineering") echo 'selected'; ?>>Civil Engineering</option>
                <option value="Mechanical Engineering" <?php if ($courseFilter == "Mechanical Engineering") echo 'selected'; ?>>Mechanical Engineering</option>
            </select>
            <button type="submit">Filter</button>
        </form>
    </div>

    <table>
        <caption>Student Records</caption>
        <tr>

        <th>S.N</th>

            <th>Full Name</th>
            <th>Father's Name</th>
            <th>Date of Birth</th>
           
            <th>Category</th>
            <th>Course</th>
            <th>Year</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Address</th>

            <th>Contact</th>
        </tr>
        <tbody>
            <?php
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
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
                    echo '
                    <tr>
                        <td>' . $id . '</td>

                        <td>' . $fullName . '</td>
                        <td>' . $fatherName . '</td>
                        <td>' . $dob . '</td>
                      
                        <td>' . $category . '</td>
                        <td>' . $course . '</td>
                        <td>' . $year . '</td>
                          <td>' . $gender . '</td>
                        <td>' . $email . '</td>
                        <td>' . $address . '</td>
                        <td>' . $contact . '</td>
                    </tr>';
                }
            } else {
                echo '<tr>
                        <td colspan="10" style="color: red; text-align:center; padding-top:12px;">&#128531; No Record Found.</td>
                      </tr>';
            }
            ?>
        </tbody>
    </table>
</div>

<?php
include 'footer.php';
?>

</body>
</html>
