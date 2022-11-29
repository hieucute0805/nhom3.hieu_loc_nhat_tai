<?php
    // $sql = "SELECT * FROM products inner join brands on products.brand_id = brands.brand_id";
    $sql_danhmucsp = "SELECT * FROM ql_danhmucsp";
    $query_danhmucsp = mysqli_query($connect, $sql_danhmucsp);


    $sql_sp = "SELECT * FROM ql_sanpham inner join ql_danhmucsp on ql_sanpham.MaDM = ql_danhmucsp.MaDM";
    $query_sp = mysqli_query($connect, $sql_sp);

    $sql_baiviet = "SELECT * FROM ql_baiviet";
    $query_baiviet = mysqli_query($connect, $sql_baiviet);
?>



<div class="bocuc  bocuc_28 "><div class="loprong"><div class="padding ">
    <div class="bocuc  bocuc_29  "><div class="loprong"><div class="padding "><div class="bocuc  bocuc_32  "><div class="loprong"><div class="header"><span class="header_text">DANH MỤC SẢN PHẨM</span></div><div class="padding ">
    <div class="menu_div" id="menu_32">

    <ul class="ul1">


    <?php while($row_dm = mysqli_fetch_assoc($query_danhmucsp)) {  ?>
    
          <li class="li1"><a href=""><?php echo $row_dm['TenDM']; ?> </a> </li>  

   <?php } ?>  

    </ul>
    </div>
    
    </div></div></div><div class="bocuc  bocuc_35  "><div class="loprong"><div class="header"><span class="header_text"><a href="tin-tuc-b2.html">TIN TỨC</a></span></div><div class="padding ">
<div class="baiviet_box">
<ul>

<?php
            $i = 1;
            while($row = mysqli_fetch_assoc($query_baiviet)) { 
          ?> 

        <li id="<?php echo $row['MaBV']; ?>">
            <div class="div_noidung">
                
                <div class="anh"><a href=""><label><img class="lazy"
                        alt=""
                        src="https://cdn.tgdd.vn/Files/2020/05/12/1255057/att2_800x450.jpg"></label></a>
                </div>
        
                
                <h2 class="tieude"><a href=""
                        title=""><?php echo $row['TieuDe']; ?></a></h2>
            </div>
        </li>
<?php }
?>  

<br class="clear"> 
</ul> 


</div>
</div></div></div>
<div class="bocuc  bocuc_36  "><div class="loprong"><div class="header"><span class="header_text">ĐỊA CHỈ</span></div><div class="padding ">



</div></div><style>.bocuc_36{display:block;vertical-align:top;}

