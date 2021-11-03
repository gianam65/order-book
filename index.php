<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="./css/style.css">                                 
</head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light home-nav">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse home-menu" id="navbarTogglerDemo01">
                    <a class="navbar-brand home-link" href="#">TRANG CHỦ</a>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <?php
                            session_start();
                            if(!isset($_SESSION["loginOK"])) {
                                echo '
                                    <li class="nav-item active">
                                        <a class="nav-link home-link" href="./route/global/register.php"><span class="sr-only">Đăng kí</span></a>
                                    </li>
            
                                    <li class="nav-item">
                                        <a class="nav-link home-link" href="./route/global/login.php">Đăng nhập</a>
                                    </li>
                                ';
                            } else {
                                echo '
                                    <li class="nav-item">
                                        <a class="nav-link home-link" href="./src/process-logout.php">Đăng xuất</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link home-link" href="./route/global/order-detail.php">Chi tiết đơn hàng</a>
                                    </li>
                                ';
                            }
                        ?>
                        <li class="nav-item">
                            <a class="nav-link home-link" href="./route/global/not-active.php">Chưa phát hành</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link home-link" href="./route/global/cart.php">Xem giỏ hàng</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0 search-section" action="./route/global/search-result.php" method="POST">
                        <input class="form-control mr-sm-2" name="search-value" id="search-value" type="search" placeholder="Nhập tên sách" aria-label="search">
                        <button class="btn my-2 my-sm-0 search-btn" id="search-feature" type="submit">
                            TÌM KIẾM
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner slide-box">
                    <div class="carousel-item active">
                        <img class="d-block w-100 slide-img" src="./src/images/slide1.jpg" alt="First slide">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 slide-img" src="./src/images/slide2.jpg" alt="Second slide">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 slide-img" src="./src/images/slide3.jpg" alt="Thirst slide">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 slide-img" src="./src/images/slide4.jpg" alt="Four slide">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100 slide-img" src="./src/images/slide5.jpg" alt="Five slide">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>
        </div>

        <div class="container book-activated">
            <h2 class="text-center">Đã phát hành</h2>
            <div class="list-book-show">
                <?php
                    $conn = mysqli_connect('localhost','root','','database_book');
                    if(!$conn) {
                        die("Không thể kết nối");
                    }
                    $sql = "SELECT book_id, book_image, book_name, book_author ,book_price, book_desc FROM tb_books WHERE book_status = 1";
                    $result = mysqli_query($conn,$sql);
                    
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="book-item">
                                <img src=./src/images/'.$row["book_image"].' alt="">
                                <h3 class="book-name global-color">Tên sách: '.$row["book_name"].'</h3>
                                <p class="book-price">Giá sách: '.$row["book_price"].'</p>
                                <p class="book-price">Tác giả: '.$row["book_author"].'</p>
                                <span class="book-desc">Mô tả: '.$row["book_desc"].'</span>
                                <div class="box-wrapper"><a href="./route/global/detail.php?id='.$row["book_id"].'" class="book-more">Xem chi tiết sản phẩm</a></div>
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

        <div class="container">
            <h3 class="global-color text-center">Câu chuyện từ những cuốn sách</h3>
            <div class="book-story">
                <img src="https://images.pexels.com/photos/8239819/pexels-photo-8239819.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                <p class="book-article">
                    Tỷ phú Warren Buffett cũng là người rất mê đọc sách, ông chia sẻ "tôi chỉ ngồi văn phòng và đọc suốt ngày" – ông chỉ vào những trang sách và hàng đống giấy tờ: "đọc 500 trang như thế mỗi ngày là cách để tích lũy kiến thức, bồi dưỡng sự thông minh".
                    <br>
                    Thế nhưng chúng ta cũng không mang định kiến rằng đọc sách chỉ là đọc những trang sách, trang tài liệu, bởi thời đại công nghệ hiện nay, sách, hay tài liệu nó rất đa dạng, nó cũng có thể là những trang sách, trang báo giấy, sách điện tử, thậm chí là những trang "sách hình" thông qua những bộ phim về khoa học kỹ thuật, nghiên cứu, hay thậm chí những người bên cạnh ta cũng có thể là những "cuốn sách di động". Đọc sách nào không quan trọng, quan trọng là cách chúng ta đọc sách để tích lũy kiến thức.
                </p>    
            </div>

            <h3 class="global-color text-center">Bài học từ người xuất chúng</h3>
            <div class="book-story">
                <p class="book-article">
                    Tỷ phú Jack Ma cho rằng "con người chính là một cuốn sách rất đáng để đọc, tôi thấy rằng công ty của chúng tôi có 24 ngàn nhân viên, họ chính là 24 ngàn cuốn sách với những nội dung hoàn toàn khác nhau. Trải nghiệm sống và cách giải quyết vấn đề của mỗi người trong số họ đều nằm ngoài sự suy đoán của tôi".
                    <br>
                    Cũng như cậu bé dùng giỏ than xách nước, việc đọc sách không thể thấy ngay kết quả, thậm chí bạn còn không nhận ra những thay đổi, những kết quả đạt được, tuy nhiên nó sẽ dần thấm sau vào trí thức của bạn, như những giọt nước đã ăn sâu, cuốn trôi hết bụi bẩn trên chiếc giỏ kia một cách từ từ chậm rãi mà chính bạn không thể nhận ra.
                </p>
                <img src="https://images.pexels.com/photos/3563625/pexels-photo-3563625.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
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
        <script src="./js/ajax.js"></script>            
    </body>
</html>