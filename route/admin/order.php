<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Quản lý đơn hàng</title>
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
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link home-link" href="../.././src/process-logout-admin.php">ĐĂNG XUẤT</a>
                    </li>
                </ul>

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link home-link" href="./index.php">Quản lý người dùng</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link home-link" href="./order.php">Quản lý đơn hàng</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container">
        <h3 class="global-title">Quản lý đơn hàng</h3>
        <div class="book-container">
            <table class="table table-info list-book">
                
                <tbody>
                    <?php
                        $conn = mysqli_connect('localhost','root','','database_book');
                        if(!$conn) {
                            die("Không thể kết nối");
                        }
                        $sql = "SELECT order_id, order_user_name, order_user_location, order_user_phone, order_total, order_status FROM tb_order";
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
                                    <th scope="col">Hành động 1</th>
                                    <th scope="col">Hành động 2</th>
                                </tr>
                            </thead>
                            ';
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                    echo "<th>MĐH0".$row["order_id"]."</th>";
                                    echo "<th>".$row["order_user_name"]."</th>";
                                    echo "<th>".number_format($row["order_total"])." VNĐ</th>";
                                    echo "<th>".$row["order_user_location"]."</th>";
                                    echo "<th>".$row["order_user_phone"]."</th>";
                                    if($row["order_status"] == 0) {
                                        echo "<th><a href=../.././src/process-update-order.php?updateId=".$row["order_id"]." class='btn btn-success'>Chấp nhận đơn hàng</a></th>";
                                    } else {
                                        echo "<th><span class='btn'>Đơn hàng được chấp nhận</span></th>";
                                    }
                                    if($row["order_status"] == 1) {
                                        echo "<th><a href=../.././src/process-admin-delete-order.php?deleteId=".$row["order_id"]." class='btn btn-danger'>Từ chối đơn hàng</a></th>";
                                    } else {
                                        echo "<th><span class='btn'>Đơn hàng bị từ chối</span></th>";
                                    }
                                echo "</tr>";
                            }
                        } else {
                            echo '
                                <div class="order-empty">
                                    <h3 class="text-center global-color">Hiện tại trang web chưa có đơn hàng nào</h3>
                                    <img src="../.././src/images/empty-cart.png" class="admin-order" />
                                </div>
                            ';
                        }

                        
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>