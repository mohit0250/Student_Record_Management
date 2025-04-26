<?php
session_start(); 




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
       

        body {
            background-image: url("img/mmm2.jpg"); /* Ensure the image path is correct */
            background-size: cover;  /* Makes sure the image covers the entire screen */
            background-position: center;  /* Centers the image */
            background-repeat: no-repeat; /* Prevents the image from repeating */
            font-family: 'Arial', sans-serif;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            backdrop-filter: blur(10px);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: rgba(255, 255, 255, 0.3);
            color: black;
            font-size: 16px;
        }

        input::placeholder {
            color: black;
        }

        .login-btn {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 11px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 11px;
        }

        .login-btn:hover {
         
            background-color: #2980b9;
            transform: scale(1.03);
        }


        @media (max-width: 768px) {
            .login-container {
                width: 90%;
            }
        }
        .btn-up{
            margin-top: 12px;
            display: flex;
            justify-content: center;
            text-decoration: none;
            color: red;
        }
        .btn-up:hover{
            color: rgba(210, 13, 89, 0.61);
        }
       
    </style>
</head>
<body>



    <div class="login-container">
        <h2>Login</h2>

        <form action="login_action.php" method="POST">
            <input type="text" name="email" placeholder=" Email" required>

            <input type="password" name="password" placeholder=" Password" required>

            <button type="submit" class="login-btn" name="login">Login</button>
        </form>
         <?php
error_reporting(0);

echo"<p style='color: red; text-align:center;padding-top:12px;'>".$_SESSION['loginError']."</p>";
echo"<p style='color: red; text-align:center;padding-top:12px;'>".$_SESSION['not_login']."</p>";
?>

    </div>
     
       

</body>
</html>
