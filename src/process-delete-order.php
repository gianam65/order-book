<?php
    $idGet = $_GET['id'];
    
    $conn = mysqli_connect('localhost','root','','database_book');
    if(!$conn) {
        die("Không thể kết nối");
    }
    $sql = "DELETE FROM tb_order WHERE tb_order.order_id = $idGet";
    $result = mysqli_query($conn,$sql);
    if($result > 0){
        header("Location: .././route/global/order-detail.php");
    }else{
        header("Location: .././error.php");
    }
?>