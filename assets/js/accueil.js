$(document).ready(function() {

    console.log("Fichier index.js chargé");

});


var canUseNavigation = true;
function navigationButtonScrollTo(sectionName) {

    if(canUseNavigation == true) {

        canUseNavigation = false;

        $('html, body').animate({
            scrollTop: $("#"+sectionName).offset().top - 60
        }, 1000);

        window.setTimeout(function() {
            canUseNavigation = true;
        }, 1000);
    }
}


function buyButton() {

    alert("Ce bouton n'est encore fonctionnel.")

}

function redirectTo(url){
  document.location.href=url; 
}