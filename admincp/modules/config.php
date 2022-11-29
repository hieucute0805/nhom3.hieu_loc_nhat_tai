<?php
	$tenmaychu='localhost';
	$tentaikhoan='root';
	$pass='';
	$csdl='phukiendienthoai';
	$conn=mysqli_connect($tenmaychu,$tentaikhoan,$pass,$csdl) or die('Ko kết nối được');
	// $mysqli = mysql_select_db($csdl,$conn);




	
    $connect = mysqli_connect('localhost', 'root', '', 'DU_AN_1');
    if ($connect) {
        mysqli_query($connect, "SET NAMES 'UTF8'");
        echo "ket nối thanh công";
    } else {
        echo "kết nối thất bại";
    }
?>	