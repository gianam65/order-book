<?php
    if(isset($_GET["updateId"])) {
        $updateId = $_GET["updateId"];
        $conn = mysqli_connect('localhost','root','','database_book'); 
        $sql = "UPDATE `tb_order` SET `order_status` = '1' WHERE `tb_order`.`order_id` = $updateId";
        $result = mysqli_query($conn,$sql);

        if($result > 0){
            echo '<script>alert("Cập nhật đơn hàng thành công")</script>';
            echo '<script>window.location = ".././route/admin/order.php"</script>';
        }else{
            header("Location: .././error.php");
        }
    }

?>