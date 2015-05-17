$(document).ready(function() {
	$(".search input").click(function() {
		$(".search div").show();
	});
	$(".search").blur(function() {
		$(".search div").hide();
	});
	
	$(".find-help-link").on("click",function(e){
		e.preventDefault();
		
		var textInput = $(this).text();
		$("#findhelpinp").val(textInput);
	});
});

