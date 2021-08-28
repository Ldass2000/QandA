<?php
require('includes/db.php');
include('includes/function.php');

if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}

$post_per_page = 4;
$result = ($page - 1) * $post_per_page;

//$result(1-1*5) =0;
//$result(2-1*5) =5;
//$result(3-1*5) =10;

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>QandA</title>
</head>

<body>
  <?php include_once('includes/navbar.php'); ?>
  <div>
    <div class="container m-auto mt-3 row" id="front">
      <h3 style="margin-left:250px; color:#555">Posted Answer</h3>
      <div class="col-8">
        <?php
        if (isset($_GET['search'])) {
          $keyword = $_GET['search'];
          $postQuery = "SELECT * FROM posts WHERE title LIKE '%$keyword%' ORDER BY id DESC  LIMIT $result,$post_per_page";
        } else {
          $postQuery = "SELECT * FROM posts ORDER BY id DESC  LIMIT $result,$post_per_page";
        }

        $runPQ = mysqli_query($db, $postQuery);
        while ($post = mysqli_fetch_assoc($runPQ)) {
        ?>
          <div class="card mb-3" style="max-width: 800px;">
            <a href="post.php?id=<?= $post['id'] ?>" style="text-decoration: none; color:black">
              <div class="row g-0" id="Postquestion">
              <div class="col-md-5" style="background-image: url('images/<?=getPostThumb($db,$post['id'])?>');background-size: cover">
                  <!-- <img src="https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg" alt="..."> -->
                </div>
                <div class="col-md-7">
                  <div class="card-body">
                    <h5 class="card-title"><?= $post['title'] ?></h5>
                    <p class="card-text text-truncate"><?=strip_tags($post['content']) ; ?></p>
                    <p class="card-text"><small class="text-muted">Posted on <?= date('F jS,Y', strtotime($post['created_at'])) ?></small></p>
                  </div>
                </div>
              </div>
            </a>
          </div>

        <?php


        }

        ?>




      </div>

      
    <?php include_once('includes/postquestion.php'); ?>

      
    </div>


    </div>
    
    

    <?php
    if (isset($_GET['search'])) {
      $keyword = $_GET['search'];
      $q = "SELECT * FROM posts WHERE title LIKE '%$keyword%'";
    } else {
      $q = "SELECT * FROM posts";
    }

    $r = mysqli_query($db, $q);
    $total_posts = mysqli_num_rows($r);
    $total_pages = ceil($total_posts / $post_per_page);

    ?>
    

    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">

        <?php
        if ($page > 1) {
          $switch = "";
        } else {
          $switch = "disabled";
        }

        if ($page < $total_pages) {
          $nswitch = "";
        } else {
          $nswitch = "disabled";
        }


        ?>
        <li class="page-item <?= $switch ?>">
          <a class="page-link"<?php if (isset($_GET['search'])) {echo "search=$keyword&"; }?> href="?<?php if (isset($_GET['search'])) {echo "search=$keyword&"; }?>page=<?= $page - 1 ?>" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <?php
        for ($opage = 1; $opage <= $total_pages; $opage++) {
        ?>
          <li class="page-item"><a class="page-link" href="?<?php if (isset($_GET['search'])) {echo "search=$keyword&"; }?>page=<?= $opage ?>"><?= $opage ?></a></li>

        <?php

        }

        ?>

        <li class="page-item  <?= $nswitch ?>">
          <a class="page-link" href="?<?php if (isset($_GET['search'])) {echo "search=$keyword&"; }?>page=<?= $page + 1 ?>">Next</a>
        </li>
      </ul>
    </nav>

    <?php include_once('includes/footer.php'); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>