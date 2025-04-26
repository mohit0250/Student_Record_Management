<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record Management System</title>
    <style>
        body {
            background-image: url('img/m22.avif');
            background-size: cover;
            background-repeat: no-repeat;
            color: white;
            height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-y: auto;
        }

        .word {
            display: block;
            margin-top: 120px;
            position: absolute;
            right: 20%;
            color: black; /* Changed the text color to black */
            animation: fadeIn 2s ease-in-out; /* Animation added */
        }

        .word h1 {
            margin: 0px;
            color: black; /* Changed the text color to black */
        }

        .word span {
            filter: drop-shadow(0 4px 8px rgb(4, 49, 77));
            color: black; /* Changed the text color to black */
        }

        .n1 {
            position: relative;
            right: 35%;
            filter: drop-shadow(0 4px 8px rgb(2, 37, 58));
        }

        .n2 {
            position: relative;
            filter: drop-shadow(0 4px 8px rgb(5, 61, 95));
            right: 25%;
        }

        .n3 {
            position: relative;
            filter: drop-shadow(0 4px 8px rgb(3, 31, 49));
            right: 15%;
        }

        /* Animation Keyframes */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>

    <?php
    include'navbar_unknown.php';
    ?>
    
    <img src="https://images.wondershare.com/edrawmax/article2023/student-information-system-flowchart/student-information-system-flowchart-basics.jpg" alt="">
    
   

    <?php
    include'footer.php';
    ?>
</body>
</html>
