$("#submit").click(function(){ 
	 
	
	$.post($(".signup-form").attr("action"), 
	         $(".signup-form :input").serializeArray(),
			 function(info) {
				 
				 $(".signup").empty();
				 $(".signup").html(info);
				  clear();
				 }); 
			
			$(".signup-form").submit(function(){
				return false;
			});
});

function clear(){
    $(".signup-form :input").each( function() {
		$(this).val("");
	});
}