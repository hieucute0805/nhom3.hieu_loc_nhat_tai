<?php 
    $id = $_GET['id'];

    $sql_ql_danhmucsp = "SELECT * FROM ql_danhmucsp";
    $query_baiviet = mysqli_query($connect, $sql_ql_danhmucsp);

    $sql_up = "SELECT * FROM ql_danhmucsp where MaDM = $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up =  mysqli_fetch_assoc($query_up);

    if (isset($_POST['sbm'])) {

        $TenDM = $_POST['TenDM'];

        $sql = "UPDATE ql_danhmucsp SET TenDM = '$TenDM', MaDM='$id'";
        $query = mysqli_query($connect, $sql);
        header('location: index.php?page_layout=danhsach');
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa tên danh mục sản phẩm</h2>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data"><br>
                <div class="form-group">
                    <label for="">Tên danh mục</label>
                    <input type="text" name="TenDM" class="form-control" required value="<?php echo $row_up['TenDM']; ?>">
                </div><br>

                <button name="sbm" class="btn btn-success" type="submit">Sửa</button>
            </form>
        </div>
    </div>
</div>