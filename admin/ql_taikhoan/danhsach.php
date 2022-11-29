<?php
    $sql = "SELECT * FROM ql_taikhoan";
    $query = mysqli_query($connect, $sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Quản lý tài khoản</h2>
        </div>
        <div class="card-boby">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Tên đang nhập</th>
                        <th>Mật khẩu</th>
                        <th>Họ và Tên</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Ảnh đại diện</th>
                        <th>Vai trò/th>
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
                            <td><?php echo $row['TenTK']; ?> </td>
                            <td><?php echo $row['MatKhau']; ?> </td>
                            <td><?php echo $row['HoTen']; ?> </td>
                            <td><?php echo $row['DiaChi']; ?> </td>
                            <td><?php echo $row['Email']; ?> </td>
                            <td><?php echo $row['Sdt']; ?> </td>

                            <td><img src="img/<?php echo $row['HinhAnh'];?>" alt="" style="width: 100px"></td>

                            <td><?php 
                                if (($row['VaiTro']) == 2) {
                                    echo 'Admin';
                                } else if (($row['VaiTro']) == 1) {
                                    echo 'Nhân Viên';
                                } else{
                                    echo 'Khách hàng';
                                }
                            ?></td>
                            <td><a href="index.php?page_layout=sua&id=<?php echo $row['MaTK']; ?>">Sửa</a></td>
                            <td><a href="index.php?page_layout=xoa&id=<?php echo $row['MaTK']; ?>">Xóa</a></td>
                        </tr>
                    <?php } ?>  
                </tbody>
            </table>
            <a class="btn btn-primary" href="index.php?page_layout=them">Thêm mới</a>
        </div>
    </div>
</div>

