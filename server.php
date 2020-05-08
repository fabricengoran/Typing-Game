<?php
session_start();
require_once 'config/db.php';

$msg1 = '';
$msgClass2 = '';

$msg2 = '';
$msgClass2 = '';

$msg3 = '';
$msgClass3 = '';

$msg4 = '';
$msgClass4 = '';

$avatar = 'images/about1.png';

$_SESSION['username'] = 'nobody';
$_SESSION['success'] = '';
$_SESSION['point'] = 0;
$_SESSION['rank'] = '';
$_SESSION['avatar'] = 'images/delete_post.gif';
$_SESSION['pts'] = '';
$_SESSION['msg'] = '';
$_SESSION['high_score'] = 0;
$_SESSION['score'] = 0;

if (isset($_POST['submit1'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['current-password']);

    // $password = md5($password);

    // require 'config/db.php';
    $query = "SELECT * FROM user_info WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    $logins = mysqli_fetch_array($result);

    // $password = md5($password);

    // $_SESSION['UserData']['username'] = $logins[$username];
    // header("location: index.php");

    if (filter_has_var(INPUT_POST, 'submit1')) {
        if (!empty($username) && !empty($password)) {
            if ($logins['password'] === $password) {
                // $_SESSION['UserData']['username'] = $logins[$username];
                // header("location: index.php");
                $msg1 = 'Submitted';
                $msgClass1 = 'alert-success';

                $_SESSION['success'] = 'Login success';
                $_SESSION['username'] = $logins['username'];
                $_SESSION['point'] = $logins['point'];
                $_SESSION['rank'] = $logins['rank'];
                $_SESSION['avatar'] = $logins['avatar'];
                $_SESSION['pts'] = 'pts';
                $_SESSION['high_score'] = $logins['high_score'];
                $_SESSION['score'] = $logins['score'];
                // if (!isset($_SESSION['username'])) {
                //     $_SESSION['username'] = $username;
                //     $_SESSION['point'] = $logins['point'];
                //     $_SESSION['rank'] = $logins['rank'];
                //     $_SESSION['avatar'] = $logins['avatar'];
                //     $_SESSION['pts'] = 'pts';
                    // header("location: login.php");
                // // exit;
                // header("location: index.php");
                //     // exit;
                // }
                // exit;
            } else {
                $msg1 = 'Failed';
                $msgClass1 = 'alert-danger';
            }
            // $msg1 = 'Submitted';
            // $msgClass1 = 'alert-success';
        } else {
            $msg1 = 'Please fill in all fields';
            $msgClass1 = 'alert-danger';
        }
        // var_dump($logins);
    }
}


if (isset($_POST['submit2'])) {
    $fName = $_POST['firstName'];
    $lName = $_POST['lastName'];
    $username = mysqli_real_escape_string($conn, $_POST['firstName'] .' '. $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['current-password']);
    $password0 = mysqli_real_escape_string($conn, $_POST['new-password']);

    // require 'config/db.php';
    $query = "SELECT * FROM user_info WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    $logins = mysqli_fetch_array($result);

    // $_SESSION['UserData']['username'] = $logins[$username];
    // header("location: index.php");

    // echo $username;

    $score = mysqli_real_escape_string($conn, 0);
    $point = mysqli_real_escape_string($conn, 0);
    $rank = mysqli_real_escape_string($conn, 'Sangalong');
    $avatar = mysqli_real_escape_string($conn, 'images/about1.png');
    $high_score = mysqli_real_escape_string($conn, 0);

    if (filter_has_var(INPUT_POST, 'submit2')) {
        if (!empty($fName) && !empty($lName) && !empty($email) && !empty($password) && !empty($password0)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $msg2 = 'Please use a valid email';
                $msgClass2 = 'alert-danger';
            } else {
                $msg2 = 'Please fill in all fields';
                $msgClass2 = 'alert-danger';
            }
            if ($password0 !== $password) {
                $msg4 = "Passwords don't match!";
                $msgClass4 = 'text-danger';
            }

            $password_ = md5($password);

            $addUser = "INSERT INTO `user_info` (username, email, password, score, point, rank, avatar, high_score) VALUES ('$username', '$email', '$password_', '$score', '$point', '$rank', '$avatar', '$high_score')";
            $insertUser = mysqli_query($conn, $addUser);
            if($insertUser){
                $msg2 = 'Account created successfully';
                $msgClass2 = 'alert-success';
            // } else if ($username === $_POST['username']) {
            //     $msg2 = 'Sorry! Name has already been taken';
            //     $msgClass2 = 'alert-danger';
            } else {
                $msg2 = 'Username combination taken';
                $msgClass2 = 'alert-danger';
            }
        }
    }
} 


if (isset($_POST['submit3'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // require 'config/db.php';
    $query = "SELECT * FROM user_info WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    $logins = mysqli_fetch_array($result);

    // $_SESSION['UserData']['username'] = $logins[$username];
    // header("location: index.php");

    if (filter_has_var(INPUT_POST, 'submit3')) {
        if (!empty($username) && !empty($email) && !empty($message)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $msg3 = 'Please use a valid email';
                $msgClass3 = 'alert-danger';
            } else {
            //     $_SESSION['UserData']['username'] = $logins1['username'];
            // header("location:index.php");
    
                ini_set('localhost', '25');
                $toEmail = 'support@anonymous.com';
                $subject = 'Contact Request From '.$username;
                $body = '<h2>Contact Request</h2>
                <h4>Name</h4><p>'.$username.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Message</h4><p>'.$message.'</p>
                ';
        
                $headers = 'MIME-Version: 1.0' ."\r\n";
                $headers .= 'Content-Type: text/html; charset = UTF-8' ."\r\n";
        
                $headers .= 'From: ' .$username. '<'.$email.'>'."\r\n";
        
                if (mail($toEmail, $subject, $body, $headers)) {
                    $msg3 = 'Your email has been sent';
                    $msgClass3 = 'alert-success';
                } else {
                    $msg3 = 'Your email was not sent';
                    $msgClass3 = 'alert-danger';
                }
            }
        } else {
            $msg3 = 'Please fill in all fields';
            $msgClass3 = 'alert-danger';
        }
    }
}
?>