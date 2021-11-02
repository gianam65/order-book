<?php
    $idGet = $_GET['id'];
    
    $conn = mysqli_connect('localhost','root','','database_book');
    if(!$conn) {
        die("Không thể kết nối");
    }
    $sql = "DELETE FROM tb_users WHERE tb_users.user_id = $idGet";
    $result = mysqli_query($conn,$sql);
    if($result > 0){
        header("Location: .././route/admin/index.php");
    }else{
        header("Location: .././error.php");
    }
?>