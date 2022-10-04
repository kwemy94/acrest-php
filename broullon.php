<div class="container-fluit" id="container_tech">
	<?php 
	    include("aquaculture.php"); 
	    include("production_animale.php") ;
	    include("production_vegetale.php");

	    include("hydraulique_traitement_eau.php");

	    include("gestion_environnement.php");

	    include("electrotechnique.php");
        include("energie_renouvelable.php");

        include("batiment.php");
        include("travaux_public.php"); 
        include("urbanisme.php");
        include("menusierie.php");

        include("industrie_alimentaire.php");

        include("construction_metallique.php");
        include("mecanique_electronique_auto.php");
        include("fabrication_mecanique.php");

        include("marketing_com_vente.php");

        include("comptabilite.php");
        include("gestion_projet.php");
        include("logistique.php");
        include('microfinance.php');
        include("g_collectivite_terrictoriales.php");

        include("industrie_textile.php");

        include("sage_femme.php");
        include("odontostomatologie.php");

        include("genie_logiciel.php");
        include("maintenance_info.php");
	 ?>
</div>



<?php
include("lien_en_tete.php");
include("en_tete.php");
include('menu.php');
?>

<div class="container-fluit" id="container_tech">
        
</div>

<?php include("footer.php"); ?>


html, body {height:100%;margin:0;}
#GrandeIntro {height:100%;background:url(http://www.hdwallpapersplus.com/wp-content/uploads/2012/10/Opera-Background-Blue-Swirls1.jpg) no-repeat;background-size:cover;}
#siteWrapper {margin-top:-80px;}
#siteWrapper header {height:80px;background:#000;}
#siteWrapper header.fixed {position:fixed;width:100%;top:0;left:0;}
#content {padding:60px 0;background:#0c9;}
#siteWrapper header.fixed+#content {margin-top:80px;}
#content div {width:80%;height:1500px;margin:auto;border:solid;}




function contenu_mobile_tic(){
        url = "specialites/tic.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_tic;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_tic(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_sante(){
        url = "specialites/sante.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_sante;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_sante(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_culture(){
        url = "specialites/art_culture.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_culture;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_culture(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_gestion(){
        url = "specialites/gestion.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_gestion;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_gestion(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_com_vente(){
        url = "specialites/com_vente.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_com_vente;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_com_vente(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_g_meca(){
        url = "specialites/geni_meca.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_meca;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_meca(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_g_biologique(){
        url = "specialites/genie_biologique.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_biologique;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_biologique(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_g_civil(){
        url = "specialites/genie_civil.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_civil;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_civil(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_g_electrique(){
        url = "specialites/genie_elect.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_electrique;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_electrique(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_science_env(){
        url = "specialites/science_env.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_env;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_env(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_metier_eau(){
        url = "specialites/metier_eau.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_eau;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_eau(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_agriculture(){
        url = "specialites/agriculture.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_agriculture;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_agriculture(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************