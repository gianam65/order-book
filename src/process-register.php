<?php
    if(isset($_POST['handleRegister'])) {
        $user = $_POST['username'];
        $user_email = $_POST['email'];
        $phone = $_POST['phone'];
        $pass1 = $_POST['password'];
        $pass2 = $_POST['cpassword'];
    }

    $conn = mysqli_connect('localhost', 'root', '', 'database_book');
    if(!$conn) {
        die("Không thể kết nối");
    }

    $sql = "SELECT * FROM tb_users WHERE user_name='$user'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        echo("Username đã tồn tại");
    } else {
        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
        $sql2 = "INSERT INTO tb_users(user_name, user_email, user_pass, user_phone) VALUES ('$user', '$user_email','$pass_hash', '$phone')";
        $result2 = mysqli_query($conn, $sql2);
        if($result2 == true) {
            header("Location: .././index.php");
        } else {
            header("Location: .././error.php");
        }
    }
?>