<?php
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Xem chi tiết sản phẩm</title>
    <link rel="stylesheet" href="../.././css/style.css">                                 
</head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light home-nav">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse home-menu" id="navbarTogglerDemo01">
                    <a class="navbar-brand home-link" href="../.././index.php">TRANG CHỦ</a>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link home-link" href="#"><span class="sr-only">Đăng kí</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link home-link" href="#">Đăng nhập</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link home-link" href="./route/global/not-active.php">Chưa phát hành</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link home-link" href="./cart.php">Xem giỏ hàng</a>
                        </li>
                    </ul>

                    <form class="form-inline my-2 my-lg-0 search-section" action="../.././route/global/search-result.php" method="POST">
                        <input class="form-control mr-sm-2" name="search-value" id="search-value" type="search" placeholder="Nhập tên sách" aria-label="search">
                        <button class="btn my-2 my-sm-0 search-btn" id="search-feature" type="submit">
                            TÌM KIẾM
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container">
            <h3 class="text-center">Xem chi tiết sách</h3>
            <div class="book-detail">
                <?php
                    $idBook = $_GET['id'];
                    $conn = mysqli_connect('localhost','root','','database_book');
                    if(!$conn) {
                        die("Không thể kết nối");
                    }
                    $sql = "SELECT book_id, book_image, book_name, book_status, book_type ,book_author ,book_price, book_desc FROM tb_books WHERE book_id = $idBook";
                    $result = mysqli_query($conn,$sql);
                    
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)) {
                            if($row["book_status"] == 0) {
                                $row["book_status"] = "Chưa phát hành";
                            } else {
                                $row["book_status"] = "Đã phát hành";
                            }
                            echo '<img src=../.././src/images/'.$row["book_image"].' alt="">
                            <div class="detail-infor">
                                <form action="./cart.php?id='.$row["book_id"].'" method="POST">
                                    <h3 class="detail-name global-color">'.$row["book_name"].'</h3>
                                    <p class="detail-price">Giá sách: '.$row["book_price"].'</p>
                                    <p class="detail-author">Tác giả: '.$row["book_author"].'</p>
                                    <span class="detail-desc">Mô tả: '.$row["book_desc"].'</span>
                                    <p class="detail-type">Thể loại: '.$row["book_type"].'</p>
                                    <span class="detail-status">Trạng thái: '.$row["book_status"].'</span><br>
                                    <input type="hidden" name="book_name" value="'.$row["book_name"].'">
                                    <input type="hidden" name="book_price" value="'.$row["book_price"].'">
                                    <input type="hidden" name="book_image" value="'.$row["book_image"].'">
                                    <input type="hidden" name="book_author" value="'.$row["book_author"].'">
                                    <button name="add-to-cart" class="btn add-to-cart">Thêm vào giỏ hàng</button>
                                </form>
                            </div>';
                        }
                    }
                ?>
            </div>
        </div>

        <div class="footer">
            <div class="container footer-infor">
                <span>Privacy Policy - Term and conditions</span>
                <span>@gianam65 - @nhatminh25 - @nghia241</span>         
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="../.././js/ajax.js"></script>            
    </body>
</html>