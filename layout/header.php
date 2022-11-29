<?php 

    include_once("connect.php");
    $sql_danhmucsp = "SELECT * FROM ql_danhmucsp";
    $query_danhmucsp = mysqli_query($connect, $sql_danhmucsp);

?>


<div class="bocuc  bocuc_24 ">
  <div class="loprong">
    <div class="padding ">
      <div class="bocuc  bocuc_25  ">
  <div class="loprong">
    <div class="padding ">
      <span><a href="/">
        <img style=" width: 11%;"class="lazy  anh_1"  alt="logo" src="layout/img/larger1.png"></a></span></div></div></div><div class="bocuc  bocuc_26  ">
  <div class="loprong">
    <div class="padding ">
  <div class="menu_div" id="menu_26">

   <div class="menu_button" onclick="morongmenu(26);"><svg style="height:20px" xmlns="http://www.w3.org/2000/svg" class="svg-inline--fa fa-list fa-w-16" role="img" aria-hidden="true" viewBox="0 0 512 512" focusable="false" data-icon="list" data-prefix="fas"><path fill="currentColor" d="M 80 368 H 16 a 16 16 0 0 0 -16 16 v 64 a 16 16 0 0 0 16 16 h 64 a 16 16 0 0 0 16 -16 v -64 a 16 16 0 0 0 -16 -16 Z m 0 -320 H 16 A 16 16 0 0 0 0 64 v 64 a 16 16 0 0 0 16 16 h 64 a 16 16 0 0 0 16 -16 V 64 a 16 16 0 0 0 -16 -16 Z m 0 160 H 16 a 16 16 0 0 0 -16 16 v 64 a 16 16 0 0 0 16 16 h 64 a 16 16 0 0 0 16 -16 v -64 a 16 16 0 0 0 -16 -16 Z m 416 176 H 176 a 16 16 0 0 0 -16 16 v 32 a 16 16 0 0 0 16 16 h 320 a 16 16 0 0 0 16 -16 v -32 a 16 16 0 0 0 -16 -16 Z m 0 -320 H 176 a 16 16 0 0 0 -16 16 v 32 a 16 16 0 0 0 16 16 h 320 a 16 16 0 0 0 16 -16 V 80 a 16 16 0 0 0 -16 -16 Z m 0 160 H 176 a 16 16 0 0 0 -16 16 v 32 a 16 16 0 0 0 16 16 h 320 a 16 16 0 0 0 16 -16 v -32 a 16 16 0 0 0 -16 -16 Z"></path></svg></div>
  
  
  <ul class="ul1"> <li class="li1 dang_chon"><a href="/">Trang Chủ</a>
  </li><li class="li2"><a href="thanh-toan-giao-hang-bid2.html">Giới thiệu</a>
  </li><li class="li3"><a href="sanpham.html">SẢN PHẨM</a>
  <ul class="ul2">
    <?php
            $i = 1;
            while($row = mysqli_fetch_assoc($query_danhmucsp)) { 
          ?> 
          <li><a href=""><?php echo $row['TenDM']; ?> </a></li>
            <?php }
          ?>  
      
    </ul>
  </li><li class="li4"><a href="tin-tuc-b2.html">Tin Tức</a>
  </li><li class="li5"><a href="hoidap.html">Khách hàng</a>
  </li><li class="li6"><a href="lienhe.html">Liên hệ</a></li>
  <li class="li6"><a style="font-size: 11px;" href="#">Đăng nhập</a></li>|
                
              <li><a style="font-size: 11px;" href="#">Đăng ký</a></li>  
            
  
  </ul>
  </div>
  
  </div></div></div></div></div></div>