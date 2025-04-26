<?php
include 'navbar_user.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <style>
       

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
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

        button {
            width: 100%;
            padding: 10px;
            background-color:rgb(50, 176, 235);
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color:rgb(158, 181, 239);
            transform: scale(1.03);

        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Contact Us</h2>
        <form action="https://api.web3forms.com/submit" method="POST">

            <input type="hidden" name="access_key" value="a63cca98-30eb-44cf-880b-9c70ffff6959">

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <input type="checkbox" name="botcheck" class="hidden" style="display: none;">

            <button type="submit">SEND MAIL </button>


        </form>
    </div>
    <?php
include'footer.php';

?>

</body>
</html>
