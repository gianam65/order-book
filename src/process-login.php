<?php
    session_start();
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $conn = mysqli_connect('localhost','root','','database_book');
        if(!$conn) {
            die("Không thể kết nối");
        }

        $sql = "SELECT * FROM tb_users WHERE user_name = '$username'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $password_hash = $row['user_pass'];

            if(password_verify($password, $password_hash)) {
                $_SESSION['loginOK'] = $username;
                $_SESSION['user_id'] = $row['user_id'];
                header("Location: .././index.php");
            } else {
                header("Location: .././error.php");
            }
        } else{
            header("Location: .././error.php");
        }
    }
?>