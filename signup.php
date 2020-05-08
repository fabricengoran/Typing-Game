<?php
// session_start();
// $msg = 
?>



<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" id="form2" class="card card-body">
                    <p class="text-center">SignUp for free below</p>
                    <hr>
                    <!-- <?php include 'alert.php'; ?> -->
                    <?php if($msg2 != '') : ?>
                        <div class="alert <?php echo $msgClass2; ?> text-center"><?php echo $msg2; ?></div>
                    <?php endif; ?>
                    <label for="firstName">First Name</label>
                    <input type="text" name="firstName" value="<?php echo isset($_POST['firstName']) ? $fName : ''; ?>" class="form-control" placeholder="Enter first name...">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" value="<?php echo isset($_POST['lastName']) ? $lName : ''; ?>" class="form-control" placeholder="Enter last name...">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" class="form-control" placeholder="Enter email...">
                    <label for="current-password">Password</label>
                    <input type="password" name="current-password" class="form-control" placeholder="Enter password...">
                    <label for="new-password">Repeat Password</label>
                    <?php if($msg4 != '') : ?>
                        <div class="<?php echo $msgClass4; ?> text-center"><?php echo $msg4; ?></div>
                    <?php endif; ?>
                    <input type="password" name="new-password" class="form-control" placeholder="Enter password again..."><br>



                    <!-- <label for="sex">Sex
                    <select name="sex">
                            <option></option>
                            <option value="Female"> Female </option>
                            <option value="Male"> Male </option>
                            <option value="Other"> Other </option>
                    </select>
                    </label><br>


                    <label>Birthday</label>
                    <div class="row">
                        <div class="col-md-4">
                            <select name="month">
                        <option value="Month:">Month:</option>

                        <script type="text/javascript ">
                            var m = new Array("", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
                            for (i = 1; i <= m.length - 1; i++) {
                                document.write("<option value='" + i + "'>" + m[i] + "</option>");
                            }
                        </script>

                        </select>
                        </div>

                        <p>/</p>



                        <div class="col-md-3">
                            <select name="day">
                            <option value="Day:">Day:</option>

                            <script type="text/javascript">
                                for (i = 1; i <= 31; i++) {
                                    document.write("<option value='" + i + "'>" + i + "</option>");
                                }
                            </script>

                            </select>
                        </div>
                        <p>/</p>

                        <div class="col-md-3">
                            <select name="year">
                    <option value="Year:">Year: </option>
                    
                    <script type="text/javascript">
                    
                        for(i=2020;i>=1960;i--)
                        {
                            document.write("<option value='"+i+"'>" + i + "</option>");
                        }
                    
                    </script>
                    
                    </select>
                        </div>
                    </div><br> -->


                    <button type="submit" name="submit2" value="Submit" class="btn btn-success btn-block ">signUp</button><br>
                    <p>Already have an account? <button id="login " class="text-primary ">login</button></p>
                </form>