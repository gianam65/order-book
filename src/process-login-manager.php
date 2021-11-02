<?php
    session_start();
    if(isset($_POST['login-manager'])){
        $manager_name = $_POST['manager-name'];
        $manager_password = $_POST['manager-password'];

        $conn = mysqli_connect('localhost','root','','database_book');
        if(!$conn) {
            die("Không thể kết nối");
        }

        $sql = "SELECT * FROM tb_book_manager WHERE manager_name ='$manager_name' AND manager_pass='$manager_password'";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            $_SESSION['loginManager'] = $manager_name;
            header("Location: .././route/manager/index.php");
        } else{
            header("Location: .././error.php");
        }
    }
?>