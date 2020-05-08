<?php
include_once 'server.php';
if (!isset($_SESSION['username'])) {
	header("location: index.php");
}
?>

<!-- <?php if(isset($_SESSION['success'])) : ?>
    <div class="error-success">
        <h3>
            <?php $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </h3>
    </div>
<?php endif; ?>

<?php if(isset($_SESSION['username'])) : ?>
    <p>
        Welcome
        <strong>
            <?php echo $_SESSION['username']; ?>
        </strong>
    </p>
    <p>
        <a href="index.php?logout.php = '1'" style="color: red;">
        Click here to logout.
    </a>
    </p>
<?php endif; ?> -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Word-Ngame | Game</title>
    <link rel="stylesheet" href="css/1_bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js "></script>
</head>
<style>
    body {
        /* background: rgb(37, 43, 66); */
    }
    
    p {
        /* color: #fff; */
    }
    
    h3 {
        /* background: rgb(118, 128, 161); */
    }
    
    button{
        /* text-decoration: none; */
    }
    /* option:active:hover {
        background: black;
    } */
    
    .row {
        /* padding-left: -50px;
        padding-right: 20px; */
    }
    
    #form1 {
        display: block;
        border-top: solid 3px #007bff;
        border-radius: 15px;
    }
    
    #form2 {
        display: block;
        border-top: solid 3px green;
        border-radius: 15px;
    }
    
    #form3 {
        display: block;
        border-top: solid 3px orange;
        border-radius: 15px;
    }
    
    ul li {
        display: inline;
    }
    
    img {
        border-radius: 5px;
    }
    
    #current-word {
        /* background: white; */
        /* color: black; */
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, serif;
        /* text-align: center; */
        /* display: inline; */
    }
    
    .container {
        /* display: inline; */
        font-family: cursive;
    }
    
    #account {
        font-family: cursive;
    }

    header {
        font-family: cursive;
        box-shadow: 3px 3px 3px 4px #343a40;
        border-radius: 5px;
        background: #6c7;
    }
</style>

<body class="bg-dark text-white">
    <div class="navbar bg-secondary text-left p-3 mb-5 pl-5 border-bottom">
        <header>
            <h1>Word-Ngame</h1>
        </header>

        <?php if(isset($_SESSION['username'])) : ?>
        <div class="row">
            <div id="account" class="badge">
                <p class="mr-2" style="margin-bottom: 1px;"><?php echo isset($_POST['submit1'])  ? $_SESSION['username'] : ''; ?></p>
                <p style="margin-bottom: 3px;"><span id="points"><?php echo isset($_POST['submit1']) ? $_SESSION['point'] : ''; ?></span><?php echo isset($_POST['submit1']) ? $_SESSION['pts'] : ''; ?></p>
                <p id="rank" class="text-warning"><?php echo isset($_POST['submit1']) ? $_SESSION['rank'] : ''; ?></p>
            </div>
            <!-- <div class="mr-2 profile_image" width="40px" height="38px" alt="User"><?php $pic['submit1']; ?></div> -->
            <img src="<?php echo isset($_POST['submit1']) ? $_SESSION['avatar'] : $avatar; ?>" class="mr-2 profile_image" width="40px" height="38px" alt="User">
            <div class="text-left">
                <button class="btn btn-primary" id="btnLogin">signIn</button>
            </div>

            <div class="text-right mr-5">
                <button class="btn btn-success" id="btnSignup">signUp</button>
            </div>
        </div>
        <?php endif; ?>

        <!-- <h2 class="decoration-none"><a href="login.php">Login</a></h2> -->
    </div>
    <div class="container text-center">
        
        <!-- <?php if(isset($_SESSION['success']) && isset($_POST['submit1'])) : ?>
            <p id="galoon" class="badge"><?php echo $_SESSION['success']; ?></p>
            <?php unset($_SESSION['success']); ?>
        <?php endif; ?> -->

    <!-- <?php if(isset($_SESSION['success'])) : ?>
    <div class="error-success">
        <h3>
        <?php echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </h3>
    </div>
<?php endif; ?> -->

<?php if(isset($_SESSION['username'])) { ?>
    <?php if(isset($_POST['submit1']) ) { ?>
    <p id="">
        Welcome
        <strong>
            <?php echo $_SESSION['username']; ?>
        </strong>
    </p>
    <p id="">
        <a href="index.php?logout.php = '1'" style="color: red;">
        Click here to logout.
    </a>
    </p>
    <?php
    }
}
    ?>
        
        
        
        <div class="row">
            
            <div class="text-left text-dark form-group mx-auto col-md-4">
                
                
                <?php include 'login.php';?>
                <?php include 'comment.php';?>
                
                
                
            </div>
            
            
            <div class="col-md-4 mx-auto">
                <ul class="list-unstyled list-inline">
                    <li><button id="btnPlay" class="btn-success">></button></li>
                    <li><button id="btnPause" class="btn-warning">II</button></li>
                    <li><button id="btnReset" class="btn-danger">@</button></li>
                </ul>
                <p>Type the word below in <span class="text-warning" id="seconds">5</span> seconds to score a point.</p>
                
                <div class="form-group">
                    <label class="text-white"><small>Choose level</small>
                    <select class="form-control bg-info text-white">
                        <option value="5" class="bg-success text-dark">Easy</option>
                        <option value="4" class="bg-warning text-dark">Medium</option>
                        <option value="3" class="bg-danger text-dark">Hard</option>
                    </select></label>
                </div>
                
                <div class="row mt-5">
                    <div class="col-md-7">
                        <h3>Time Left: <span id="time">0</span></h3>
                    </div>
                    
                    <div class="col-md-5">
                        <h3>Score:
                            <span id="score">0</span></h3>
                        </div>
                    </div>
                    
                    <h2 class="display-2 mb-5" id="current-word"><span class="text-danger badge" style="font-family: cursive;">Loading...</span></h2>
                    <input type="text" class="form-control form-control-lg" id="word-list" placeholder="Start typing..." autofocus>
                    <h4 class="mt-3" id="message"></h4>
                    <h3 class="mt-3 text-primary" id="high-score"></h3>
                    
                    
                    
                    <!-- <div class="row mt-4">
                        <div class="col-md-12">
                            <button class="btn btn-success"><a href="index.html" class="text-dark text-decoration-none">Reset</a></button>
                        </div>
                    </div> -->
                    
                    
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <div class="card card-body bg-secondary">
                                <h5 class="text-info">Instructions</h5>
                                <p>Type each word in the given amount of seconds to score. To play again, just type the current word, your score will reset</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-left text-dark col-md-4 mx-auto form-group">
                    
                    
                    <?php include 'signup.php';?>
                    
                    
                    </div>
                </div>
            </div>
            
        </div>
    <script>
        // $(document).ready(function() {
        //     $('#form1, #form2').hide();
        //     $('#btnLogin').on('click', function() {
            //         $('#form1').toggle();
        //     });

        //     $('#btnSignup').on('click', function() {
            //         $('#form2').toggle();
            //     });
        // });
    </script>
<?php include 'js/main.php'; ?>
<!-- <?php echo $_SESSION['score']; ?> -->
    <!-- <script src="js/main.js "></script> -->
</body>

</html>