$(function() {
	$("#dev").click(function() {
		if ($("#dev").html() == "Voir tout") {
			$("#load-dev").toggle();
			$("#load-dev").toggle();
			$(".notImp").toggle();
			$("#dev").html("Masquer");
		} else {
			$(".notImp").toggle();
			$("#dev").html("Voir tout");
		}
	});
});