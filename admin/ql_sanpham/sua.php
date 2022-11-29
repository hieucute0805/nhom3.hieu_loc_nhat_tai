<?php 
    $id = $_GET['id'];

    $sql_danhmucsp = "SELECT * FROM ql_danhmucsp";
    $query_brands = mysqli_query($connect, $sql_danhmucsp);

    $sql_up = "SELECT * FROM ql_sanpham where MaSP = $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up =  mysqli_fetch_assoc($query_up);

    if (isset($_POST['sbm'])) {
        $TenSP = $_POST['TenSP'];

        if ($_FILES['HinhAnh']['name'] == '') {
            $image = $row_up['HinhAnh'];
        }else{
            $image = $row_up['HinhAnh'];
            // $image = $_FILES['image']['name'];
            // $image_tmp = $_FILES['image']['tmp_name'];
            // move_uploaded_file($image_tmp, 'img/'.$image);
        }
        $price = $_POST['DonGia'];
        $quantity = $_POST['SoLuong'];
        $MoTa = $_POST['MoTa'];
        $NgayNhap = $_POST['NgayNhap'];
        $MaDM = $_POST['MaDM'];

        $sql = "UPDATE ql_sanpham SET TenSP = '$TenSP', HinhAnh = '$image', MaDM = '$MaDM',
        NgayNhap = '$NgayNhap', DonGia = '$price', SoLuong = '$quantity', MoTa = '$MoTa'
        where MaSP = $id";
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
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="TenSP" class="form-control" required value="<?php echo $row_up['TenSP']; ?>">
                </div><br>

                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="HinhAnh" class="form-control" required value="<?php echo $row_up['HinhAnh']; ?>">
                </div><br>

                <div class="form-group">
                    <label for="">Ngày nhập sản phẩm</label>
                    <input type="date" name="NgayNhap" class="form-control" required value="<?php echo $row_up['NgayNhap']; ?>">
                </div><br>

                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" name="DonGia" class="form-control" required value="<?php echo $row_up['DonGia']; ?>">
                </div><br>

                <div class="form-group">
                    <label for="">Số lượng sản phẩm</label>
                    <input type="number" name="SoLuong" class="form-control" required value="<?php echo $row_up['SoLuong']; ?>">
                </div><br>

                <div class="form-group">
                    <label for="">Mô tả sản phẩm</label>
                    <input type="text" name="MoTa" class="form-control" required value="<?php echo $row_up['MoTa']; ?>">
                </div><br>

                <div class="form-group">
                  <label for="">Thương hiệu</label>
                  <select class="form-control" name="MaDM" id="MaDM">
                    <?php
                        while ($row_brand = mysqli_fetch_assoc($query_brands)) {?>
                            <option value = "<?php echo $row_brand['MaDM']; ?>"><?php echo $row_brand['TenDM']; ?></option>
                    <?php } ?>
                  </select><br>
                </div>

                <button name="sbm" class="btn btn-success" type="submit">Sửa</button>
            </form>
        </div>
    </div>
</div>