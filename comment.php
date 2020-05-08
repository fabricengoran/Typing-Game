<?php
// session_start();
// header("Location: index.php");
// $msg = '';
// $msgClass = '';

// $username = $_POST['username'];
// $email = $_POST['email'];
// $message = $_POST['message'];

// if(filter_has_var(INPUT_POST, 'submit3')){
// 	// $name = htmlspecialchars($_POST['username']);
//     // $email = htmlspecialchars($_POST['email']);
//     // $message = htmlspecialchars($_POST['message']);
    
//     require 'config/db.php';
//     $query1 = "SELECT * FROM user_info WHERE username = '$username'";
//     $result1 = mysqli_query($conn, $query1);
//     $logins1 = mysqli_fetch_array($result1);
//     // $logins1 = mysqli_connect_errno($result1);
    
//     if(!empty($username) && !empty($email) && !empty($message)){
//         if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
//             $msg = 'Please use a valid email';
//             $msgClass = 'alert-danger';
//         }else{
//         //     $_SESSION['UserData']['username'] = $logins1['username'];
// 		// header("location:index.php");

//             ini_set('localhost', '25');
//             $toEmail = 'support@anonymous.com';
//             $subject = 'Contact Request From '.$username;
//             $body = '<h2>Contact Request</h2>
//             <h4>Name</h4><p>'.$username.'</p>
//             <h4>Email</h4><p>'.$email.'</p>
//             <h4>Message</h4><p>'.$message.'</p>
//             ';
    
//             $headers = 'MIME-Version: 1.0' ."\r\n";
//             $headers .= 'Content-Type: text/html; charset = UTF-8' ."\r\n";
    
//             $headers .= 'From: ' .$username. '<'.$email.'>'."\r\n";
    
//             if(mail($toEmail, $subject, $body, $headers)){
//                 $msg = 'Your email has been sent';
//                 $msgClass = 'alert-success';
//             }else{
//                 $msg = 'Your email was not sent';
//                 $msgClass = 'alert-danger';
//             }
//         }
//     }else{
//         $msg = 'Please fill in all fields';
//         $msgClass = 'alert-danger';
//     }
// }


?>



<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="form3" class="card card-body">
                    <p class="text-center">Leave a message below</p>
                    <hr>
                    <!-- <?php include 'alert.php'; ?> -->
                    <?php if($msg3 != '') : ?>
                    <div class="alert <?php echo $msgClass3; ?> text-center"><?php echo $msg3; ?></div>
                    <?php endif; ?>
                    <label for="username">Name</label>
                    <input type="text" name="username" value="<?php echo isset($_POST['username']) ? $username : ''; ?>" class="form-control" placeholder="Enter name..."><br>
                    <label for="email">Email</label>
                    <input type="email" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" class="form-control" placeholder="Enter email..."><br>
                    <label for="message">message</label>
                    <textarea name="message" id="comment" class="form-control" placeholder="Leave us a message..."><?php echo isset($_POST['message']) ? $message : ''; ?></textarea><br>
                    <input type="checkbox"> Reply me<br><br>
                    <button type="submit" name="submit3" value="Submit" class="btn btn-warning btn-block">Submit</button><br>
                </form>