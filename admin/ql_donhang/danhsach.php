<?php
    // $sql1 = "SELECT * FROM ql_donhang inner join ql_taikhoan on ql_donhang.MaTK = ql_taikhoan.MaTK";
    // $sql2 = "SELECT * FROM ql_donhang inner join ql_sanpham on ql_donhang.MaSP = ql_sanpham.MaSP";
    $sql = "SELECT * FROM ql_donhang INNER JOIN ql_taikhoan ON ql_donhang.MaTK = ql_taikhoan.MaTK INNER JOIN ql_sanpham ON ql_donhang.MaSP = ql_sanpham.MaSP;";
    $query = mysqli_query($connect, $sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Quản lý đơn hàng</h2>
        </div>
        <div class="card-boby">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Tên tài khoản</th>
                        <th>Tên sản phẩm</th>
                        <th>Ngày đặt hàng</th>
                        <th>Ngày giao hàng</th>
                        <th>Hình thức thanh toán</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái</th>
                        <th>Khuyến mãi</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while($row = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['TenTK']; ?> </td>
                            <td><?php echo $row['TenSP']; ?> </td>
                            <td><?php echo $row['NgayDatHang']; ?> </td>
                            <td><?php echo $row['NgayGiaoHang']; ?> </td>
                            <td><?php echo $row['HinhThucTT']; ?></td>
                            <td><?php echo $row['TongTien']; ?></td>
                            <td><?php echo $row['TrangThai'];?></td>
                            <td><?php echo $row['KhuyenMai'];?></td>
                            <td><a href="index.php?page_layout=sua&id=<?php echo $row['MaHD']; ?>">Sửa</a></td>
                        </tr>
                    <?php } ?>  
                </tbody>
            </table>
            <a class="btn btn-primary" href="index.php?page_layout=them">Thêm mới</a>
        </div>
    </div>
</div>

