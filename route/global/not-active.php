<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Trang Chủ</title>
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
                            <a class="nav-link home-link" href="./register.php"><span class="sr-only">Đăng kí</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link home-link" href="./login.php">Đăng nhập</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <h2 class="text-center">Chưa phát hành</h2>
            <div class="list-book-show">
                <?php
                    $conn = mysqli_connect('localhost','root','','database_book');
                    if(!$conn) {
                        die("Không thể kết nối");
                    }
                    $sql = "SELECT book_id, book_image, book_name, book_author ,book_price, book_desc FROM tb_books WHERE book_status = 0";
                    $result = mysqli_query($conn,$sql);
                    
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="book-item">
                                <img src=../.././src/images/'.$row["book_image"].' alt="">
                                <h3 class="book-name global-color">Tên sách: '.$row["book_name"].'</h3>
                                <p class="book-price">Giá sách: '.$row["book_price"].'</p>
                                <p class="book-price">Tác giả: '.$row["book_author"].'</p>
                                <span class="book-desc">Mô tả: '.$row["book_desc"].'</span>
                                <div class="box-wrapper"><a href="./detail.php?id='.$row["book_id"].'" class="book-more">Xem chi tiết sản phẩm</a></div>
                            </div>';
                        }
                    } else {
                        echo '<div class="container no-data-show">
                            <p class="no-data-text">
                                Xin trân trọng cảm ơn Quý khách hàng đã tin tưởng sử dụng sản phẩm từ chúng tôi. Thời gian qua chúng tôi đã nhận được rất nhiều đơn đặt sách từ quý khách, tuy nhiên số lượng hàng về không kịp so với thời gian so với thời gian.
                                Vì vậy, hiện nay các loại sách chưa được phát hành đã hết.
                                Chúng tôi thành thật xin lỗi vì những bất tiện nêu trên và trong thời gian tới chúng tôi sẽ cố gắng để đáp ứng tốt hơn những yêu cầu của Quý khách.
                            </p>
                            <img src="./src/images/no-book-show.png" />
                        </div>';
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
    </body>
</html>