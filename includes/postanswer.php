<?php
require('db.php');
require('function.php');
session_start();

if (isset($_POST['submit1'])) {
  $_POST['category'] = $_SESSION['category'];

  // $_POST['content'] = $_SESSION['post_title'];
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href="../css/postanswer.css" rel="stylesheet">

  <title>Post Answer</title>
</head>

<body>

  <?php include_once('navbar.php'); ?>



  <div class="col-lg-12" style="padding: 40px 0px ;">

    <section class="panel">
      <header class="panel-heading">
        Add Answer
      </header>
      <div class="panel-body">
        <div class="form">
          <form action="../includes/addpost.php" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-group">

              <div class="col-sm-12">
                
             

                <label style="font-size: 17px;">Question Title</label>
                <input type="text" class="form-control" name="post_title">
                  <p>How to get  internship in first year 🙄</p>


              </div>
            </div>
            <div class="form-group">

              <div class="col-sm-12 ">
                <label style="font-size: 17px;">Answer Content</label>
                <textarea class="form-control ckeditor" name="post_content" rows="6"></textarea>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-sm-6">
                <div class="col-sm-12">
                  <label style="font-size: 17px;">Select Answer Category</label>

                  <select name="post_category" class="form-control">
                    <?php
                    $categories = getAllCategory($db);
                    foreach ($categories as $ct) {
                    ?>
                      <option value="<?= $ct['id'] ?>"><?= $ct['name'] ?></option>
                    <?php
                    }
                    ?>

                  </select>
                </div>
              </div>
              <div class="form-group col-sm-6">
                <div class="col-sm-12">
                  <label style="font-size: 17px;">Upload Photos(max 5)</label>

                  <input type="file" class="form-control" name="post_image[]" accept="image/*" multiple />
                </div>
              </div>
            </div>
            <input type="submit" name="addpost" class="btn btn-primary" value="Add Answer">
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