<?php
    include 'connectdb.php';
    $post_id = $_GET['post_id'];
    $sql = "DELETE FROM post WHERE post_id=$post_id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: post.php?msg=Record delete successfully");
    }
    else{
        echo"Failed".mysqli_error($conn);
    }
?>