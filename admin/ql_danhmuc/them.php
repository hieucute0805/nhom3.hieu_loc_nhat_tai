<?php 
    $sql_danhmucsp = "SELECT * FROM ql_danhmucsp";
    $query_danhmucsp = mysqli_query($connect, $sql_danhmucsp);

    if (isset($_POST['sbm'])) {
        $TenDM = $_POST['TenDM'];

        $sql = "INSERT INTO ql_danhmucsp (TenDM) 
        VALUES ('$TenDM')";
        $query = mysqli_query($connect, $sql);
        header('location: index.php?page_layout=danhsach');
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm danh mục sản phẩm</h2>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data"><br>
                <div class="form-group">
                    <label for="">Nhập tên danh mục mới</label>
                    <input type="text" name="TenDM" class="form-control" required>
                </div><br>

                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
            </form>
        </div>
    </div>
</div>