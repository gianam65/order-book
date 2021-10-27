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
    <div class="container">
        <h3 class="global-title">Admin book manager</h3>
        <a href="src/addcar.php" class="btn btn-success add-car-btn">Add book</a>
        <table class="table table-info list-book">
            <thead>
                <tr>
                    <th scope="col">Mã phương tiện</th>
                    <th scope="col">Biển số xe</th>
                    <th scope="col">Model</th>
                    <th scope="col">Năm sản xuất</th>
                    <th scope="col">Kiểu oto</th>
                    <th scope="col">Giá cho thuê theo ngày</th>
                    <th scope="col">Giá cho thuê theo tuần</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Hành động</th>
                    <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $conn = mysqli_connect('localhost','root','','cars');
                    if(!$conn) {
                        die("Không thể kết nối");
                    }
                    $sql = "SELECT vehicle_id,liscense_no, model, year, ctype, drate, wrate, status FROM tb_cars";
                    $result = mysqli_query($conn,$sql);
                    
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)) {
                            if($row["status"] == 0) {
                                $row["status"] = "Còn trống";
                            } else {
                                $row["status"] = "Đã đầy";
                            }
                            echo "<tr>";
                            echo "<th>".$row["vehicle_id"]."</th>";
                            echo "<th>".$row["liscense_no"]."</th>";
                            echo "<th>".$row["model"]."</th>";
                            echo "<th>".$row["year"]."</th>";
                            echo "<th>".$row["ctype"]."</th>";
                            echo "<th>".$row["drate"]."</th>";
                            echo "<th>".$row["wrate"]."</th>";
                            echo "<th>".$row["status"]."</th>";
                            echo "<th><a href=src/process-delete.php?id=".$row["vehicle_id"]." class='btn btn-warning'>Delete</a></th>";
                            echo "<th><a href=src/update.php?idUpdate=".$row["vehicle_id"]." class='btn btn-secondary'>Update</a></th>";
                            echo "</tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>