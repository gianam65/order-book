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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse home-menu" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#">TRANG CHỦ</a>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><span class="sr-only">ĐĂNG KÍ</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">ĐĂNG NHẬP</a>
                        </li>
                    </ul>

                    <form class="form-inline my-2 my-lg-0 search-section">
                        <input class="form-control mr-sm-2" type="search" placeholder="Nhập tên sách" aria-label="search">
                        <button class="btn btn-outline-success my-2 my-sm-0 search-btn" type="submit">
                            TÌM KIẾM
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/mosach.jpg" alt="First slide">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/tamlyhoc.png" alt="Second slide">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/notfound.png" alt="Third slide">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true">
                    </span>
                    <span class="sr-only">
                        Ảnh trước
                    </span>
                </a>
                
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true">

                    </span>
                    <span class="sr-only">
                        Ảnh sau
                    </span>
                </a>
            </div>   
        </div>

        <div class="container">   
            <h2 class="text-center">Đã cung cấp</h2>
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
                                <img src='.$row["book_image"].' class="img-responsive img-curve"/>
                            </div>';
                        }
                    }
                ?>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>