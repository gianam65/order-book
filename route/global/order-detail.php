<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Chi tiết đơn hàng</title>
    <link rel="stylesheet" href="../.././css/order-detail.css">
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

                <form class="form-inline my-2 my-lg-0 search-section" action=".././global/search-result.php" method="POST">
                    <input class="form-control mr-sm-2" name="search-value" id="search-value" type="search" placeholder="Nhập tên sách" aria-label="search">
                    <button class="btn my-2 my-sm-0 search-btn" id="search-feature" type="submit">
                        TÌM KIẾM
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <h3 class="global-title">Chi tiết đơn hàng</h3>
        <div class="book-container">
            <table class="table table-light list-book">
                
                <tbody>
                    <?php
                        session_start();
                        if(isset($_SESSION["user_id"])) {
                            $userID = $_SESSION["user_id"];
                            $conn = mysqli_connect('localhost','root','','database_book');
                            if(!$conn) {
                                die("Không thể kết nối");
                            }
                            $sql = "SELECT order_id, order_user_name, order_user_location, order_user_phone, order_total, order_status FROM tb_order WHERE user_id = $userID";
                            $result = mysqli_query($conn,$sql);
                            
                            if(mysqli_num_rows($result) > 0){
                                echo '
                                <thead>
                                    <tr>
                                        <th scope="col">Mã đơn hàng</th>
                                        <th scope="col">Tên người nhận</th>
                                        <th scope="col">Tổng thanh toán</th>
                                        <th scope="col">Địa chỉ nhận hàng</th>
                                        <th scope="col">Số điện thoại </th>
                                        <th scope="col">Trạng thái đơn</th>
                                        <th scope="col">Hành động</th>
                                    </tr>
                                </thead>
                                ';
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                        echo "<th>MĐH0".$row["order_id"]."</th>";
                                        echo "<th>".$row["order_user_name"]."</th>";
                                        echo "<th>".$row["order_total"]."</th>";
                                        echo "<th>".$row["order_user_location"]."</th>";
                                        echo "<th>".$row["order_user_phone"]."</th>";
                                        if($row["order_status"] == 0) {
                                            echo "<th><span class='btn'>Chờ xác nhận</span></th>";
                                            echo "<th><a href=../.././src/process-delete-order.php?id=".$row["order_id"]." class='btn btn-danger'>Hủy đơn hàng</a></th>";
                                        } else {
                                            echo "<th><span class='success'>Chấp nhận đơn hàng</span></th>";
                                            echo "<th><span class='global-color'>Đơn hàng không thể hủy</span></th>";
                                        }
                                    echo "</tr>";
                                }
                            } else {
                                echo '
                                    <div class="order-empty">
                                        <h3 class="text-center global-color">Bạn chưa có đơn hàng nào</h3>
                                        <img src="../.././src/images/empty-cart.png" />
                                    </div>
                                ';
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