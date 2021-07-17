$(function(){
	console.log("Brow - " + navigator.userAgent);

	$(".selectable").on("click", function() {
		if( $('.selectable:checked').length == 0) {
			$("#btnSvCkie").text("Aceitar todos os cookies");
		} else {
			$("#btnSvCkie").text("Salvar e Fechar");
		}
	});

	$("#btnSvCkie").on("click", function() {

		var ga = "false";
		var fb = "false";

		if($('#chkAnl:checked').length > 0) {
			ga = "true";
			dataLayer.push({
				'event': 'ativar-gacookies'
			   });
		} 
		if($('#chkMkt:checked').length > 0) {
			fb = "true";
			dataLayer.push({
				'event': 'ativar-fbcookies'
			   });
		}
		if($('#chkAnl:checked').length == 0 && $('#chkMkt:checked').length == 0) {
			dataLayer.push({
				'event': 'ativar-gacookies'
			   });
			dataLayer.push({
				'event': 'ativar-fbcookies'
			   });
			ga = "true";
			fb = "true";
		}
		//$.post(templateUrl+"/assets/sys/set_session.php",
		$.post("https://www.jogamais/wp-content/themes/bootstrap/assets/sys/set_session.php",
		
			{ role: "enable", ativaga: ga, ativafb: fb });
		$("#cookieBanner").fadeOut(750);
	});

	$("#btnRjCkie").on("click", function() {
		$("#cookieBanner").fadeOut(750);
		deleteAllCookies();
		//$.post(templateUrl+"/assets/sys/set_session.php",
		$.post("https://www.jogamais/wp-content/themes/bootstrap/assets/sys/set_session.php",
			{ role: "enable", ativaga: "false", ativafb: "false" });
	});
});

function deleteAllCookies() {
    var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        var eqPos = cookie.indexOf("=");
        var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
}

function ativaGA() {
	dataLayer.push({
		'event': 'ativar-gacookies'
	   });
}

function ativaFB() {
	dataLayer.push({
		'event': 'ativar-fbcookies'
	   });
}