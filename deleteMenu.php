<?php
    include 'connectdb.php';
    $menu_id = $_GET['menu_id'];
    $sql = "DELETE FROM menu WHERE menu_id=$menu_id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: menu.php?msg=Record delete successfully");
    }
    else{
        echo"Failed".mysqli_error($conn);
    }
?>