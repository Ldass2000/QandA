
<?php

session_start();

require('db.php');
if(isset($_POST['addquestion'])){
   $ptitle=mysqli_real_escape_string($db,$_POST['Post_title']);
   $pcontent=mysqli_real_escape_string($db,$_POST['Post_content']);
   $query="INSERT INTO question (category,content) VALUES(' $ptitle','$pcontent')";
$run=mysqli_query($db,$query);
$post_id=mysqli_insert_id($db);


 header('location:../index.php?');


}
?>