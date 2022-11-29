<?php 
    $sql_taikhoan= "SELECT * FROM ql_taikhoan";
    $query_taikhoan = mysqli_query($connect, $sql_taikhoan);

    if (isset($_POST['sbm'])) {
        $TenTK = $_POST['TenTK'];

        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        
        $MatKhau = $_POST['MatKhau'];
        $HoTen = $_POST['HoTen'];
        $DiaChi = $_POST['DiaChi'];
        $Email = $_POST['Email'];
        $Sdt = $_POST['Sdt'];
        $VaiTro = $_POST['VaiTro'];

        $sql = "INSERT INTO ql_taikhoan (TenTK, HinhAnh, MatKhau, HoTen, DiaChi, Email, Sdt, VaiTro) 
        VALUES ('$TenTK', '$image', '$MatKhau', '$HoTen', '$DiaChi', '$Email', $Sdt, $VaiTro )";
        $query = mysqli_query($connect, $sql);
        move_uploaded_file($image_tmp, 'img/'.$image);
        header('location: index.php?page_layout=danhsach');
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm tài khoản</h2>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data"><br>
                <div class="form-group">
                    <label for="">Tên đăng nhập</label>
                    <input type="text" name="TenTK" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="password" name="MatKhau" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="">Họ và Tên</label>
                    <input type="text" name="HoTen" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="DiaChi" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="Email" class="form-control" required>
                </div><br>
                
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="number" name="Sdt" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="">Ảnh đại diện</label>
                    <input type="file" name="image" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="">Vai trò </label>
                    <select name="VaiTro" class="form-control" required>
                        <option value="0">Khách hàng</option>
                        <option value="1">Nhân Viên</option>
                        <option value="2">Admin</option>
                    </select>
                </div><br>

                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
            </form>
        </div>
    </div>
</div>