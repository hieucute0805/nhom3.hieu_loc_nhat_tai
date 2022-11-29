<?php 
    $sql_baiviet = "SELECT * FROM ql_baiviet";
    $query_baiviet = mysqli_query($connect, $sql_baiviet);

    if (isset($_POST['sbm'])) {
        $TieuDe = $_POST['TieuDe'];
        $NoiDung = $_POST['NoiDung'];

        $sql = "INSERT INTO ql_baiviet (TieuDe, NoiDung) 
        VALUES ('$TieuDe','$NoiDung')";
        $query = mysqli_query($connect, $sql);
        header('location: index.php?page_layout=danhsach');
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm bài viết</h2>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data"><br>
                <div class="form-group">
                    <label for="">Tiêu đề bài viết</label></label>
                    <input type="text" name="TieuDe" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="">Nội dung bài viết</label>
                    <input type="text" name="NoiDung" class="form-control" required>
                </div><br>  

                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
            </form>
        </div>
    </div>
</div>