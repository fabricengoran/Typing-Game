<?php
// session_start();
// $name = htmlentities($_POST['username']);
// $pwd = htmlentities($_POST['password']);


// $msg = '';
// $msgClass = '';

// $username = $_POST['username'];
// $password = $_POST['current-password'];

// $name = htmlentities($_POST['username']);
// $pwd = htmlentities($_POST['current-password']);

// if(filter_has_var(INPUT_POST, 'submit1')){

// // $name = isset($_POST['username']) ? $_POST['username'] : '';
// // $pwd = isset($_POST['password']) ? $_POST['password'] : '';
// require 'config/db.php';
// $query = "SELECT * FROM user_info WHERE username = '$username'";

// $result = mysqli_query($conn, $query);

// $logins = mysqli_fetch_array($result);
// // $logins = array('kzy Wara' => 'password','Brian Aka' => 'password1','Mercy Chinwo' => 'password2');

// 	// $logins = mysqli_fetch_array($result);

// 	// $name = htmlspecialchars($_POST['username']);
// 	// $pwd = htmlspecialchars($_POST['current-password']);

// 	if(!empty($username) && !empty($password)){
// 		// if
// 		$msg = 'Submitted';
// 		$msgClass = 'alert-success';
// 	}else{
// 		$msg = 'Please fill in all fields';
// 		$msgClass = 'alert-danger';
// 	}

// 	if($logins['password'] == $password){
// 		// $_SESSION['UserData']['username'] = $logins[$username];
	// header("location: index.php");
// 		$msg = 'Success';
// 		$msgClass = 'alert-success';
// 		exit;
// 	} else {
// 		$msg = 'Failed';
// 		$msgClass = 'alert-danger';
// 	}

//     // var_dump($logins);
// }

// if(isset($_POST['Submit'])){
// 	/* Define username and associated password array */
// 	$logins = array('kzy' => 'password','brian' => 'password1','mercy' => 'password2');
	
// 	/* Check and assign submitted Username and Password to new variable */
// 	$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
// 	$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
	
// 	/* Check Username and Password existence in defined array */		
// 	if (isset($logins[$Username]) && $logins[$Username] == $Password){
// 		/* Success: Set session variables and redirect to Protected page  */
// 		$_SESSION['UserData']['Username']=$logins[$Username];
// 		header("location:index.php");
// 		exit;
// 	} else {
// 		/*Unsuccessful attempt: Set error message */
// 		$msg="<span style='color:red'>Invalid Login</span>";
// 	}
// }
// if(isset($_POST['submit'])){
//     $name = htmlentities($_POST['username']) ? $_POST['username'] : '';
//     $pwd = htmlentities($_POST['current-password']) ? $_POST['current-password'] : '';
	
// 	if(isset($logins[$name]) == $name && $logins[$name] == $pwd){
// 		echo 'success';
// 		$_SESSION['UserData']['username']=$logins[$name];
// 		header("location:index.php");
// 	}else{
// 		echo 'Error';
// 	}
// }



// header('Location: index.php');

// echo $password;
// print_r($logins);
// session_start(); /* Starts the session */
	
// 	/* Check for Submitted Login Form */	
// 	if(isset($_POST['Submit'])){
// 		/* Define username and associated password array */
// 		$logins = array('kzy Wara' => 'password','Brian Aka' => 'password1','Mercy Chinwo' => 'password2');
		
// 		/* Check and assign submitted Username and Password to new variable */
// 		$Username = htmlentities($_POST['username']) ? $_POST['username'] : '';
// 		$Password = htmlentities($_POST['current-password']) ? $_POST['current-password'] : '';
		
// 		/* Check Username and Password existence in defined array */		
// 		if (isset($logins[$Username]) && $logins[$Username] == $Password){
// 			/* Success: Set session variables and redirect to Protected page  */
// 			$_SESSION['UserData']['username']=$logins[$Username];
// 			header("location:index.php");
// 			exit;
// 		} else {
// 			/*Unsuccessful attempt: Set error message */
// 			$msg="<span style='color:red'>Invalid Login</span>";
// 		}
// 	}
?>


<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="form1" class="card card-body">
<p class="text-center">Already have an account? signIn below</p>
<!-- <?php var_dump($logins); ?> -->
<hr>
<!-- <?php include 'alert.php'; ?> -->
<?php if($msg1 != '') : ?>
<div class="alert <?php echo $msgClass1; ?> text-center"><?php echo $msg1; ?></div>
<?php endif; ?>
<label for="username">Name</label>
<input type="text" name="username" value="<?php echo isset($_POST['username']) ? $username : ''; ?>" class="form-control" placeholder="Enter username..."><br>
<label for="current-password">Password</label>
<input type="password" name="current-password" value="<?php echo isset($_POST['password']) ? $password : ''; ?>" class="form-control" placeholder="Enter password..."><br>
<input type="checkbox"> Remember me <br><br>
<button type="submit" name="submit1" value="Submit" class="btn btn-primary btn-block">Login</button><br>
<!-- <p>Create an account. <button id="signup" class="text-success">signUp</button></p> -->
<p>Forgot password? Click <button id="signup" class="text-success">here</button></p>
</form><br>



