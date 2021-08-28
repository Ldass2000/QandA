<?php
require('../includes/db.php');

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QANDA</title>
  <!--=================-Fontawesome icon-============================-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
  <!--=================-Google Fonts Poppins-============================-->
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css">


</head>

<body>
  <section>

    <div class="container">
      <div class="caption">

        <nav class="navbar">

          <div class="header">

            <div class="navbar-header">
              <a class="logo" href="#"><i class="fa fa-graduation-cap"></i></a>
            </div>
            <div class="m_button">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <ul class="nav navbar-nav">
            <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
            {
              echo "  <li><a href='../index.php'>Home</a></li>  ";
            }

            ?>
                
              <li><a href="../includes/about.php">About</a></li>
              <li><a href="../includes/ourteam.php">Team</a></li>
              <li><a href="../includes/contact.php">Contact</a></li>

            </ul>
            <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
            {    
            
              echo "
              <div class='user' style=' color: #30475e;
              background-color: #50bda1;
              padding: 16px 21px;
              margin-left: 800px;
              
              border-radius: 8px;
              font-weight: 500;'>
              $_SESSION[username] - <a href='logout.php' style='color:white;text-decoration:none;'>LOGOUT</a>
              </div>";
              
            }
            else
            {
              echo"
                
                <ul class='nav navbar-nav Contact'>
              <li><a href='../includes/login.php'><i class='fa fa-lock'></i>Login</a></li>
              <li class='sign'><a href='../includes/signup.php'>Sign up</a></li>
            </ul>
            
            
              ";
            }
            ?>
           

          

          </div>

        </nav>
    
        
        <div class="main">
          <div class="content">
            <h1> Ask<span> Qusetion</span>
              or Give <span>Answer</span>
            </h1>
            <p style="color: #555; font-size:22px; justify-content:'center';align-items:'center'">
              Welcome to <span style="color: #0e198b;"> QANDA 🙋‍♂️ !</span> QandA is a Question Answer site 
               for people who love to share Knowledge and Information.Register or Login
              to get started.Add a Question or submit an Answer to connect with 
              People.Find the topic that interest you using the search bar and
              share the content you like.
            </p>
            <!-- <a href="#" style="color:blue;">Get Started for free</a> -->

          </div>
          <div class="image">
            <img src="img/office.svg">
          </div>
        </div>

        <div class="footer">
          <div class="media">
            <h2 style="color: #555;">Follow Us</h2>
            <div class="social">
              <div><a href="#"><i class="fa fa-facebook"></i></a></div>
              <div><a href="#"><i class="fa fa-linkedin"></i></a></div>
              <div><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
          </div>


        </div>


      </div>

    </div>

  </section>

  <?php
if (isset($_SESSION['logged.in']) &&  $_SESSION['logged.in'] == true) {
  echo "<h1 style='text-align:center;margin-top:200px;'> WELCOME TO THIS WEBSITE - $_SESSION[username] </h1>";
}
  ?>




  <script src="js/jquery.js"></script>
  <script>
    $(".m_button").click(function() {
      $('body').toggleClass("active");
    });


    const btn = document.querySelector('.m_button');
    const nav = document.querySelector('.nav');
    btn.addEventListener('click', () => {
      nav.classList.toggle('active');
    })
  </script>

</body>

</html>