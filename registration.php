


<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Student Registration Form</title>
    <style>
    
        .form-container {
            width: 50%;
            margin: 50px auto;
            background-color: white; 
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        h2 {
            text-align: center;
            color: black;  
        }

        label {
            font-size: 16px;
            margin-left: 9px;
            color: black;  
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
            background-color: rgba(141, 175, 214, 0.1); 
            color: black;  
            font-size: 16px;
        }

        input[type='radio'] {
            width: auto;
            margin: 0 10px 0 0;
        }

        .submit-btn {
         
            width: 100%;
            padding: 10px;
            background-color:rgb(50, 176, 235);
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        

       
        }

        .submit-btn:hover {
            background-color:rgb(158, 181, 239);
            transform: scale(1.03);
        }
        

        .gender-group {
            display: flex;
            align-items: center;
            margin: 8px 0 20px;
        }

        .gender-group input[type='radio'] {
            margin-right: 10px;
        }

        input::placeholder,
        textarea::placeholder {
            color: white; 
        }

        #year option{
            color: black;
        }

        #course option{
            color: black;
        }

        @media (max-width: 768px) {
            .form-container {
                width: 80%;
            }
        }
    </style>
</head>
<body>

<?php
include'navbar_admin.php';
?>  

    <div class='form-container'>
        <h2>Student Registration Form</h2>
     
        <form action="submit_form.php" method="POST">

            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName" required placeholder="Enter Full Name">

            <label for="fatherName">Father's Name</label>
            <input type="text" id="fatherName" name="fatherName" required placeholder="Enter Father's Name">

            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" required>

            <label>Gender</label>
            <div class="gender-group">
                <label for="male">
                    <input type="radio" id="male" name="gender" value="Male" required> Male
                </label><br>
                <label for="female">
                    <input type="radio" id="female" name="gender" value="Female" required> Female
                </label><br>
                <label for="other">
                    <input type="radio" id="other" name="gender" value="Other" required> Other
                </label>
            </div>

            <label for="contact">Contact Number</label>
            <input type="text" id="contact" name="contact" required placeholder="Enter Contact Number">

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required placeholder="Enter Email Address">

            <label for="address">Address</label>
            <textarea id="address" name="address" rows="4" required placeholder="Enter Address"></textarea>

            
            <label for="category">Category </label>
            <select id="year" name="category" required>
                <option value="">Select Category</option>
                <option value="General">GEN</option>
            <option value="SC">SC </option>
            <option value="OBC">OBC </option>
            <option value="Other">Other</option>
            </select>

            <label for="course">Select Course</label>
            <select id="course" name="course" required>
                <option value="">Select a Course</option>
                <option value="Information technology">Information Technology</option>
                <option value="Electronics">Electronics</option>
                <option value="Civil Engineering">Civil Engineering</option>
                <option value="Pharmacy">Pharmacy</option>
                <option value="Mechanical Engineering">Mechanical Engineering</option>
            </select>

            <label for="year">Year </label>
            <select id="year" name="year" required>
                <option value="">Select Year</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>

            <button type="submit" class="submit-btn" name="submit">Register Student</button>
        </form>
    </div>
    <?php
include'footer.php';
?>
</body>
</html>
