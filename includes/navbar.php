
<?php
require('db.php');
if (isset($_POST["submit2"])) {
  ?>
  <script type="text/javascript">
  window.location="includes/askquestion.php";
</script>
  <?php
  
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>signup</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/modal.css">
  <script defer src="../includes/js/js/modal.js"></script>
  
</head>

<body>


<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">QandA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
<?php
$navQuery = "SELECT * FROM menu";
$runNav=mysqli_query($db,$navQuery);
while($menu=mysqli_fetch_assoc($runNav)){
  $no = getSubMenuNo($db,$menu['id']);
  if(!$no){
    ?>
<li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?=$menu['action']?>"><?=$menu['name']?></a>
              </li>
    <?php
  }else{
    ?>
<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?=$menu['action']?>" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?=$menu['name']?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
<?php
$submenus = getSubMenu($db,$menu['id']);
foreach($submenus as $sm){
  ?>
                  <li><a class="dropdown-item" href="<?=$sm['action']?>"><?=$sm['name']?></a></li>

  <?php
}
?>
                  

                </ul>
              </li>
    <?php
  }
  ?>

  <?php
}
?>
           
           
              
    
            </ul>
          
            <form class="d-flex">
         
            
              <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
              <a href=""> <button class="btn btn-success mr-1" type="submit"> Search </button></a>
            
            </form>
            <br>
            
            <div>
          
           
            </div>
            <br>
             
            <form  name = "form1" action="" method="POST">
                <input type="submit" name="submit2" value="Ask Question" style="background-color:#b5dab5;border-radius:10px;width:120px;height:40px;margin-left:8px;">
                
              </form>
        
          </div>
         
        </div>
      </nav>  
      </body>
      </html>
      
  