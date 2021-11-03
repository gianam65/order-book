<?php
    if(isset($_POST['updateUser'])) {
        $username = $_POST['username'];
        $useremail = $_POST['useremail'];
        $userphone = $_POST['userphone'];
        $userid = $_POST['user_id'];

        $conn = mysqli_connect('localhost','root','','database_book'); 
        $sql = "UPDATE tb_users SET user_name = '$username', user_email = '$useremail' ,user_phone = '$userphone' WHERE user_id = '$userid'";
        if(empty($username) || empty($useremail) || empty($userphone)) {
            $sql = "UPDATE tb_usersss SET user_name = '$username', user_email = '$useremail' ,user_phone = '$userphone' WHERE user_id = '$userid'";
        }
        $result = mysqli_query($conn,$sql);

        if($result > 0){
            header("Location: .././route/admin/index.php");
        } else{
            header("Location: .././error.php");
        }
    }
?>