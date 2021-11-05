<?php
    session_start();
    if(!isset($_SESSION['loginManager'])){
        header("Location:../.././index.php");
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Dashboard book manager</title>
    <link rel="stylesheet" href="../.././css/admin-dashboard.css">
    <link rel="stylesheet" href="../.././css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light home-nav">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse home-menu" id="navbarTogglerDemo01">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link home-link" href="../.././src/process-logout-manager.php">ĐĂNG XUẤT</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container">
        <h3 class="global-title">Admin book manager</h3>
        <a href="addbook.php" class="btn btn-success add-book-btn">Add book</a>
        <div class="book-container">
            <table class="table table-info list-book">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên sách</th>
                        <th scope="col">Giá sách</th>
                        <th scope="col">Tên tác giả</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Hành động</th>
                        <th scope="col">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $conn = mysqli_connect('localhost','root','','database_book');
                        if(!$conn) {
                            die("Không thể kết nối");
                        }
                        $sql = "SELECT book_id,book_name,book_price, book_author, book_status, book_image FROM tb_books";
                        $result = mysqli_query($conn,$sql);
                        
                        if(mysqli_num_rows($result) > 0){
                            $index = 0;
                            while($row = mysqli_fetch_assoc($result)) {
                                $index++;
                                if($row["book_status"] == 0) {
                                    $row["book_status"] = "Chưa cung cấp ";
                                } else {
                                    $row["book_status"] = "Đã cung cấp";
                                }
                                
                                echo "<tr>";
                                    echo "<th>".$index."</th>";
                                    echo "<th>".$row["book_name"]."</th>";
                                    echo "<th>".$row["book_price"]."</th>";
                                    echo "<th>".$row["book_author"]."</th>";
                                    echo "<th>".$row["book_status"]."</th>";
                                    echo "<th>
                                        <img class=dashboard-book-img src=../.././src/images/$row[book_image] />
                                    </th>";
                                    echo "<th><a href=../.././src/process-delete.php?id=".$row["book_id"]." class='btn btn-danger'>Delete</a></th>";
                                    echo "<th><a href=updatebook.php?update=".$row["book_id"]." class='btn btn-warning' >Update</a></th>";
                                echo "</tr>";
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>