$(document).ready(function() {
$(document).scroll(function scroll_fix_nav	() {
  // var is_small_res = ( $( '.visible-xs' ).css( 'display' ) === 'block' );
  var is_small_res = ($(window).width() <= 1040);
 if(!is_small_res){ 
  var headerHeight = $('header').outerHeight(true)-$('[id="k-menu affix"]').outerHeight();
  if(window.scrollY >= headerHeight)
  	{
  		if($('[id="k-menu affix"]').attr('class') == 'k-main-navig')
  		{$('[id="k-menu affix"]').toggleClass('k-main-navig navbar-fixed-top');
    	 
  			$('.navbar-fixed-top').css("background-color" , 'rgba(255, 255, 255, 1)');
    	}

    }  
  else{
  	if($('[id="k-menu affix"]').attr('class') == 'navbar-fixed-top')
  	{$('[id="k-menu affix"]').toggleClass('navbar-fixed-top k-main-navig');
	 $('.k-main-navig').css("background-color" , '#FFFFFF')
	 }
		
	
  }

}
});

var is_small_res = ($(window).width() <= 1040);
var row0 = $('.myrow0navbar')[0];
  if(is_small_res)
  {
    $(row0).css('display','none');
    $('header.myheader').css('margin-top','21px');
  }
  else
  {
    $(row0).css('display','block');
    $('header.myheader').css('margin-top','0px');
  }
console.log(row0);


$('.search-icon').css('margin', '0');

// else {
//  $(".k-main-navig").css("visibility", "hidden");
// }

if($('#menubar > ul').attr('class')!='sideMenu')
$('#menubar > ul').attr('class' , 'sideMenu');

if($('.goog-te-menu-value'))
$('.goog-te-menu-value > span').html('Translate');

});

$(window).resize(function(){

var is_small_res1 = ($(window).width() <= 1040);
var row01 = $('.myrow0navbar')[0];
  if(is_small_res1) 
  {
    $(row01).css('display','none');
    $('header.myheader').css('margin-top','21px');

  }
  else
  {
    $(row01).css('display','block');
    $('header.myheader').css('margin-top','0px');

  }
});
