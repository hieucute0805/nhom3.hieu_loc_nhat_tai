<?php 
    $sql_taikhoan = "SELECT * FROM ql_taikhoan";
    $query_taikhoan = mysqli_query($connect, $sql_taikhoan);
    $sql_sanpham = "SELECT * FROM ql_sanpham";
    $query_sanpham = mysqli_query($connect, $sql_sanpham);

    if (isset($_POST['sbm'])) {
        $MaTK = $_POST['MaTK'];
        $MaSP = $_POST['MaSP'];
        $NgayDatHang = $_POST['NgayDatHang'];
        $NgayGiaoHang = $_POST['NgayGiaoHang'];
        $HinhThucTT = $_POST['HinhThucTT'];
        $TongTien = $_POST['TongTien'];
        $TrangThai = $_POST['TrangThai'];
        $KhuyenMai = $_POST['KhuyenMai'];

        $sql = "INSERT INTO ql_donhang (MaTK, MaSP, NgayDatHang, NgayGiaoHang, HinhThucTT, TongTien, TrangThai, KhuyenMai) 
        VALUES ($MaTK, $MaSP, '$NgayDatHang', '$NgayGiaoHang', $HinhThucTT, $TongTien, $TrangThai, '$KhuyenMai')";
        $query = mysqli_query($connect, $sql);
        move_uploaded_file($image_tmp, 'img/'.$image);
        header('location: index.php?page_layout=danhsach');
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm đơn hàng</h2>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data"><br>
            <div class="form-group">
                  <label for="">Tên tài khoản</label>
                  <select class="form-control" name="MaTK" id="brand_id">
                    <?php
                        while ($row_taikhoan = mysqli_fetch_assoc($query_taikhoan)) {?>
                            <option value="<?php echo $row_taikhoan['MaTK']; ?>"><?php echo $row_taikhoan['TenTK']; ?></option>
                        
                    <?php } ?>
                  </select><br>
                </div>

                <div class="form-group">
                  <label for="">Tên sảm phẩm</label>
                  <select class="form-control" name="TenSP" id="brand_id">
                    <?php
                        while ($row_sanpham= mysqli_fetch_assoc($query_sanpham)) {?>
                            <option value="<?php echo $row_sanpham['MaSP']; ?>"><?php echo $row_sanpham['TenSP']; ?></option>
                        
                    <?php } ?>
                  </select><br>
                </div>

                <div class="form-group">
                    <label for="">Ngày đặt hàng</label>
                    <input type="date" name="NgayDatHang" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="">Ngày giao hàng</label>
                    <input type="date" name="NgayGiaoHang" class="form-control" required>
                </div><br>
                
                <div class="form-group">
                    <label for="">Hình thức thanh toán</label>
                    <input type="date" name="HinhThucTT" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="">Tổng tiền</label>
                    <input type="number" name="TongTien" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="">Khuyến mãi</label>
                    <input type="text" name="KhuyenMai" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="">Trạng thái</label>
                    <input type="text" name="TrangThai" class="form-control" required>
                </div><br>

                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
            </form>
        </div>
    </div>
</div>