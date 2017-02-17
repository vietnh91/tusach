
$(document).ready(function() {
	$("#subscribe").submit(function() {		
		$.ajax({
			type: "POST",
			url: 'subscribe',
			data:$("#subscribe").serialize(),
			success: function (data) {	
				$(".message").html("Bạn đăng ký nhận email");
			$('#results').html(data);
			},
			error: function(jqXHR, text, error){  
			}
		});
		return false;
	});

	$(".tab-links > li > a").hover(function(){
		var link = $(this);
		var attr = link.attr("data-gift");
		if (attr) {
			$(".tab-content li").hide();
			var items = attr.split(",");
			for (i = 0; i < items.length; i++) { 
				console.log(items[i]);
				$(".tab-content li:eq(" + items[i] + ")").show();
			}	
		}
	});
	load_image();

	$('input[type="radio"]').change(function (){
		var value = $(this).val();
		
		if(value == 0 )
		{
			$('#recipient_name').fadeOut();
			$('#description').fadeOut();
			$('#recipient_address').fadeIn();
			$('#email').fadeOut();
		}
		if(value == 1 )
		{
			$('#recipient_name').fadeIn();
			$('#recipient_address').fadeIn();
			$('#description').fadeIn();
			$('#email').fadeOut();
		}
		if(value == 2 )
		{
			$('#recipient_name').fadeOut();
			$('#recipient_address').fadeOut();
			$('#description').fadeOut();
			$('#email').fadeOut();
		}
		if(value == 3 )
		{
			$('#recipient_name').fadeOut();
			$('#recipient_address').fadeOut();
			$('#description').fadeOut();
			$('#email').fadeIn();
		}
	});

	$(".tab-links > li > a").click(function(){
		$(".tab-links > li > div").hide();
		$(this).next().fadeIn();
	});

});

function load_image()
{
	var height = $(window).width();
	if(height > 1000)
		row = 4;
	else if(height > 480 && height < 1000)
		row = 5;
	else
		row = 10;
	var column = "";
	
	var output = "";
	for( i = 0; i < 10; i++)
	{
		column += "<div class=\"img-tho\"><img src=\"/img/Tho-" + (i+1) + ".png\" /></div>";
		if( (row != 4 && (i + 1)%row==0 && i > 0) || (row == 4 && i%3==0 && i > 0))
		{
			output += "<div class=\"column-"+row+"\">" + column + "</div>";
			column = "";
		}
	}
	output += "<div class=\"column-"+row+"\">" + column + "</div>";
	$(".tho").append(output);
}