<?php
    $idGet = $_GET['id'];
    
    $conn = mysqli_connect('localhost','root','','database_book');
    if(!$conn) {
        die("Không thể kết nối");
    }
    $sql1 = "DELETE FROM tb_order WHERE tb_order.user_id = $idGet ";
    $result1 = mysqli_query($conn, $sql1);
    
    if($result1) {
        $sql2 = "DELETE FROM tb_users WHERE tb_users.user_id = $idGet ";
        $result2 = mysqli_query($conn, $sql2);
        if($result2) {
            header("Location: .././route/admin/index.php");
        } else {
            header("Location: .././error.php");
        }
    } else {
        header("Location: .././error.php");
    }
?>