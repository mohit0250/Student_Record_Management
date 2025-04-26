<?php
include'connect.php';

$id=$_GET['update_id'];
$sql="select * from students_data where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
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
          


if (isset($_POST['Update'])) {
   
    $fullName = mysqli_real_escape_string($conn, $_POST['fullName']);
    $fatherName = mysqli_real_escape_string($conn, $_POST['fatherName']);
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $category = $_POST['category'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $sql="UPDATE `students_data` SET fullName='$fullName', fatherName='$fatherName', dob='$dob', gender='$gender', contact='$contact', email='$email', address='$address', category='$category', course='$course', year='$year' WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){

        header('location:admin_view_records.php');
        

    }
    else{
        die(mysqli_errno($conn));
    }
    
    }


?>


<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #2C3E50; 
            margin: 0;
            padding: 0;
            color: black; 
        }


        .form-container {
            width: 50%;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.1); 
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            backdrop-filter: blur(10px);
        }

        h2 {
            text-align: center;
            color: #fff;  
        }

        label {
            font-size: 16px;
            margin-left: 9px;
            color: #fff; 
            margin-bottom: 8px;
            display: block;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: rgba(255, 255, 255, 0.3); 
            color: white; 
            font-size: 16px;
        }

        input[type="radio"] {
            width: auto;
            margin: 0 10px 0 0;
        }

        .submit-btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #45a049;
        }

        .gender-group {
            display: flex;
            align-items: center;
            margin: 8px 0 20px;
        }

        .gender-group input[type="radio"] {
            margin-right: 10px;
        }
        input::placeholder,
textarea::placeholder {
    color: white; 
}
#year option{
color: black;}

#course option{
    color: black;}


        @media (max-width: 768px) {
            .form-container {
                width: 80%;
            }
        }
    </style>
</head>
<body>


    <div class="form-container">
        <h2>Student Registration Form</h2>
       
        <form action="" method="POST">

            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName"  placeholder="Enter Full Name" value='<?php echo $fullName?>'>

            <label for="fatherName">Father's Name</label>
            <input type="text" id="fatherName" name="fatherName"  placeholder="Enter Father's Name" value='<?php echo$fatherName?>'>

            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob"  value=<?php echo$dob?>>

            <label >Gender</label>
            <div class="gender-group" >
                <label for="male" >
                    <input type="radio" id="male" name="gender" value="Male"  <?php echo ($gender == 'Male' ? 'checked' : ''); ?>  > Male
                </label><br>
                <label for="female">
                    <input type="radio" id="female" name="gender" value="Female"  <?php echo($gender== 'Female'? 'checked':'');?>> Female
                </label><br>
                <label for="other">
                    <input type="radio" id="other" name="gender" value="Other"  <?php echo($gender== 'Other'? 'checked':'');?>> Other
                </label>
            </div>

            <label for="contact">Contact Number</label>
            <input type="text" id="contact" name="contact"  placeholder="Enter Contact Number" value=<?php echo$contact?>>

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email"  placeholder="Enter Email Address" value=<?php echo$email?>>

            <label for="address">Address</label>
            <textarea id="address" name="address" rows="4"  placehoder="Enter Address" ><?php echo$address?></textarea>

            
            <label for="category" value=<?php echo$category?>>Category </label>
            <select id="year" name="category"  >
                <option value="">Select Category</option>
                <option value="General"<?php echo ($category == 'General' ? 'selected' : ''); ?>>GEN</option>
            <option value="SC" <?php echo ($category == 'SC' ? 'selected' : ''); ?>>SC </option>
            <option value="OBC" <?php echo ($category == 'OBC' ? 'selected' : ''); ?>>OBC </option>
            <option value="Other"<?php echo ($category == 'Other' ? 'selected' : ''); ?>>Other</option>

            </select>

            <label for="course">Select Course</label>
            <select id="course" name="course" >
                <option value="">Select a Course</option>
                <option value="Information technology"<?php echo ($course == 'Information technology' ? 'selected' : ''); ?>>Information Technology</option>
                <option value="Electronics"<?php echo ($course == 'Electronics' ? 'selected' : ''); ?>>Electronics</option>
                <option value="Civil Engineering"<?php echo ($course == 'Civil Engineering' ? 'selected' : ''); ?>>Civil Engineering</option>
                <option value="Pharmacy"<?php echo ($course == 'Pharmacy' ? 'selected' : ''); ?>>Pharmacy</option>
                <option value="Mechanical Engineering" <?php echo ($course == 'Mechanical Engineering' ? 'selected' : ''); ?>>Mechanical Engineering</option>
            </select>

            <label for="year" value=<?php echo$year?>>Year </label>
            <select id="year" name="year"  >
                <option value="">Select Year</option>
                <option value="1" <?php echo$year== 1? 'selected':'';?>>1</option>
                <option value="2"<?php echo$year== 2? 'selected':'';?>>2</option>
                <option value="3" <?php echo$year== 3? 'selected':'';?>>3</option>
            </select>

            <button type="submit" class="submit-btn" name="Update">Update</button>
        </form>
    </div>

</body>
</html>
