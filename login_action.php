


<?php
session_start();

include 'connect.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $isql = "INSERT INTO login (email, password) VALUES ('$email', '$password')";
    $iresult = mysqli_query($conn, $isql);

    $sql = "SELECT * FROM faculty WHERE email = '$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

   

        if ($iresult) {
            

            if ($iresult) {
                if ($email == "admin@gmail.com" && $password == "admin") {
                    $_SESSION['user_type'] = $password;
                    $_SESSION['email'] = $email;
                    header("Location: Admin_Index.php");
                    exit;
                } 
                 if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $Semail = $row['email'];
                    $Spassword = $row['password'];
                
                if($Semail == $email && $Spassword == $password) {
                    $_SESSION['user_type'] = $password;
                    $_SESSION['email'] = $email;
                    header("Location: user_index.php");
                    exit;
                }
            } else {
                header('Location: login.php');
                $_SESSION['not_login'] = 'Sorry, You Are Not Allowed to Access This Website.';
            }
        } else {
            header('Location: login.php');
            $_SESSION['signup_first'] = '&#x1F447;  please Sign Up first.';
        }
    } else {
        header('Location: login.php');
        $_SESSION['signup_first'] = '&#x1F447;  please Sign Up first.';
    }
} else {
    header('Location: login.php');
    exit;
}
?>
