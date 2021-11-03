<?php
    session_start();
    if(isset($_POST['login-admin'])){
        $admin_name = $_POST['admin-name'];
        $admin_password = $_POST['admin-password'];

        $conn = mysqli_connect('localhost','root','','database_book');
        if(!$conn) {
            die("Không thể kết nối");
        }

        $sql = "SELECT * FROM tb_admin WHERE admin_name ='$admin_name' AND admin_pass='$admin_password'";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            $_SESSION['loginOK'] = $admin_name;
            header("Location: .././route/admin/index.php");
        } else{
            header("Location: .././error.php");
        }
    }
?>