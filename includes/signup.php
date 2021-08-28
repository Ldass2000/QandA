
<?php
include 'db.php';


?>

<!DOCTYPE html>
<html>

<head>
  <title>signup</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/log.css">
</head>

<body>

<div class="container">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    <div class="myLeftCtn">
                        <form class="myForm text-center" action="login_register.php" method="POST" autocomplete="off">
                            <header>Create new account</header>
                           

                            <div class="form-group">
                                <i class="fas fa-user"></i>
                                <input class="myInput" name="fullname" placeholder="Fullname" type="text" id="fullname" required>
                            </div>

                           
                            <div class="form-group">
                                <i class="fas fa-user-circle"></i>
                                <input class="myInput" type="text" name="username" id="username" placeholder="Username" required>
                            </div>
                         
                            <div class="form-group">
                                <i class="fas fa-envelope"></i>
                                <input class="myInput" type="Email" name="email" id="email" placeholder="Email" required>
                            </div>
                         
                            <div class="form-group">
                                <i class="fas fa-lock"></i>
                                <input class="myInput" type="password" name="password" id="password" placeholder="Create password" required>
                            </div>
                         

                            <div class="form-group">
                                <label>
                                    <input id="check_1" name="check_1" type="checkbox" required><small> I read and agree to Terms & Conditions</small></input>
                                    <div class="invalid-feedback">You must check the box.</div>
                                </label>
                            </div>
                            <input type="submit" name="register" class="butt" value="CREATE ACCOUNT">
                           
                        </form>
                    </div> 
                </div>
                
                <div class="col-md-6">
                    <div class="myRightCtn"> 
                        <div class="box">
                            <header>Hello Friends!</header>

                            <p>Enter your detailsand start journey with us</p>
                            <input type="button" class="butt_out" value="Learn More" />
                        </div>
                     
                    </div>
                    <div class="link">Already ! registered<a href="login.php"> <br>Login here</div>
                </div>
               
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>