<?php 
    $id = $_GET['id'];

    $sql_ql_baiviet = "SELECT * FROM ql_baiviet";
    $query_baiviet = mysqli_query($connect, $sql_ql_baiviet);

    $sql_up = "SELECT * FROM ql_baiviet where MaBV = $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up =  mysqli_fetch_assoc($query_up);

    if (isset($_POST['sbm'])) {

        $TieuDe = $_POST['TieuDe'];
        $NoiDung = $_POST['NoiDung'];

        $sql = "UPDATE ql_baiviet SET TieuDe = '$TieuDe', NoiDung = '$NoiDung' where MaBV = '$id'";
        $query = mysqli_query($connect, $sql);
        header('location: index.php?page_layout=danhsach');
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa sản phẩm</h2>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data"><br>
                <div class="form-group">
                    <label for="">Tiêu đề</label>
                    <input type="text" name="TieuDe" class="form-control" required value="<?php echo $row_up['TieuDe']; ?>">
                </div><br>

                <div class="form-group">
                    <label for="">Nội dung bài viết</label>
                    <input type="text" name="NoiDung" class="form-control" required value="<?php echo $row_up['NoiDung']; ?> ">
                </div><br>
                </div>

                <button name="sbm" class="btn btn-success" type="submit">Sửa</button>
            </form>
        </div>
    </div>
</div>