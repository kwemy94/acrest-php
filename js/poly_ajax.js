// listen for scroll

// var positionElementInPage = $('#container_menu').offset().top;
// $(window).scroll(
// function() {
// if ($(window).scrollTop() >= positionElementInPage) {
// // fixed
// $('#container_menu').addClass("floatable");
// } else {
// // relative
// $('#container_menu').removeClass("floatable");
// }
// }
// );


window.onscroll = function()
{scrollFunction()};

// function scrollFunction(){
// 	if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
// 		// document.getElementById("container_menu").style.padding = "15px 10px";
// 		document.getElementById("en_tete_logo").style.display = "none";
// 	} else {
// 		// document.getElementById("container_menu").style.padding = "40px 10px";
// 		document.getElementById("en_tete_logo").style.fontSize = "35px";
// 	}
// }



function contenu_mobile_batiment(){
	url = "batiment.php";
    request = new XMLHttpRequest();
	request.onreadystatechange = afficher_batiment;           // fonction dans laquelle sera executer le resulta de la requette

	request.open("GET", url);
	request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
	request.send(null);

	// fonction afficher

	function afficher_batiment(){
		if (request.readyState == 4) {
			var emplacement = document.getElementById("contenuMobile");
			var texte = request.responseText;
			emplacement.innerHTML = texte;
		}
	}
}