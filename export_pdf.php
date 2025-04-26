<?php
require_once __DIR__ . '/vendor/autoload.php';


include 'connect.php';

$nameFilter = $_POST['filter_name'] ?? '';
$yearFilter = $_POST['filter_year'] ?? '';
$courseFilter = $_POST['filter_course'] ?? '';

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

$html = '
<h2 style="text-align:center;">Student Records PDF</h2>
<table border="1" cellpadding="8" cellspacing="0" width="100%">
<thead>
    <tr style="background-color:#f2f2f2;">
        <th>S.N</th>
        <th>Full Name</th>
        <th>Father\'s Name</th>
        <th>DOB</th>
        <th>Category</th>
        <th>Course</th>
        <th>Year</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Address</th>
        <th>Contact</th>
    </tr>
</thead>
<tbody>';

$sn = 1;
while ($row = $result->fetch_assoc()) {
    $html .= '<tr>
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
    </tr>';
}
$html .= '</tbody></table>';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output('student_data.pdf', 'D'); // force download
?>
