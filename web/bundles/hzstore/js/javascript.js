$(function(){
	$(".assign_tech").click(function(){
		$(".tech-list").hide();
		var tar = $(this).parent().find(".tech-list");
		if(tar.data("show")){
			tar.hide();
			tar.data("show",false);
		}
		else{
			tar.show();
			tar.data("show",true);
		}
	});

	
});