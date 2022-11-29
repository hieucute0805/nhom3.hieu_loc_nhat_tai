
function anbox(id)
{
 	
	if($.cookie("box_trangthai")!=null)
	{
		box_trangthai = JSON.parse($.cookie("box_trangthai"))
	
	}else
	
	{
	var box_trangthai = [];
	}
	
	hw=$( ".bocuc_"+id+" >.loprong >.header" ).width();
	if($( ".bocuc_"+id+" >.loprong >.padding" ).css( "display")!='none')
	{
		
		$( ".bocuc_"+id+" >.loprong >.padding" ).css( "display", "none" );
		$( ".bocuc_"+id+" .tat" ).html('<i class="far fa-caret-square-up" onclick="anbox('+id+');"></i>');
	 		var a = box_trangthai.indexOf(id);
 		if (a > -1) {
 			box_trangthai.splice(a, 1);
		}
	
		
	}else
	{
		$( ".bocuc_"+id+" >.loprong >.padding" ).css( "display", "block" );
		$( ".bocuc_"+id+" .tat" ).html('<i class="far fa-caret-square-down" onclick="anbox('+id+');"></i>');
		
			var a = box_trangthai.indexOf(id);
		if(a==-1)box_trangthai.push(id);  
	
	}

	$( ".bocuc_"+id+" >.loprong >.header" ).width(hw);
	$.cookie("box_trangthai", JSON.stringify(box_trangthai),{ expires : 2 });
}
if($.cookie("box_trangthai")!=null)
{
	
	box_trangthai = JSON.parse($.cookie("box_trangthai"))
	var arrayLength = box_trangthai.length;
	for (var i = 0; i < arrayLength; i++) {
		//alert(box_trangthai[i])
 		hw=$( ".bocuc_"+box_trangthai[i]+" >.loprong >.header" ).width();
		$( ".bocuc_"+box_trangthai[i]+" >.loprong >.padding" ).css( "display", "block" );
		$( ".bocuc_"+box_trangthai[i]+" .tat" ).html('<i class="far fa-caret-square-up" onclick="anbox('+box_trangthai[i]+');"></i>');
		$( ".bocuc_"+box_trangthai[i]+" >.loprong >.header" ).width(hw);
	
	}

}
	
function popup(id,rong,cao)
{
document.getElementById('noidung_modal').innerHTML=document.getElementById('popup_'+id).innerHTML;

$(".popup-inner ").css("width", rong+"px"); 
$(".popup-inner ").css("min-width", rong+"px"); 

$(".popup-inner ").css("height", cao+"px"); 
$(".popup-inner ").css("min-height", cao+"px"); 

 		  $('.popup').fadeIn(350);
		  
 	
}
function capnhatsoluong(id)
{
	soluongdathang_popup=document.getElementById('soluongdathang_popup').value;
	LoadXmlDoc('modules/gianhang_sanpham/capnhatsoluong_popup.php?id='+id+'&soluong='+soluongdathang_popup,'common_echo');

}
