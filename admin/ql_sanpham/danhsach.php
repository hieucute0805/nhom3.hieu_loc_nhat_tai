<?php
    $sql = "SELECT * FROM ql_sanpham inner join ql_danhmucsp on ql_sanpham.MaDM = ql_danhmucsp.MaDM";
    $query = mysqli_query($connect, $sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Quản Lý sản phẩm</h2>
        </div>
        <div class="card-boby">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Ngày nhập</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng sản phẩm</th>
                        <th>Mô tả sản phẩm</th>
                        <th>Danh mục san phẩm</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while($row = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['TenSP']; ?> </td>
                            <td><?php echo $row['NgayNhap']; ?> </td>

                            <td>
                                <img src="../img/<?php echo $row['HinhAnh'];?>" alt="" style="width: 100px"></td>

                            <td><?php echo $row['DonGia']; ?></td>
                            <td><?php echo $row['SoLuong']; ?></td>
                            <td><?php echo $row['MoTa'];?></td>
                            <td><?php echo $row['TenDM']; ?></td>
                            <td><a href="index.php?page_layout=sua&id=<?php echo $row['MaSP']; ?>">Sửa</a></td>
                            <td><a href="index.php?page_layout=xoa&id=<?php echo $row['MaSP']; ?>">Xóa</a></td>
                        </tr>
                    <?php } ?>  
                </tbody>
            </table>
            <a class="btn btn-primary" href="index.php?page_layout=them">Thêm mới</a>
        </div>
    </div>
</div>

