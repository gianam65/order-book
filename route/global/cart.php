<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet" href="../.././css/cart.css">                                 
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
                        <li class="nav-item">
                            <a class="nav-link home-link" href="./not-active.php">Chưa phát hành</a>
                        </li>
                    </ul>

                    <form class="form-inline my-2 my-lg-0 search-section" action="./search-result.php" method="POST">
                        <input class="form-control mr-sm-2" name="search-value" id="search-value" type="search" placeholder="Nhập tên sách" aria-label="search">
                        <button class="btn my-2 my-sm-0 search-btn" id="search-feature" type="submit">
                            TÌM KIẾM
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container">
            <h2 class="text-center">Giỏ Hàng</h2>
            <div class="cart-list">
                <?php
                    if(isset($_POST["add-to-cart"])) {
                        if(isset($_SESSION["add-cart"])) {
                            $book_array_id = array_column($_SESSION["add-cart"], "book_id");
                            if(!in_array($_GET["id"], $book_array_id)) {
                                $count = count($_SESSION["add-cart"]);
                                $book_array = array(
                                    'book_id' => $_GET["id"],
                                    'book_price' => $_POST["book_price"],
                                    'book_name' => $_POST["book_name"],
                                    'book_author' => $_POST["book_author"],
                                    'book_image' => $_POST["book_image"],
                                );
                                $_SESSION["add-cart"][$count] = $book_array;
                            } else {
                                echo '<script>alert("Sách đã có trong giỏ hàng")</script>';
                            }
                        } else {
                            $book_array = array(
                                'book_id' => $_GET["id"],
                                'book_price' => $_POST["book_price"],
                                'book_author' => $_POST["book_author"],
                                'book_name' => $_POST["book_name"],
                                'book_image' => $_POST["book_image"],
                            );
                            $_SESSION["add-cart"][0] = $book_array;
                        }
                    }
                ?>

                <?php
                    if(!empty($_SESSION["add-cart"])) {
                        $total = 0;
                        foreach($_SESSION["add-cart"] as $keys => $values) {
                            echo '
                            <div class="cart-item">
                                <div class="cart-box">
                                    <img src=../.././src/images/'.$values["book_image"].' alt="" class="cart-img">
                                    <div class="cart-infor">
                                        <h3 class="cart-item-name global-color">'.$values["book_name"].'</h3>
                                        <p class="cart-author">Tác giả: '.$values["book_author"].'</p>
                                        <span class="cart-price">Giá: '.$values["book_price"].'</span>
                                    </div> 
                                </div>
                                <div class="cart-action">
                                    <form action="delete-cart" method="POST">
                                        <a href="cart.php?action=delete&id='.$values["book_id"].'" class="btn btn-danger" type="submit">Xóa</a>
                                    </form>
                                </div>                   
                            </div>';
                            $total = $total + $values["book_price"];
                        }
                        $totalFormat = number_format($total);
                        echo '<div class="total-price">Total: '.$totalFormat.' VNĐ</div>';
                        echo '
                            <div class="return-div">
                                <a href="../.././index.php" class="return-home btn">Quay về trang chủ</a>
                                <a href="#" class="buy btn btn-danger">Đặt hàng</a>
                            </div>
                        ';
                        
                    } else {
                        echo '<div class="cart-empty">
                            <h3 class="text-center global-color">Giỏ hàng của bạn trống rỗng</h3>
                            <img src="../.././src/images/empty-cart.png" />
                        </div>';
                    }

                    if(isset($_GET["action"])) {
                        if($_GET["action"] == "delete") {
                            foreach($_SESSION["add-cart"] as $keys => $values) {
                                if($values["book_id"] == $_GET["id"]) {
                                    unset($_SESSION["add-cart"][$keys]);
                                    echo "<script>window.location = 'cart.php'</script>";
                                }
                            }
                        }
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