<?php
    if(isset($_GET["deleteId"])) {
        $deleteId = $_GET['deleteId'];
        $conn = mysqli_connect('localhost','root','','database_book');
        if(!$conn) {
            die("Không thể kết nối");
        }
        $sql = "UPDATE `tb_order` SET `order_status` = '0' WHERE `tb_order`.`order_id` = $deleteId";
        $result = mysqli_query($conn,$sql);
        if($result > 0){
            echo '<script>alert("Từ chối đơn hàng thành công")</script>';
            echo '<script>window.location = ".././route/admin/order.php"</script>';
        }else{
            header("Location: .././error.php");
        }
    }
?>