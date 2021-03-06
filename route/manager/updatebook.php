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
            <form action="../.././src/process-update.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tên sách</label>
                    <input type="text" class="form-control" name='bookName'>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Giá sách <span class='global-error'>(Lưu ý: Giá sách chỉ được điền số, không bao gồm chữ)</span></label>
                    <input type="text" class="form-control" name='bookPrice'>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tác giả</label>
                    <input type="text" class="form-control" name='bookAuthor'>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Mô tả</label>
                    <input type="text" class="form-control" name='bookDesc'>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Hình ảnh sách</label><br>
                    <input type="File" name="bookImage">
                </div>
                <div class="mb-3">
                    <label class="form-label">Trạng thái</label>
                    <select class="form-select" name='bookStatus' aria-label="Default select example">
                        <option value="0">Chưa cung cấp</option>
                        <option value="1">Đã cung cấp</option>
                    </select>
                </div>
                <input type="hidden" name="book_id" value=<?php echo $_GET["update"]?>>
                <button class='btn btn-success btn-add-car' name='updateBook'>Click to save update</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>