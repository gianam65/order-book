<?php
    session_start();

    if(!isset($_SESSION["loginOK"])) {
        echo '<script>alert("Bạn phải đăng nhập để đặt hàng")</script>';
        echo '<script>window.location = "./login.php"</script>';
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Đặt Hàng</title>
    <link rel="stylesheet" href="../.././css/order.css">                                 
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

                    <form class="form-inline my-2 my-lg-0 search-section" action="./search-result.php" method="POST">
                        <input class="form-control mr-sm-2" name="search-value" id="search-value" type="search" placeholder="Nhập tên sách" aria-label="search">
                        <button class="btn my-2 my-sm-0 search-btn" id="search-feature" type="submit">
                            TÌM KIẾM
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container order">
            <div class="order-section">
                <h3 class="text-center global-color">Điền thông tin nhận hàng</h3>

                <form action="../.././src/process-order.php" method="POST" class="order-wrapper">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tên khách hàng</label>
                        <input type="text" class="form-control" name='orderName'>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" name='orderLocation'>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" name='orderPhone'>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Ghi chú:</label><br>
                        <textarea name="orderNote" cols="20" rows="7"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tổng tiền phải thanh toán:  </label>
                        <span class="global-color total-price"><?php
                            echo number_format($_GET['total']);
                        ?> VNĐ</span>
                        <input type="hidden" name="orderTotal" value=<?php echo $_GET['total']; ?>>
                        <input type="hidden" name="userID" value=<?php echo $_SESSION['user_id']; ?>>
                    </div>
                    <button class='btn btn-success btn-add-car' name='addOrder'>Click to order</button>
                </form>
            </div>

            <div class="order-detail">
                <h3 class="text-center global-color">Sách muốn mua</h3>
                <?php
                    foreach($_SESSION["add-cart-item"] as $keys => $values) {
                        echo '
                        <div class="order-item">
                            <div class="order-box">
                                <img src=../.././src/images/'.$values["book_image"].' alt="" class="cart-img">
                                <div class="order-infor">
                                    <h3 class="order-item-name global-color">'.$values["book_name"].'</h3>
                                    <p class="order-author">Tác giả: '.$values["book_author"].'</p>
                                    <span class="order-price">Giá: '.$values["book_price"].'</span>
                                </div> 
                            </div>
                            <div class="order-count">
                                <span>Số lượng: '.$values["book_quantity"].'</span>
                            </div>                   
                        </div>';
                    }
                ?>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    </body>
</html>