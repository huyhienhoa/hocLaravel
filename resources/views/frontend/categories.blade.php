<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    @include('alert.success')
    <div class="container">
        <div>
            <h1 class="text-center text-danger">Danh sách đồng hồ</h1>
            <table class="table table-bordered table-striped table-responsive text-center">
                <tr class="text-center">
                    <th class="text-center">STT</th>
                    <th class="text-center">Loại đồng hồ</th>
                    <th class="text-center">Sửa</th>
                    <th class="text-center">Xóa</th>
                </tr>
                @foreach($categories as $key => $category)
                    <tr>
                        <td><?=$key+1; ?></td>
                        <td><?=$category['name']; ?></td>
                        <td><a href="{{route("edit",['id'=>$category->id])}}" class=" btn btn-success"><i class="glyphicon glyphicon-edit"></i></a></td>
                        <td><a href="{{route('delete',['id'=>$category->id])}}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a></td>
                    </tr>
                @endforeach
            </table>
        </div>

        <div>
            <a href="{{route('addCategory')}}" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Add Category</a>
        </div>
    </div>

</body>
</html>