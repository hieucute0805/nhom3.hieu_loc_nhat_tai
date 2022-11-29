<div class="button_themsp">
<a href="index.php?quanly=taikhoan&ac=lietke">Liệt kê sp</a> 
</div>
<form action="modules/ql_taikhoan/xuly.php" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align:center; font-size:25px">thêm tài khoản</td>
  </tr>
  <tr>
    <td width="97">Tên đăng nhập</td>
    <td width="87"><input type="text" name="TenTK" value=""></td>
  </tr>
  <tr>
    <td width="97">Mật khẩu</td>
    <td width="87"><input type="password" name="MatKhau" value=""></td>
  </tr>
  <tr>
    <td width="97">Họ và tên</td>
    <td width="87"><input type="text" name="HoTen" value=""></td>
  </tr>
  <tr>
    <td width="97">Địa chỉ</td>
    <td width="87"><input type="text" name="DiaChi" value=""></td>
  </tr>
  <tr>
    <td width="97">Email</td>
    <td width="87"><input type="email" name="Email" value=""></td>
  </tr>
  <tr>
    <td width="97">Số điện thoại</td>
    <td width="87"><input type="number" name="Sdt" value=""></td>
  </tr>
  <tr>
    <td width="97">Ảnh đại diện</td>
    <td width="87"><input type="file" name="HinhAnh" value=""></td>
  </tr>
  <tr>
    <td>Vai trò</td>
    <td><select name="VaiTro">
      <option value="1" selected="selected">admin</option>
      <option value="2">Khách hàng</option>
      </select></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="them" value="Thêm">
    </div></td>
  </tr>
</table>
</form>


