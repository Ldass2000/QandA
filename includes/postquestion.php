 
 <?php


 require('db.php');
//  include('function.php');

if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}
$post_per_page = 3;
$result = ($page - 1) * $post_per_page;

if (isset($_POST["submit1"])) {
      
  ?>
  <script type="text/javascript">
  window.location="includes/postanswer.php";
</script>
  <?php
  
}
 
 ?>

<div class="col-4">
<h4 style="color:#555">Posted Question</h4>
<?php
// $postQuery="SELECT * FROM question";
// $runPQ=mysqli_query($db,$postQuery);
// while ($questions=mysqli_fetch_assoc($runPQ)) {



  if (isset($_GET['search'])) {
    $keyword = $_GET['search'];
    $postQuery = "SELECT * FROM question WHERE category LIKE '%$keyword%' ORDER BY id DESC  LIMIT $result,$post_per_page";
  } else {
    $postQuery = "SELECT * FROM question ORDER BY id DESC  LIMIT $result,$post_per_page";
  }

  $runPQ = mysqli_query($db, $postQuery);
  while ($questions = mysqli_fetch_assoc($runPQ)) {
  ?>
     
     <div class="card md-7" style=" background: #c5dcec;
    box-shadow: 6px 6px 10px -1px rgba(0,0,0,0.15),
    -6px -6px 10px -1px rgba(255,255,255,0.7);
    border: 1px solid rgba(0,0,0,0);
    transition: transform 0.5s; ">
        
            <div class="card-body">
              <h5 class="card-title" style="color:#358597;"><?= $questions['category']?></h5>
              <p class="card-text text-truncate" name="content" style="color: #555;"><?=$questions['content']?></p>
              <p class="card-text"><small class="text-muted">Posted on <?= date('F jS,Y', strtotime($questions['created_at'])) ?></small></p>
              <!-- <a href="postanswer.php" class="btn btn-primary" >Answer this question</a> -->
              <form  name = "form1" action="" method="POST">
                <input type="submit" name="submit1" value="Answer" id="txt" style="background-color:#b5dab5;border-radius:10px">
                
              </form>
            </div>
          </div>
          <br>

  <?php
}
?>

  
          
          </div>