<?php

    if(isset($_POST['addOrder'])) {
        $orderName = $_POST["orderName"];
        $orderNote = $_POST["orderNote"];
        $orderPhone = $_POST["orderPhone"];
        $orderLocation = $_POST["orderLocation"];
        $orderTotal = $_POST["orderTotal"];

        $conn = mysqli_connect('localhost','root','','database_book');
        if(!$conn) {
            die("Không thể kết nối");
        }
        $sql = "INSERT INTO tb_order(order_user_name, order_user_location, order_user_phone, order_user_note, order_user_total) VALUES ('$orderName','$orderLocation','$orderPhone','$orderNote', $orderTotal)";
        $result = mysqli_query($conn,$sql);

        if($result > 0){
            echo '<script>alert("Đặt hàng thành công")</script>';
            echo '<script>window.location = ".././index.php" </script>';
            session_start();
            if(isset($_SESSION['add-cart-item'])){
                unset($_SESSION['add-cart-item']);
            }
        } else{
            header("Location: .././error.php");
        }

    }
?>