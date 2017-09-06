<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-4">
            <h1>Xóa sản phẩm</h1>

            <form class="form-group" method="post">
                {{csrf_field()}}
                <div>
                    <input type="text" name="name" class="form-control" value="{{$category->name}}" disabled>
                </div>
                <br>
                <p class="alert alert-danger">Bạn có thực sự muốn xóa loại hàng này ?</p>
                <div>
                    <button type="submit" class="btn btn-danger">Xóa</button>
                    <a href="{{route('categories')}}" class="btn btn-success">Hủy bỏ</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>