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
        echo '<script>alert("Tên đăng nhập đã tồn tại")</script>';
        echo "<script>window.location = '.././route/global/register.php'</script>";
    } else {
        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
        $sql2 = "INSERT INTO tb_users(user_name, user_email, user_pass, user_phone) VALUES ('$user', '$user_email','$pass_hash', '$phone')";
        if (empty($user) || empty($pass1) || empty($pass2) || empty($phone) || empty($user_email)) {
            $sql2 = "INSERT INTO tb_usersss(user_name, user_email, user_pass, user_phone) VALUES ('$user', '$user_email','$pass_hash', '$phone')";
			echo '<script>alert("Bạn vui lòng nhập đầy đủ thông tin")</script>';
            echo "<script>window.location = '.././route/global/register.php'</script>";
            return; 
		}
        $result2 = mysqli_query($conn, $sql2);
        if($result2 == true) {
            header("Location: .././index.php");
        } else {
            header("Location: .././error.php");
        }
    }
?>