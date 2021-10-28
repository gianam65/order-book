<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Add books section</title>
    <link rel="stylesheet" href="../.././css/style.css">
  </head>
  <body>
    <div class="container add-car-div">
        <h3 class="global-title">Admin add books section</h3>
        <form action="../.././src/process-add.php" method="POST">
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
                <label for="exampleFormControlInput1" class="form-label">Hình ảnh sách
                    <span class='global-error'>(Lưu ý: Chỉ cần paste địa chỉ hình ảnh (Ví Dụ: https://www.vinabook.com/images/thumbnails/product/...))</span>
                </label>
                <input type="text" class="form-control" name='bookImage'>
            </div>
            <div class="mb-3">
                <select class="form-select" name='bookStatus' aria-label="Default select example">
                    <option selected>Trạng thái</option>
                    <option value="0">Chưa cung cấp</option>
                    <option value="1">Đã cung cấp</option>
                </select>
            </div>
            <button class='btn btn-success btn-add-car' name='addBook'>Click to add</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>