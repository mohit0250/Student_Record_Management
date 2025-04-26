<?php
session_start(); 

if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] == 'admin') {
    $_SESSION['loginError']='&#x261D; Please Login first.';
    header('location:index.php');


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   



        .navbar {
            background-color:rgba(208, 223, 225, 0.8);
            overflow: hidden;
            flex-shrink: 0; 
            color: black;
            border: none;
            border-radius: 11px;
        }

        .navbar a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 16px;
        }

        .navbar a:hover {
            color: rgb(138, 204, 239);
        }

        .navbar .right {
            position: absolute;
            right: 1px;
        }

        .navbar .add-btn {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 14px 20px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }

        .navbar .add-btn:hover {
            background-color: #45a049;
        }

        .navbar a.active {
            color: rgb(77, 166, 239);
        }


      
        @media (max-width: 168px) {
            .navbar a {
                float: none;
                display: flex;
                justify-content: space-between;
                text-align: left;
                padding: 12px;
            }

            .navbar .right {
                float: none;
                text-align: left;
            }

            .navbar {
                text-align: center;
            }

            .m1 {
                width: 100%;
                height: 200px; 
            }
        }
        .word{

            display: block;
            margin-top: 120px;
            position: absolute;
            right: 20%;
        }
        .word h1{
            margin: 0px;
            color: rgb(77, 166, 239);


        }
        .word span{
            filter: drop-shadow(0 4px 8px rgb(64, 176, 245));

            color: rgb(77, 166, 239);
        }
        .n1{
            position: relative;
            right:35% ;
            filter: drop-shadow(0 4px 8px rgb(64, 176, 245));

        }
        .n2{
            position: relative;
filter: drop-shadow(0 4px 8px rgb(64, 176, 245));
right: 25%;

        }
        .n3{
            position: relative;
            filter: drop-shadow(0 4px 8px rgb(64, 176, 245));
right: 15%;
        }
        a:hover{
            transform: translateY(-10px);

        }
        </style>
</head>
<body>
<div class="navbar">
        <a href="User_Index.php">Home</a>
        <a href="user_view_records.php">View Records</a>
        <a href="user_course.php">Course</a>
        <a href="contact_user.php">Contact Us</a>
        <a href="about_user.php">About Us</a>
       
        <a href="index.php" class="right">Logout</a>
    </div>
    <script>
        window.onload = function() {
            const navbarLinks = document.querySelectorAll('.navbar a');
            const currentPage = window.location.pathname;

            navbarLinks.forEach(link => {
                link.classList.remove('active');
                if (currentPage.includes(link.getAttribute('href'))) {
                    link.classList.add('active');
                }
            });
        };
    </script>
</body>
</html>