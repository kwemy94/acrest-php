/*
Le contenu de ce fichier permet d'afficher les spécilités relative à un choix de filière
*/
var url;
var request;

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
            var emplacement = document.getElementById("specialites_mobile_1");
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
            var emplacement = document.getElementById("specialites_mobile_1");
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
            var emplacement = document.getElementById("specialites_mobile_1");
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
            var emplacement = document.getElementById("specialites_mobile_1");
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
            var emplacement = document.getElementById("specialites_mobile_1");
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
            var emplacement = document.getElementById("specialites_mobile_1");
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
            var emplacement = document.getElementById("specialites_mobile_1");
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
            var emplacement = document.getElementById("specialites_mobile_1");
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
            var emplacement = document.getElementById("specialites_mobile_1");
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
            var emplacement = document.getElementById("specialites_mobile_1");
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
            var emplacement = document.getElementById("specialites_mobile_1");
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
            var emplacement = document.getElementById("specialites_mobile_1");
            var texte = request.responseText;
            emplacement.innerHTML = texte;
        }
    }
}

// ********************************************************************************************



/******************************************************
**                                                  ***
**        choix de la 2e Spécialité                 ***
******************************************************/


function contenu_mobile_tic1(){
        url = "specialites/sp2/tic.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_tic;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_tic(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_2");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_sante1(){
        url = "specialites/sp2/sante.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_sante;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_sante(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_2");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_culture1(){
        url = "specialites/sp2/art_culture.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_culture;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_culture(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_2");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_gestion1(){
        url = "specialites/sp2/gestion.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_gestion;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_gestion(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_2");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_com_vente1(){
        url = "specialites/sp2/com_vente.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_com_vente;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_com_vente(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_2");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_g_meca1(){
        url = "specialites/sp2/geni_meca.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_meca;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_meca(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_2");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_g_biologique1(){
        url = "specialites/sp2/genie_biologique.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_biologique;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_biologique(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_2");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_g_civil1(){
        url = "specialites/sp2/genie_civil.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_civil;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_civil(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_2");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_g_electrique1(){
        url = "specialites/sp2/genie_elect.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_electrique;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_electrique(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_2");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_science_env1(){
        url = "specialites/sp2/science_env.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_env;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_env(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_2");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_metier_eau1(){
        url = "specialites/sp2/metier_eau.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_eau;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_eau(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_2");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_agriculture1(){
        url = "specialites/sp2/agriculture.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_agriculture;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_agriculture(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_2");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************



/******************************************************
**                                                  ***
**        choix de la 3e Spécialité                 ***
******************************************************/


function contenu_mobile_tic3(){
        url = "specialites/sp3/tic.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_tic;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_tic(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_3");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_sante3(){
        url = "specialites/sp3/sante.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_sante;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_sante(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_3");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_culture3(){
        url = "specialites/sp3/art_culture.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_culture;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_culture(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_3");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_gestion3(){
        url = "specialites/sp3/gestion.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_gestion;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_gestion(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_3");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_com_vente3(){
        url = "specialites/sp3/com_vente.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_com_vente;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_com_vente(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_3");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_g_meca3(){
        url = "specialites/sp3/geni_meca.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_meca;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_meca(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_3");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_g_biologique3(){
        url = "specialites/sp3/genie_biologique.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_biologique;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_biologique(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_3");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_g_civil3(){
        url = "specialites/sp3/genie_civil.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_civil;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_civil(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_3");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_g_electrique3(){
        url = "specialites/sp3/genie_elect.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_electrique;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_electrique(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_3");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_science_env3(){
        url = "specialites/sp3/science_env.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_env;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_env(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_3");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_metier_eau3(){
        url = "specialites/sp3/metier_eau.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_eau;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_eau(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_3");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************

function contenu_mobile_agriculture3(){
        url = "specialites/sp3/agriculture.html";
    request = new XMLHttpRequest();
        request.onreadystatechange = afficher_specialites_agriculture;           // fonction dans laquelle sera executer le resulta de la requette

        request.open("GET", url);
        request.setRequestHeader("Content-Type", "text/plain/; charset=Utf-8");
        request.send(null);

        // fonction afficher

        function afficher_specialites_agriculture(){
                if (request.readyState == 4) {
                        var emplacement = document.getElementById("specialites_mobile_3");
                        var texte = request.responseText;
                        emplacement.innerHTML = texte;
                }
        }
}

// ********************************************************************************************