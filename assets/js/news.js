// Variables utilisées pour le Slider :
var canUseSliderButtons = true;
var currentNewsSliderPosition = 1;
var maxNewsSliderPosition = $('#news .newsSlider .newsSlide').length - 1;
var newsSliderAnimationDuration = 1200;


function newsSliderLeftButton() {

    if( !(currentNewsSliderPosition === 1) && (canUseSliderButtons === true) ) {

        canUseSliderButtons = false;
        // On augmente la valeur de currentNewsSliderPosition de 1
        currentNewsSliderPosition -= 1;

        // On décalle le slider d'un rang vers la gauche
        $(".newsSliderWrapper").animate({marginLeft:'+=440px'}, newsSliderAnimationDuration);

        // Retrait de l'ancien DotButton actif, et ajout du nouveau
        $(".newsDotsButtons .active").removeClass("active");
        $("#newsDotButton"+(currentNewsSliderPosition)).addClass("active");

        // Désactive le dotButton actuel, et réactive les autres
        document.querySelectorAll(".newsDotsButtons button").forEach(function(element){
            element.removeAttribute("disabled");
        }); document.querySelector("#newsDotButton"+currentNewsSliderPosition).setAttribute("disabled", "");

        // On désactive le bouton gauche si jamais on est sur la première slide
        if(currentNewsSliderPosition === 1) {
            $("#newsSliderLeftButton").addClass('buttonDisable');
        }

        // On réactive le bouton droit
        $("#newsSliderRightButton").removeClass('buttonDisable');

        // On réactive le clic sur les boutons après une durée définie
        window.setTimeout(function() {
            canUseSliderButtons = true;
        }, newsSliderAnimationDuration);

    }
}


function newsSliderRightButton() {

    if( ( !(currentNewsSliderPosition === maxNewsSliderPosition) ) && (canUseSliderButtons === true) ) {

        canUseSliderButtons = false;
        // On augmente la valeur de currentNewsSliderPosition de 1
        currentNewsSliderPosition += 1;

        // On décalle le slider d'un rang vers la gauche
        $(".newsSliderWrapper").animate({marginLeft:'-=440px'}, newsSliderAnimationDuration);

        // Retrait de l'ancien DotButton actif, et ajout du nouveau
        $(".newsDotsButtons .active").removeClass("active");
        $("#newsDotButton"+currentNewsSliderPosition).addClass("active");

        // Désactive le DotButton actuel, et réactive les autres
        document.querySelectorAll(".newsDotsButtons button").forEach(function(element){
            element.removeAttribute("disabled");
        }); document.querySelector("#newsDotButton"+currentNewsSliderPosition).setAttribute("disabled", "");

        // On désactive le bouton droit si jamais on est sur la dernière slide
        if(currentNewsSliderPosition === maxNewsSliderPosition) {
            $("#newsSliderRightButton").addClass('buttonDisable');
        }

        // On réactive le bouton gauche
        $("#newsSliderLeftButton").removeClass('buttonDisable');

        // On réactive le clic sur les boutons après une durée définie
        window.setTimeout(function() {
            canUseSliderButtons = true;
        }, newsSliderAnimationDuration);

    }
}


function newsDotButton(number) {

    if( (canUseSliderButtons === true) && !(number === currentNewsSliderPosition) ) {

        canUseSliderButtons = false;

        // Retrait de l'ancien Dotbutton actif, et ajout du nouveau
        $(".newsDotsButtons .active").removeClass("active");
        $("#newsDotButton"+number).addClass("active");

        // Désactive le dotButton actuel, et réactive les autres
        document.querySelectorAll(".newsDotsButtons button").forEach(function(element){
            element.removeAttribute("disabled");
        });
        document.querySelector("#newsDotButton"+number).setAttribute("disabled", "");

        // On décalle le slider d'autant de rang que nécessaire vers la droite ou la gauche.
        var moveLenght;
        if(number > currentNewsSliderPosition) {
            moveLenght = '-=' +(440*(number - currentNewsSliderPosition)) +'px';
        } else {
            moveLenght = '+=' +(440*(currentNewsSliderPosition - number)) +'px';
        }
        $(".newsSliderWrapper").animate({marginLeft:moveLenght}, newsSliderAnimationDuration);

        // On set la valeur de currentNewsSliderPosition à number
        currentNewsSliderPosition = number;

        // On désactive le bouton droit si jamais on est sur la dernière slide
        if(currentNewsSliderPosition === maxNewsSliderPosition) {
            $("#newsSliderRightButton").addClass('buttonDisable');
            $("#newsSliderLeftButton").removeClass('buttonDisable');
        } 
        // On désactive le bouton gauche si jamais on est sur la première slide
        if(currentNewsSliderPosition === 1) {
            $("#newsSliderLeftButton").addClass('buttonDisable');
            $("#newsSliderRightButton").removeClass('buttonDisable');
        } 
        // Sinon, on réactive les deux boutons
        if( !(currentNewsSliderPosition === maxNewsSliderPosition) && !(currentNewsSliderPosition === 1)){
            $("#newsSliderRightButton").removeClass('buttonDisable');
            $("#newsSliderLeftButton").removeClass('buttonDisable');
        }

        // On réactive le clic sur les boutons après une durée définie
        window.setTimeout(function() {
            canUseSliderButtons = true;
        }, newsSliderAnimationDuration);
    }
}


function newsSliderAutoLoop() {

}


$( document ).ready(function() {

    console.log("Fichier news.php chargé");
});

function redirectTo(url){
  document.location.href=url; 
}