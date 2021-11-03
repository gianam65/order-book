<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Update books section</title>
    <link rel="stylesheet" href="../.././css/style.css">
    <link rel="stylesheet" href="../.././css/admin-dashboard.css">
  </head>
  <body>
    <div class="wrapper">
        <div class="container add-book-div">
            <h3 class="global-title">Admin update books section</h3>
            <span class="global-error">Lưu ý: Phải điền tất cả thông tin sách vào chỗ trống</span>
            <form action="../.././src/process-update-user.php" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tên người dùng</label>
                    <input type="text" class="form-control" name='username'>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email người dùng</label>
                    <input type="text" class="form-control" name='useremail'>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" name='userphone'>
                </div>
                <input type="hidden" name="user_id" value=<?php echo $_GET["update"]?>>
                <button class='btn btn-success' name='updateUser'>Click to save update</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>