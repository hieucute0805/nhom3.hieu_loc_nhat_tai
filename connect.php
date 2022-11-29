<?php

// //khai báo biến host
// $hostName = 'localhost';
// // khai báo biến username
// $userName = 'root';
// //khai báo biến password
// $passWord = '';
// // khai báo biến databaseName
// $databaseName = 'luyen_tap';
// // khởi tạo kết nối
// $connect = mysqli_connect($hostName, $userName, $passWord, $databaseName);
// //Kiểm tra kết nối
// if (!$connect) {
//     exit('Kết nối không thành công!');
// }
// // thành công
// echo 'Kết nối thành công!';

    $connect = mysqli_connect('localhost', 'root', '', 'DU_AN_1');
    if ($connect) {
        mysqli_query($connect, "SET NAMES 'UTF8'");
    } else {
        echo "kết nối thất bại";
    }

?>