// Controls SVG separator styling between header and main blocks
$(function() 
{
	if($('#banner').length) 
	{
		$(".separator-container").first().css({"position": "absolute"});
		$(".separator").first().css({"display": "block"});
	}
	else
	{
		$(".separator").first().css({"display": "block"});
	}
})