
$(function() {
	//----- OPEN
	$('[data-popup-open]').on('click', function(e) {
		var targeted_popup_class = jQuery(this).attr('data-popup-open');
		$('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

		e.preventDefault();
	});
 
	//----- CLOSE
	$('[data-popup-close]').on('click', function(e) {
		var targeted_popup_class = jQuery(this).attr('data-popup-close');
		$('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

		e.preventDefault();
	});
	 new WOW().init();

});
function morongmenu(b)
{
	$('#menu_'+b+' .ul1').toggleClass('hienthimenu');
}
json_str=$.cookie('sanphamyeuthich');

	if(json_str!=null)
	{
		sanphamyeuthich = JSON.parse(json_str);
		var i;
		for (i = 0; i < sanphamyeuthich.length; i++) {
		 $(".them_yeu_thich_"+sanphamyeuthich[i]).addClass('fas fa-heart') ; 

		} 
				$(".sanphamyeuthich_box .sosanpham").html( sanphamyeuthich.length-1)

	}
	 

  