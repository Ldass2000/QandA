<?php
require('db.php');
require('function.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="../css/postanswer.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <title>Post Question</title>
</head>

<body>
<?php include_once('navbar.php'); ?>

   
<div class="col-lg-12">
                <section class="panel">
                  <header class="panel-heading">
                    Add Question
                  </header>
                  <div class="panel-body">
                    <div class="form">
                      <form action="../includes/addquestion.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group">
                      <!-- <div class="col-sm-12">
                        <label>Question  Title</label>
                            <input type="text" class="form-control" name="post_title">
                          </div> -->
</div>
<div class="form-group">
                         
                         <div class="col-sm-12 ">
                         <label style="font-size: 17px;">Post Question</label>
                           <textarea class="form-control ckeditor" name="Post_content" rows="6"></textarea>
                         </div>
                       </div>
                      

<div class="row">
<div class="form-group col-sm-6">
                      <div class="col-sm-12">
                        <label>Select Question Category</label>

                           <select name="Post_title" class="form-control">
                         
                           <option value="Sports">Sports</option>
                  <option value="Technology">Technology</option>
                     <option value="Books">Books</option>
                    <option value="Photography">Photography</option>
                      <option value="Projects">Projects</option>
                   <option value="enterpreneurship">enterpreneurship</option>
                   <option value="Training">Training</option>
                   <option value="Online Courses">Online Courses</option>
                   <option value="Internship">Internship</option>
                   <option value="Interview Experience">Interview Experience </option>
                   <option value="Developers">Developers</option>
                   <option value="Subjects">Subjects</option>
                   <option value="extracurricular">extracurricular</option>
                  
</select>
                          </div>
</div>

</div>
<br>
                        <input type="submit" name="addquestion" class="btn btn-primary" value="Add Question">
                      </form>
                    </div>
                  </div>
                </section>
              </div>

              <?php include_once('footer.php'); ?>


    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>