<?php
    $idGet = $_GET['id'];

    $conn = mysqli_connect('localhost','root','','database_book'); 
    if(!$conn)
    {
        die("Không thể kết nối");
    }
    $sql = "SELECT * FROM tb_book WHERE book_id = $book_id";
    $res = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);
    if($count > 0)
    {
        while($row = mysqli_fetch_assoc($res))
        {
            $book_name      =   $row['book_name'];
            $book_price     =   $row['book_price'];
            $book_author    =   $row['book_author'];
            $book_desc      =   $row['book_desc'];
            $book_image     =   $row['book_image'];
            $book_status    =   $row['book_status'];
        }
    }
    else
    {
        echo;
    } 

    $result = mysqli_query($conn,$sql);
        if($result > 0)
        {
            header("Location: .././route/admin/index.php");
        }else
        {
            header("Location: .././error.php");
        }
?>

<?php
    if(isset($_POST['submit']))
    {
        $book_name      =   $row['book_name'];
        $book_price     =   $row['book_price'];
        $book_author    =   $row['book_author'];
        $book_desc      =   $row['book_desc'];
        $book_image     =   $row['book_image'];
        $book_status    =   $row['book_status'];

        if($count > 0)
        {
            $sql3="UPDATE tb_book SET 
            book_id     = '$id',
            book_name   ='$book_name',
            book_price  ='$book_price',
            book_author ='$book_author',
            book_desc   ='$book_desc',
            book_iamge  ='$book_image',
            book_status ='$book_status',
            WHERE book_id = $book_id";
            $check = mysqli_query($conn,$sql3);
            if($check == TRUE)
            {
                header("location:".SITE_URL."details.php");
            }
            else
            {
                echo "<h1>Thông tin điền vào sai </h1>";
                echo " <a href=".SITE_URL.">Quay lại trang chủ</a>";
            }
        }
        else
        {
            echo "<h1>Không tìm thấy xe</h1>";
            echo "<a href=".SITE_URL.">Quay lại trang chủ</a>";
        }
    }
?>