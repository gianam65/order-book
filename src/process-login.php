<?php
    session_start();
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $conn = mysqli_connect('localhost','root','','database_book');
        if(!$conn) {
            die("Không thể kết nối");
        }

        $sql = "SELECT * FROM tb_users WHERE user_name ='$username' AND user_pass='$password'";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            $_SESSION['loginOK'] = $username;
            header("Location: .././index.php");
        } else{
            header("Location: .././error.php");
        }
    }
?>