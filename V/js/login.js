$(function() {
	$('#connection-switch').click(function() {
		$('#connection').show();
		$('#inscription').hide();
	});

	$('#inscription-switch').click(function() {
		$('#connection').hide();
		$('#inscription').show();
	});

	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!
	var yyyy = today.getFullYear();
	if (dd < 10){
        dd = '0' + dd
    } 
    if (mm < 10){
        mm = '0' + mm
    } 
	today = yyyy + '-' + mm + '-' + dd;
	document.getElementById("birthday").setAttribute("max", today);

	$('.refresh-click').click(function() {
		window.location.reload();
	});

	$('#btn-modif').click(function() {
		var btn = $('#btn-modif');
		var div = $('#modif-compte');
		if (btn.html() == "Modifier mes informations") {
			div.slideDown();
			btn.html("Masquer")
		} else {
			div.slideUp();
			btn.html("Modifier mes informations");
		}		
	});

	var optionSelected = '#form-mail';
	$("#choix-modif").change(function() {
		var option = $("#choix-modif option:selected").val();
		$(optionSelected).hide();
		$('#form-' + option).show();
		optionSelected = '#form-' + option;
	});
});