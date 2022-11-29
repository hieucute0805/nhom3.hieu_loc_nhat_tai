<?php
	$sql_lietkesp="select * from ql_taikhoan order by MaTK desc ";
	$row_lietkesp=mysqli_query($connect, $sql_lietkesp);

?>
<div class="button_themsp">
<a href="index.php?quanly=taikhoan&ac=them">Thêm Mới</a> 
</div>

<table width="100%" border="1" >
  <tr>
    <td>ID</td>
    <td>Tên đang nhập</td>
    <td>Mật khẩu</td>
    <td>Họ và Tên</td>
    <td>Địa chỉ</td>
    <td>Email</td>
    <td>Số điện thoại</td>
    <td>Ảnh đại diện</td>
    <td>Vai trò</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysqli_fetch_array($row_lietkesp)){

  ?>
  <tr>
    <td><?php  echo $i++;?></td>
    <td><?php echo $dong['TenTK'] ?></td>
    <td><?php echo $dong['MatKhau'] ?></td>
    <td><?php echo $dong['HoTen'] ?></td>
    <td><?php echo $dong['DiaChi'] ?></td>
    <td><?php echo $dong['Email'] ?></td>
    <td><?php echo $dong['Sdt'] ?></td>
    <td><img src="img/<?php echo $row['HinhAnh'];?>" alt="" style="width: 100px"></td>
  
    <td><?php
	if($dong['VaiTro'] == 1 ){
		echo 'Admin';
	}else{
		echo 'Khách Hàng';
	}
    ?></td>
    <td><a href="index.php?quanly=taikhoan&ac=sua&id=<?php echo $dong['MaTK'] ?>"><center><img src="../imgs/edit.png" width="30" height="30" /></center></a></td>
    <td><a href="modules/quanlyhieusp/xuly.php?id=<?php echo $dong['MaTK']?>" class="delete_link"><center><img src="../imgs/delete.png" width="30" height="30" /></center></a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
