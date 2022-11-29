<?php 
    $sql_danhmucsp = "SELECT * FROM ql_danhmucsp";
    $query_danhmucsp = mysqli_query($connect, $sql_danhmucsp);

    if (isset($_POST['sbm'])) {
        $prd_name = $_POST['prd_name'];

        
	$hinhanh=$_FILES['image']['name'];
	$hinhanh_tmp=$_FILES['image']['tmp_name'];
	move_uploaded_file($hinhanh_tmp,'img/'.$hinhanh);
        
        $NgayNhap = $_POST['NgayNhap'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];
        $brand_id = $_POST['brand_id'];

        $sql = "INSERT INTO ql_sanpham (TenSP, HinhAnh, NgayNhap, DonGia, SoLuong, MoTa, MaDM) 
        VALUES ('$prd_name', '$image', '$NgayNhap', $price, $quantity, '$description', $brand_id)";
        $query = mysqli_query($connect, $sql);
        move_uploaded_file($image_tmp, 'img/'.$image);
        header('location: index.php?page_layout=danhsach');
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm sản phẩm</h2>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data"><br>
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="prd_name" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input type="file" name="image" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="">Ngày nhập sản phẩm </label>
                    <input type="date" name="NgayNhap" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" name="price" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="">Số lượng sản phẩm</label>
                    <input type="number" name="quantity" class="form-control" required>
                </div><br>

                <div class="form-group">
                    <label for="">Mô tả sản phẩm</label>
                    <textarea name="description" cols="40" rows="10"></textarea>
                    <!-- <input type="text" name="description" class="form-control" required> -->
                </div><br>

                <div class="form-group">
                  <label for="">Thương hiệu</label>
                  <select class="form-control" name="brand_id" id="brand_id">
                    <?php
                        while ($row_brand = mysqli_fetch_assoc($query_danhmucsp)) {?>
                            <option value="<?php echo $row_brand['MaDM']; ?>"><?php echo $row_brand['TenDM']; ?></option>
                    <?php } ?>
                  </select><br>
                </div>

                <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
            </form>
        </div>
    </div>
</div>