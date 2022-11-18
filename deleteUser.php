<?php
    include 'connectdb.php';
    $user_id = $_GET['user_id'];
    $sql = "DELETE FROM user WHERE user_id = $user_id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: user.php?msg=Record delete successfully");
    }
    else{
        echo"Failed".mysqli_error($conn);
    }
?>