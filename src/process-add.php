<?php
    if(isset($_POST['addBook'])) {
        $bookName = $_POST['bookName'];
        $bookPrice = $_POST['bookPrice'];
        $bookAuthor = $_POST['bookAuthor'];
        $bookDesc = $_POST['bookDesc'];
        // $bookImage = $_POST['bookImage'];
        $bookStatus = $_POST['bookStatus'];

        $pname = $_FILES["bookImage"]["name"];
        $tname = $_FILES["bookImage"]["tmp_name"];
        $uploads_dir = 'images';
        move_uploaded_file($tname, $uploads_dir.'/'.$pname);

        if(empty($bookImage)) {
            $bookImage = "../.././images/notfound.png";
        }
        $conn = mysqli_connect('localhost','root','','database_book');
        if(!$conn) {
            die("Không thể kết nối");
        }
        $sql = "INSERT INTO tb_books(book_name, book_price, book_author, book_desc, book_image, book_status) VALUES ('$bookName','$bookPrice','$bookAuthor','$bookDesc','$pname','$bookStatus')";
        if(empty($bookName) || empty($bookPrice) || empty($bookAuthor) || empty($bookDesc)) {
            $sql = "INSERT INTO tb_bookss(book_name, book_price, book_author, book_desc, book_image, book_status) VALUES ('$bookName','$bookPrice','$bookAuthor','$bookDesc','$bookImage','$bookStatus')";
        }
        $result = mysqli_query($conn,$sql);
        if($result > 0){
            // header("Location: .././route/admin/index.php");
        }else{
            header("Location: .././error.php");
        }
    }
?>