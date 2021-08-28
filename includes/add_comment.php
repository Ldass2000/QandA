<?php
require('db.php');
if(isset($_POST['addcomment'])){
    // print_r($_POST);
$name=mysqli_real_escape_string($db,$_POST['name']);
$comment=mysqli_real_escape_string($db,$_POST['comment']);
$post_id=$_POST['post_id'];
$query="INSERT INTO comments(comment,name,post_id) VALUES('$comment','$name',$post_id)";
if(mysqli_query($db,$query)){
    header("location:../post.php?id=$post_id");
}else{
    echo "comment is not addedd !";
}

}
?>