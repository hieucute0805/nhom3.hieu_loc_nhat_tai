<?php 
    $id = $_GET['id'];

    // $sql_taikhoan = "SELECT * FROM ql_taikhoan";
    // $query_brands = mysqli_query($connect, $sql_taikhoan);

    $sql_up = "SELECT * FROM ql_taikhoan where MaTK = $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up =  mysqli_fetch_assoc($query_up);

    if (isset($_POST['sbm'])) {
        $TenTK = $_POST['TenTK'];
        $price = $_POST['MatKhau'];
        $quantity = $_POST['HoTen'];
        $DiaChi = $_POST['DiaChi'];
        $Email = $_POST['Email'];
        $Sdt = $_POST['Sdt'];

        if ($_FILES['HinhAnh']['name'] == '') {
            $image = $row_up['HinhAnh'];
        }else{
            $image = $row_up['HinhAnh'];
            // $image = $_FILES['image']['name'];
            // $image_tmp = $_FILES['image']['tmp_name'];
            // move_uploaded_file($image_tmp, 'img/'.$image);
        };

        $VaiTro = $_POST['VaiTro'];

        $sql = "UPDATE ql_taikhoan SET TenTK = '$TenTK', HinhAnh = '$image', Sdt = $Sdt,
        Email = '$Email', MatKhau = '$price', HoTen = '$quantity', DiaChi = '$DiaChi', VaiTro = $VaiTro
        where MaTK = $id";
        $query = mysqli_query($connect, $sql);
        header('location: index.php?page_layout=danhsach');
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa tài khoản <?php echo $row_up['HoTen']; ?></h2>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data"><br>
                <div class="form-group">
                    <label for="">Tên đăng nhập</label>
                    <input type="text" name="TenTK" class="form-control" required value="<?php echo $row_up['TenTK']; ?>">
                </div><br>

                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="password" name="MatKhau" class="form-control" required value="<?php echo $row_up['MatKhau']; ?>">
                </div><br>

                <div class="form-group">
                    <label for="">Họ và Tên</label>
                    <input type="text" name="HoTen" class="form-control" required value="<?php echo $row_up['HoTen']; ?>">
                </div><br>

                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="DiaChi" class="form-control" required value="<?php echo $row_up['DiaChi']; ?>">
                </div><br>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="Email" class="form-control" required value="<?php echo $row_up['Email']; ?>">
                </div><br>
                
                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="number" name="Sdt" class="form-control" required value="<?php echo $row_up['Sdt']; ?>">
                </div><br>

                <div class="form-group">
                    <label for="">Ảnh đại diện</label>
                    <input type="file" name="image" class="form-control" required value="<?php echo $row_up['HinhAnh']; ?>">
                </div><br>

                <div class="form-group">
                    <label for="">Vai trò</label>
                    <select name="VaiTro" class="form-control" required>
                        <option value="0">Khách hàng</option>
                        <option value="1">Nhân viên</option>
                        <option value="2">Admin</option>
                    </select>   
                </div><br>

                <button name="sbm" class="btn btn-success" type="submit">Sửa tài khoản</button>
            </form>
        </div>
    </div>
</div>