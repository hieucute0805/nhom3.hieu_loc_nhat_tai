<?php
	$sql = "select * from ql_taikhoan where MaTK = '$_GET[id]'";
	$row=mysqli_query($connect, $sql);
	$dong=mysqli_fetch_array($row);
?>
<div class="button_themsp">
<a href="index.php?quanly=taikhoan&ac=lietke">Sửa tài khoản</a> 
</div>
<form action="modules/ql_taikhoan/xuly.php?id=<?php echo $dong['MaTK']?>" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align:center; font-size:25px">Sửa tài khoản <?php echo $dong['TenTK'] ?></td>
  </tr>
  <tr>
    <td width="97">Tên đăng nhập</td>
    <td width="87"><input type="text" name="TenTK" value="<?php echo $dong['TenTK']; ?>"></td>
  </tr>
  <tr>
    <td width="97">Mật khẩu</td>
    <td width="87"><input type="password" name="MatKhau" value="<?php echo $dong['MatKhau'] ?>"></td>
  </tr>
  <tr>
    <td width="97">Họ và tên</td>
    <td width="87"><input type="text" name="HoTen" value="<?php echo $dong['HoTen'] ?>"></td>
  </tr>
  <tr>
    <td width="97">Địa chỉ</td>
    <td width="87"><input type="text" name="DiaChi" value="<?php echo $dong['DiaChi'] ?>"></td>
  </tr>
  <tr>
    <td width="97">Email</td>
    <td width="87"><input type="email" name="Email" value="<?php echo $dong['Email'] ?>"></td>
  </tr>
  <tr>
    <td width="97">Số điện thoại</td>
    <td width="87"><input type="number" name="Sdt" value="<?php echo $dong['Sdt'] ?>"></td>
  </tr>
  <tr>
    <td width="97">Ảnh đại diện</td>
    <td width="87"><input type="file" name="HinhAnh" value="<?php echo $dong['HinhAnh'] ?>"></td>
  </tr>
  <tr>
    <td>Vai trò</td>
    <td><select name="VaiTro">
      <?php
	if($dong['vaitro'] == 1){
	?>
      <option value="1" selected="selected">admin</option>
      <option value="2">Khách hàng</option>
      <?php
	}else{
	?>
      <option value="1">admin</option>
      <option value="2" selected="selected">Khách hàng</option>
      <?php
	}
	 ?>
      </select></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" value="Sửa">
    </div></td>
  </tr>
</table>
</form>