.bocuc_36 > div >  .header{font-size:16PX;font-weight:bold;padding:10px;background:#F1F1F1;color:#E03232;}
.bocuc_36 > div >  .header a{ color:#E03232;}
</style></div><div class="bocuc bocuc_37 "><div class="loprong">
    <div class="padding ">
        <pre class="language-markup"><code><i class="fas fa-map-marker-alt"></i>Số 14 Phạm Quý Thích, Tân Quý, Tân Phú,
TP Hồ Chí Minh</code></pre>

        <pre class="language-markup"><code><i class="fas fa-phone"></i>Tổng đài hỗ trợ:0906308380</code></pre>

        <p>Từ 8h00 - 22h00 các ngày thứ 2
            đến chủ nhật</p>
        <p><a title="" href="http://mayscan.net/"></a></p>
        <pre
            class="language-markup"><code><i class="fas fa-envelope"></i><a title="" href="http://mayscan.net/">123corpvn@gmail.com</a></code></pre>
    </div>
</div>
</div></div></div></div><div class="bocuc  bocuc_33  "><div class="loprong"><div class="padding "><div class="bocuc  bocuc_30  "><div class="loprong"><div class="padding "><div id="form_timkiem_30">    
<select class="tk_input" id="bocuc_30_tk_danhmuc_1"><option value="">Tìm toàn bộ</option>
            <option value="4">Máy Scan Fujitsu</option>
            </select><div class="otimkiem"><input onkeyup="submit_form2('ketquatimnhanh30','','modules/gianhang_timkiem/timkiemnhanh_xml.php?b=30','form_timkiem_30');" id="otimkiem_30" class="otimkiem_text" placeholder="Tìm kiếm" onkeydown="if(event.keyCode==13)submit_form2('','','modules/gianhang_timkiem/timkiem2017_xml.php?b=30','form_timkiem_30');"><i onclick="submit_form2('','','modules/gianhang_timkiem/timkiem2017_xml.php?b=30','form_timkiem_30');" class="fa fa-search" aria-hidden="true"></i>
<div id="ketquatimnhanh30" class="ketquatimnhanh"></div></div>
<style>.bocuc_30{display:block;vertical-align:top;}

.bocuc_30 > div >  .header a{ }
.bocuc_30 > .loprong > .padding{padding:20px;}
.bocuc_30 > div > .giua  > .padding{padding:20px;}
.bocuc_30> .loprong  > div > .giua > .padding{padding:20px;}
.bocuc_30 > .loprong > .giua > .padding{padding:20px;}
.bocuc_30 .otimkiem{display:inline-block;}

</style>
</div></div></div></div><div class="bocuc  bocuc_34  "><div class="loprong"><div class="padding "><div class="bocuc bocuc_39"><div class="loprong"><div class="padding "> 

 <style>
.swiper_39{
     width: 100%;
  }
</style>

<script>
function doi_trang_39(el) {    
   jQuery(".bocuc_39 .tieude_tab span").removeClass("trang_hientai");
   jQuery(el).addClass("trang_hientai");
}

function doi_trang_theo_id_39(i_id) {   
    jQuery(".bocuc_39 .tieude_tab span").removeClass("trang_hientai");
     jQuery("#trang_so_"+i_id+"_39").addClass("trang_hientai");
}

</script>
<div class="tieude_tab"><span id="trang_so_0_39" class="trang_hientai"
        onclick="doi_trang_39(this);swiper_39.slideTo(0)">SẢN PHẨM MỚI</span></div>
<div class="swiper-container swiper_39 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
    <div class="swiper-wrapper" id="swiper-wrapper-a45be969c111afc10" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
    
    <div class="swiper-slide bocuc bocuc_70 swiper-slide-active" role="group" aria-label="1 / 3" style="width: 840px;"><div class="loprong"><div class="padding ">
<div class="sanpham_box">



</div>
</div></div></div> 
     </div>
     <div class="swiper-pagination swiper-pagination-white"></div>
      
<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
</div></div></div>
<div class="bocuc bocuc_123">
    <div class="loprong">
        <div class="padding ">
            <div class="bocuc  bocuc_46  ">
                <div class="loprong">


 






 <?php

while($row_sp = mysqli_fetch_assoc($query_sp)) { ?>

                    <div class="header"><span class="header_text">
                        <span class="danhmuc_capme"><a href="may-scan-fujitsu-d4.html"><?php echo $row_sp['TenDM']; ?></a></span>
                        </span>
                    </div>
                <div class="padding ">
                    <div class="sanpham_box">

                        <ul>                      
                            <li id="sp_46_1">
                                <div class="div_noidung">
                                    <div class="truong anh"><a title="<?php echo $row_sp['TenSP']; ?>"
                                            href="may-quet-fujitsu-scanner-s1300i-id19.html"><img alt="<?php echo $row_sp['TenSP']; ?>"
                                                class="lazy anh_sanpham_danhsach"
                                                data-src="http://u604647.webmienphi.vn/files/sanpham/19/200_1/jpg/may-quet-fujitsu-scanner-s1300i_200x200.jpg"></a><a
                                            rel="nofollow" href="/giohang.html"
                                            class="bieutuongdamua bieutuongdamua bieutuongdamua19"><i
                                                class="fal fa-2x fa-shopping-bag"></i><span></span></a></div>
                                    <div class="truong nutmuahang"><label class="nut_dat" onclick="dathang(19) ;"><span>Mua
                                                hàng</span></label></div>
                                    <div class="html200"><a class="chitiet" href="may-quet-fujitsu-scanner-s1300i-id19.html"
                                            style="border:1px solid #e03232;padding:10px 15px; margin:10px 0;display:inline-block;background:#e03232;color:#fff;font-size:14px;">Xem
                                            chi tiết</a></div>
                                    <h2 class="truong tieude"><a title="<?php echo $row_sp['TenSP']; ?>"
                                            href="may-quet-fujitsu-scanner-s1300i-id19.html"><?php echo $row_sp['TenSP']; ?></a></h2>
                                    <div class="gia"><strong><?php echo $row_sp['DonGia']; ?></strong> <span>đ</span></div>
                                    <div class="phantram"><span class="so_phantram">10</span> <span class="dau_phantram">%</span></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                

                <?php }?>   


</div></div>

</ul>  



</div>
</div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>