<?php
session_start(); 

session_destroy(); 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #6c5ce7, #00b894);
            color: #fff;
        }
        header {
            color: #fff;
            text-align: center;
            padding: 30px 0;
            font-size: 2.5em;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 70vh;
            gap: 30px;
            padding: 20px;
            flex-wrap: wrap;
        }
        .panel {
            width: 280px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .panel:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .admin {
            background-color: #0984e3;
        }
        .faculty {
            background-color: #fdcb6e;
        }
        h2 {
            margin-bottom: 20px;
            font-size: 1.6em;
            font-weight: 600;
        }
        p {
            margin-bottom: 20px;
            font-size: 1.1em;
            font-weight: 300;
        }
        button {
            padding: 12px 24px;
            font-size: 1.2em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }
        .admin-btn {
            background-color: #00b894;
            color: white;
        }
        .admin-btn:hover {
            background-color: #00a27e;
            transform: scale(1.05);
        }
        .faculty-btn {
            background-color: #e17055;
            color: white;
        }
        .faculty-btn:hover {
            background-color: #d35400;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<header>
    Welcome to the Student Management System
</header>

<div class="container">
    <div class="panel admin">
        <h2>Admin Panel</h2>
        <p>Manage student records, faculty details, and more.</p>
        <button class="admin-btn" onclick="window.location.href='login.php'">Login as Admin</button>
    </div>

    <div class="panel faculty">
        <h2>Faculty Panel</h2>
        <p>Access your courses, student lists ,  and more.</p>
        <button class="faculty-btn" onclick="window.location.href='login.php'">Login as Faculty</button>
    </div>
</div>

</body>
</html>
