<?php
    include 'connectdb.php';
    $page_id = $_GET['page_id'];
    $sql = "DELETE FROM pages WHERE page_id = $page_id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: pages.php?msg=Record delete successfully");
    }
    else{
        echo"Failed".mysqli_error($conn);
    }
?>