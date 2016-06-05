$(document).ready(function()
{
	if (($(window).width()) >= 1001)
	{
		if (window.scrollY >= 143)
		{
			if ($('[id="k-menu affix"]').attr('class') == 'k-main-navig')
			{
				$('[id="k-menu affix"]').toggleClass('k-main-navig navbar-fixed-top');

				$('.navbar-fixed-top').css("background-color", 'rgba(255, 255, 255, 1)');
			}

		}
		else
		{
			if ($('[id="k-menu affix"]').attr('class') == 'navbar-fixed-top')
			{
				$('[id="k-menu affix"]').toggleClass('navbar-fixed-top k-main-navig');
				$('.k-main-navig').css("background-color", '#FFFFFF')
			}


		}
		$('.search-icon').css('margin', '0');

	}

});
$(document).scroll(function scroll_fix_nav()
{

	if (($(window).width()) >= 1001)
	{
		if (window.scrollY >= 143)
		{
			if ($('[id="k-menu affix"]').attr('class') == 'k-main-navig')
			{
				$('[id="k-menu affix"]').toggleClass('k-main-navig navbar-fixed-top');

				$('.navbar-fixed-top').css("background-color", 'rgba(255, 255, 255, 1)');
			}

		}
		else
		{
			if ($('[id="k-menu affix"]').attr('class') == 'navbar-fixed-top')
			{
				$('[id="k-menu affix"]').toggleClass('navbar-fixed-top k-main-navig');
				$('.k-main-navig').css("background-color", '#FFFFFF')
			}


		}

	}
});
