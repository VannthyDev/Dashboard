<?php
    include 'connectdb.php';
    $page_id = $_GET['page_id'];
    $post_id = $_GET['post_id'];
    
    $sql = "DELETE FROM related_page_post WHERE page_id = $page_id and post_id= $post_id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: rPage.php?msg=Record delete successfully");
    }
    else{
        echo"Failed".mysqli_error($conn);
    }
?>