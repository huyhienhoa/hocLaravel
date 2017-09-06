<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sach san pham</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <h3>Danh sach san pham</h3>
        </div>
        <table class="table table-bordered table-striped table-responsive">
            <tr>
                <th>STT</th>
                <th>categoryID</th>
                <th>productName</th>
                <th>productCode</th>
                <th>Price</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php foreach ($array as $key => $item):?>
            <tr>
                <td><?=$key; ?></td>
                <td><?=$item[0]; ?></td>
                <td><?=$item[1];?></td>
                <td><?=$item[2];?></td>
                <td><?=$item[3];?></td>
                <td><a href="?action=edit&id=4" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i></a></td>
                <td><a href="?action=delete&id=4" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a></td>
            </tr>
            <?php endforeach;?>

        </table>
    </div>
</body>
</html>