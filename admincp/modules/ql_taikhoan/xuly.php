<?php
	include('../config.php');
	$TenTK = $_POST['TenTK'];
	$price = $_POST['MatKhau'];
	$quantity = $_POST['HoTen'];
	$DiaChi = $_POST['DiaChi'];
	$Email = $_POST['Email'];
	$Sdt = $_POST['Sdt'];

	if ($_FILES['HinhAnh']['name'] == '') {
		$image = $dong['HinhAnh'];
	}else{
		$image = $dong['HinhAnh'];
		// $image = $_FILES['image']['name'];
		// $image_tmp = $_FILES['image']['tmp_name'];
		// move_uploaded_file($image_tmp, 'img/'.$image);
	};

	$VaiTro = $_POST['VaiTro'];
	
	if(isset($_POST['them'])){
		//them
		$sql_them=("INSERT INTO ql_taikhoan (TenTK, HinhAnh, MatKhau, HoTen, DiaChi, Email, Sdt, VaiTro) 
        VALUES ('$TenTK', '$image', '$price', '$quantity', '$DiaChi', '$Email', $Sdt, $VaiTro )");
		mysqli_query($connect, $sql_them);
		header('location:../../index.php?quanly=taikhoan&ac=lietke');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql_sua = "UPDATE ql_taikhoan SET TenTK = '$TenTK', HinhAnh = '$image', Sdt = $Sdt,
        Email = '$Email', MatKhau = '$price', HoTen = '$quantity', DiaChi = '$DiaChi', VaiTro = $VaiTro
        where MaTK = '$_GET[id]'";
		mysqli_query($connect, $sql_sua);
		header('location:../../index.php?quanly=taikhoan&ac=lietke');
		}else{
		$sql_xoa = "DELETE FROM ql_taikhoan WHERE MaTK = '$_GET[id]'";
		mysqli_query($connect, $sql_xoa);
		header('location:../../index.php?quanly=taikhoan&ac=lietke');
	}
?>
