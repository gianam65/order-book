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
                        <li class="nav-item active">
                            <a class="nav-link home-link" href="#"><span class="sr-only">ĐĂNG KÍ</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link home-link" href="#">ĐĂNG NHẬP</a>
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

        <div class="container">
            <h2 class="text-center">Đã phát hành</h2>
            <div class="row align-items-start">
                <?php
                    $conn = mysqli_connect('localhost','root','','database_book');
                    if(!$conn) {
                        die("Không thể kết nối");
                    }
                    $sql = "SELECT book_name,book_price, book_author, book_status, book_image FROM tb_books WHERE book_status = 1";
                    $result = mysqli_query($conn,$sql);
                    
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="col-3 book-name">'.$row["book_name"].'</div>';
                        }
                    }
                ?>
            </div>

            <div class="row align-items-center">
                <?php
                    $conn = mysqli_connect('localhost','root','','database_book');
                    if(!$conn) {
                        die("Không thể kết nối");
                    }
                    $sql = "SELECT book_image FROM tb_books WHERE book_status = 1";
                    $result = mysqli_query($conn,$sql);
                    
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="col-3 book-box">
                                <img src=./src/images/'.$row["book_image"].' class="img-responsive img-curve"/>
                            </div>';
                        }
                    } else {
                        echo '<div class="container no-data-show">
                            <img src="./src/images/no-book-show.png" />
                            <p class="no-data-text">
                                Xin trân trọng cảm ơn Quý khách hàng đã tin tưởng sử dụng sản phẩm từ chúng tôi. Thời gian qua chúng tôi đã nhận được rất nhiều đơn đặt sách từ quý khách, tuy nhiên số lượng hàng về không kịp so với thời gian so với thời gian.
                                Vì vậy, hiện nay các loại sách chưa được phát hành đã hết.
                                Chúng tôi thành thật xin lỗi vì những bất tiện nêu trên và trong thời gian tới chúng tôi sẽ cố gắng để đáp ứng tốt hơn những yêu cầu của Quý khách.
                            </p>
                        </div>';
                    }
                ?>
            </div>
        </div>

        <div class="container">
            <h2 class="text-center">Chưa phát hành</h2>
            <div class="row align-items-start">
                <?php
                    $conn = mysqli_connect('localhost','root','','database_book');
                    if(!$conn) {
                        die("Không thể kết nối");
                    }
                    $sql = "SELECT book_name,book_price, book_author, book_status, book_image FROM tb_books WHERE book_status = 0";
                    $result = mysqli_query($conn,$sql);
                    
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="col-3 book-name">'.$row["book_name"].'</div>';
                        }
                    } 
                ?>
            </div>

            <div class="row align-items-center">
                <?php
                    $conn = mysqli_connect('localhost','root','','database_book');
                    if(!$conn) {
                        die("Không thể kết nối");
                    }
                    $sql = "SELECT book_image FROM tb_books WHERE book_status = 0";
                    $result = mysqli_query($conn,$sql);
                    
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="col-3 book-box">
                                <img src=./src/images/'.$row["book_image"].' class="img-responsive img-curve"/>
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

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="./js/ajax.js"></script>            
    </body>
</html>