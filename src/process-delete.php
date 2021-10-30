<?php
    $idGet = $_GET['id'];
    
    $conn = mysqli_connect('localhost','root','','database_book');
    if(!$conn) {
        die("Không thể kết nối");
    }
    $sql = "DELETE FROM tb_books WHERE tb_books.book_id = $idGet";
    $result = mysqli_query($conn,$sql);
    if($result > 0){
        header("Location: .././route/manager/index.php");
    }else{
        header("Location: .././error.php");
    }
?>