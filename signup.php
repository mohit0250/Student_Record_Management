

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #2C3E50;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
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
            color: white;
            font-size: 16px;
        }

        input::placeholder {
            color: white;
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
            margin-top: 22px;
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
        <h2>Sign Up</h2>

        <form action="signup_action.php" method="POST">
            <input type="text" name="email" placeholder="Enter your username or email" required>

            <input type="password" name="password" placeholder="Enter your password" required>
            <input type="password" name="confirm_password" placeholder="confirm your password" required>

            <button type="submit" class="login-btn" name="signup">Sign Up</button>
        </form>
        
<a href="index.php" class="btn-up">Already have a account , Login</a>

    </div>
     
       

</body>
</html>
