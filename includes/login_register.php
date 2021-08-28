<?php
require('db.php');

session_start();

#for Login
if(isset($_POST['submit']))
{
    $query=" SELECT * FROM `registration` WHERE `email`='$_POST[email_username]' OR `username`= '$_POST[email_username]'";
    $result=mysqli_query($db,$query);

    if($result)
    {
       if(mysqli_num_rows($result)==1)
       {
          $result_fetch=mysqli_fetch_assoc($result);
          if(password_verify($_POST['password'], $result_fetch['password']))
          {
              #if password matched
              $_SESSION['logged_in']=true;
              $_SESSION['username']=$result_fetch['username'];
              header("location:../Home/QandA.php");
              
          }
          else
          {
              #if Incorrect Password
              echo"
              <script>
               alert('Incorrect Password');
               window.location.href='signup.php'
              </script>
              ";
          }
       }
       else
       {
        echo"
        <script>
         alert('Email or Username not Registred');
         window.location.href='signup.php'
        </script>
        ";
       }
    }
    else
    {
        echo"
        <script>
         alert('can not run Query');
         window.location.href='signup.php'
        </script>
        ";
    }
}

 #for Registration
if (isset($_POST['register']))
 { 
     $user_exist_query=" SELECT * FROM `registration`  WHERE `username`='$_POST[username]' OR `email`='$_POST[email]' ";
     $result=mysqli_query($db,$user_exist_query);

     if($result)
     {
         if(mysqli_num_rows($result)>0)  #it will be  execute  if username or email is already taken
         {
            #if any user has already taken username or email
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['username']==$_POST['username'])
            { 
                #error for username already registered
                echo"
                <script>
                 alert('$result_fetch[username] - username already taken');
                 window.location.href='signup.php'
                </script>
                ";

            }
            else
            {
                #error for email already registered
                echo"
                <script>
                 alert('$result_fetch[email] - E-mail already taken');
                 window.location.href='signup.php'
                </script>
                ";
            }
         }
         else #It will be executed if none is taken username or email
         {

            $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
             $query="INSERT INTO `registration`(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]', '$_POST[email]', '$password') "; 
             if(mysqli_query($db,$query))
             {
                 #if data inserted successfully
                 echo"
                 <script>
                  alert('Registration successfull');
                  window.location.href='login.php'
                 </script>
                 "; 

             }
             else
             {
                 #if data can not be inserted
                echo"
                <script>
                 alert('can not be inserted');
                 window.location.href='signup.php'
                </script>
                "; 
             }
         }

     }
     else
     {
       echo"
       <script>
        alert('can not run Query');
        window.location.href='signup.php'
       </script>
       ";
     }
    
}

?>