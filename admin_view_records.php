<?php

include 'navbar_admin.php';
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

$sql = "SELECT * FROM students_data WHERE 1=1";
$params = [];
$types = "";

if (!empty($nameFilter)) {
    $sql .= " AND LOWER(fullName) LIKE ?";
    $params[] = strtolower($nameFilter) . '%';
    $types .= "s";
}
if (!empty($yearFilter)) {
    $sql .= " AND year = ?";
    $params[] = $yearFilter;
    $types .= "s";
}
if (!empty($courseFilter)) {
    $sql .= " AND LOWER(course) = ?";
    $params[] = strtolower($courseFilter);
    $types .= "s";
}

$stmt = $conn->prepare($sql);
if ($params) {
    $stmt->bind_param($types, ...$params);
}
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
    <style>
        /* Styling same as your previous code */
        body { font-family: Arial, sans-serif; background-color: #f2f2f2; }
        .container { width: 90%; margin: 30px auto; background-color: white; padding: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); border-radius: 8px; }
        .filter-section { display: flex; gap: 15px; flex-wrap: wrap; align-items: center; margin-bottom: 20px; }
        .filter-section label { font-size: 14px; }
        .filter-section input, .filter-section select { padding: 8px; border-radius: 5px; border: 1px solid #ccc; }
        button { padding: 8px 16px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background-color: #45a049; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; border: 1px solid #ccc; text-align: center; }
        th { background-color: #4CAF50; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
    </style>
</head>
<body>

<div class="container">
    <div class="filter-section">
        <form method="get" action="">
            <label>Name:</label>
            <input type="text" name="filter_name" value="<?php echo htmlspecialchars($nameFilter); ?>">
            <label>Year:</label>
            <select name="filter_year">
                <option value="">All</option>
                <option value="1" <?php if ($yearFilter == "1") echo 'selected'; ?>>1</option>
                <option value="2" <?php if ($yearFilter == "2") echo 'selected'; ?>>2</option>
                <option value="3" <?php if ($yearFilter == "3") echo 'selected'; ?>>3</option>
            </select>
            <label>Course:</label>
            <select name="filter_course">
                <option value="">All</option>
                <option value="Pharmacy" <?php if ($courseFilter == "Pharmacy") echo 'selected'; ?>>Pharmacy</option>
                <option value="Information technology" <?php if ($courseFilter == "Information technology") echo 'selected'; ?>>Information technology</option>
                <option value="Electronics" <?php if ($courseFilter == "Electronics") echo 'selected'; ?>>Electronics</option>
                <option value="Civil Engineering" <?php if ($courseFilter == "Civil Engineering") echo 'selected'; ?>>Civil Engineering</option>
                <option value="Mechanical Engineering" <?php if ($courseFilter == "Mechanical Engineering") echo 'selected'; ?>>Mechanical Engineering</option>
            </select>
            <button type="submit">Filter</button>
        </form>

        <!-- PDF Export Button -->
        <form method="post" action="export_pdf.php">
            <input type="hidden" name="filter_name" value="<?php echo htmlspecialchars($nameFilter); ?>">
            <input type="hidden" name="filter_year" value="<?php echo htmlspecialchars($yearFilter); ?>">
            <input type="hidden" name="filter_course" value="<?php echo htmlspecialchars($courseFilter); ?>">
            <button type="submit">📄 Export as PDF</button>
        </form>
    </div>

    <table>
        <caption><h2>Student Records</h2></caption>
        <thead>
            <tr>
                <th>S.N</th>
                <th>Full Name</th>
                <th>Father's Name</th>
                <th>DOB</th>
                <th>Category</th>
                <th>Course</th>
                <th>Year</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result && $result->num_rows > 0) {
                $sn = 1;
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>
                        <td>' . $sn++ . '</td>
                        <td>' . htmlspecialchars($row['fullName']) . '</td>
                        <td>' . htmlspecialchars($row['fatherName']) . '</td>
                        <td>' . htmlspecialchars($row['dob']) . '</td>
                        <td>' . htmlspecialchars($row['category']) . '</td>
                        <td>' . htmlspecialchars($row['course']) . '</td>
                        <td>' . htmlspecialchars($row['year']) . '</td>
                        <td>' . htmlspecialchars($row['gender']) . '</td>
                        <td>' . htmlspecialchars($row['email']) . '</td>
                        <td>' . htmlspecialchars($row['address']) . '</td>
                        <td>' . htmlspecialchars($row['contact']) . '</td>
                        <td>
                            <a href="update.php?update_id=' . $row['id'] . '"><i class="material-icons">edit</i></a>
                            <a href="delete.php?delete_id=' . $row['id'] . '" onclick="return confirm(\'Are you sure?\')"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>';
                }
            } else {
                echo '<tr><td colspan="12" style="color:red;">No records found</td></tr>';
            }
            ?>
        </tbody>
    </table>

</div>

</body>
</html>
