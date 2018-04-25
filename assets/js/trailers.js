
// Variables utilisées pour le Slider :
var canUseSliderButtons = true;
var currentTrailersSliderPosition = 1;
var maxTrailersSliderPosition = $('.trailersSlide').length - 1;
var trailersSliderAnimationDuration = 1200;


function trailersSliderLeftButton() {

    if( !(currentTrailersSliderPosition === 1) && (canUseSliderButtons === true) ) {

        canUseSliderButtons = false;
        // On augmente la valeur de currentTrailersSliderPosition de 1
        currentTrailersSliderPosition -= 1;

        // On décalle le slider d'un rang vers la gauche
        $(".trailersSliderWrapper").animate({marginLeft:'+=440px'}, trailersSliderAnimationDuration);

        // Retrait de l'ancien DotButton actif, et ajout du nouveau
        $(".trailersDotsButtons .active").removeClass("active");
        $("#trailersDotButton"+(currentTrailersSliderPosition)).addClass("active");

        // Désactive le dotButton actuel, et réactive les autres
        document.querySelectorAll(".trailersDotsButtons button").forEach(function(element){
            element.removeAttribute("disabled");
        }); document.querySelector("#trailersDotButton"+currentTrailersSliderPosition).setAttribute("disabled", "");

        // On désactive le bouton gauche si jamais on est sur la première slide
        if(currentTrailersSliderPosition === 1) {
            $("#trailersSliderLeftButton").addClass('buttonDisable');
        }

        // On réactive le bouton droit
        $("#trailersSliderRightButton").removeClass('buttonDisable');

        // On réactive le clic sur les boutons après une durée définie
        window.setTimeout(function() {
            canUseSliderButtons = true;
        }, trailersSliderAnimationDuration);

    }
}


function trailersSliderRightButton() {

    if( ( !(currentTrailersSliderPosition === maxTrailersSliderPosition) ) && (canUseSliderButtons === true) ) {

        canUseSliderButtons = false;
        // On augmente la valeur de currentTrailersSliderPosition de 1
        currentTrailersSliderPosition += 1;

        // On décalle le slider d'un rang vers la gauche
        $(".trailersSliderWrapper").animate({marginLeft:'-=440px'}, trailersSliderAnimationDuration);

        // Retrait de l'ancien DotButton actif, et ajout du nouveau
        $(".trailersDotsButtons .active").removeClass("active");
        $("#trailersDotButton"+currentTrailersSliderPosition).addClass("active");

        // Désactive le DotButton actuel, et réactive les autres
        document.querySelectorAll(".trailersDotsButtons button").forEach(function(element){
            element.removeAttribute("disabled");
        }); document.querySelector("#trailersDotButton"+currentTrailersSliderPosition).setAttribute("disabled", "");

        // On désactive le bouton droit si jamais on est sur la dernière slide
        if(currentTrailersSliderPosition === maxTrailersSliderPosition) {
            $("#trailersSliderRightButton").addClass('buttonDisable');
        }

        // On réactive le bouton gauche
        $("#trailersSliderLeftButton").removeClass('buttonDisable');

        // On réactive le clic sur les boutons après une durée définie
        window.setTimeout(function() {
            canUseSliderButtons = true;
        }, trailersSliderAnimationDuration);

    }
}


function trailersDotButton(number) {

    if( (canUseSliderButtons === true) && !(number === currentTrailersSliderPosition) ) {

        canUseSliderButtons = false;

        // Retrait de l'ancien Dotbutton actif, et ajout du nouveau
        $(".trailersDotsButtons .active").removeClass("active");
        $("#trailersDotButton"+number).addClass("active");

        // Désactive le dotButton actuel, et réactive les autres
        document.querySelectorAll(".trailersDotsButtons button").forEach(function(element){
            element.removeAttribute("disabled");
        });
        document.querySelector("#trailersDotButton"+number).setAttribute("disabled", "");

        // On décalle le slider d'autant de rang que nécessaire vers la droite ou la gauche.
        var moveLenght;
        if(number > currentTrailersSliderPosition) {
            moveLenght = '-=' +(440*(number - currentTrailersSliderPosition)) +'px';
        } else {
            moveLenght = '+=' +(440*(currentTrailersSliderPosition - number)) +'px';
        }
        $(".trailersSliderWrapper").animate({marginLeft:moveLenght}, trailersSliderAnimationDuration);

        // On set la valeur de currentTrailersSliderPosition à number
        currentTrailersSliderPosition = number;

        // On désactive le bouton droit si jamais on est sur la dernière slide
        if(currentTrailersSliderPosition === maxTrailersSliderPosition) {
            $("#trailersSliderRightButton").addClass('buttonDisable');
            $("#trailersSliderLeftButton").removeClass('buttonDisable');
        } 
        // On désactive le bouton gauche si jamais on est sur la première slide
        if(currentTrailersSliderPosition === 1) {
            $("#trailersSliderLeftButton").addClass('buttonDisable');
            $("#trailersSliderRightButton").removeClass('buttonDisable');
        } 
        // Sinon, on réactive les deux boutons
        if( !(currentTrailersSliderPosition === maxTrailersSliderPosition) && !(currentTrailersSliderPosition === 1)){
            $("#trailersSliderRightButton").removeClass('buttonDisable');
            $("#trailersSliderLeftButton").removeClass('buttonDisable');
        }

        // On réactive le clic sur les boutons après une durée définie
        window.setTimeout(function() {
            canUseSliderButtons = true;
        }, trailersSliderAnimationDuration);
    }
}




// Initialisation des boutons 
$( document ).ready(function() {

    console.log("Fichier trailers.php chargé");

});

// MODAL --------------------------------------------------------------------------------------------------------------
var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close")[0];

function openVideoModal(videoId) {

    modal.style.display = "block";

    $videoUrl = document.getElementById("video_trailer_"+videoId).getAttribute("value");
    document.getElementById("modalVideo").setAttribute("src", $videoUrl);

}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
} 
