<?php
    $book_name = $_POST['bookName'];
    $book_price = $_POST['bookPrice'];
    $book_author = $_POST['bookAuthor'];
    $book_desc = $_POST['bookDesc'];
    $book_image = $_POST['bookImage'];
    $book_status = $_POST['bookStatus'];
    $book_id = $_POST['book_id'];

    // Xử lý ảnh khi update lên database
    $pname = $_FILES["bookImage"]["name"];
    $tname = $_FILES["bookImage"]["tmp_name"];
    $uploads_dir = 'images';
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);

    if(empty($bookImage)) {
        $bookImage = "../.././images/notfound.png";
    }

    $conn = mysqli_connect('localhost','root','','database_book'); 
    $sql = "UPDATE tb_books SET book_name = '$book_name', book_status = $book_status ,book_author = '$book_author', book_desc = '$book_desc', book_image = '$pname' WHERE book_id = $book_id";
    $result = mysqli_query($conn,$sql);
    if(empty($book_name) || empty($book_author) || empty($book_status) || empty($book_desc) || empty($book_image) || empty($book_price)) {
        echo '<script>alert("Bạn phải điền tất cả thông tin vào")</script>';
    }

    if($result > 0){
        header("Location: .././route/manager/index.php");
    }else{
        header("Location: .././error.php");
    }
?>