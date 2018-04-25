<!-- Génération automatique des "News" dans le Slider-->
<?php

// On enregistre le nombre de slides du slider
$numberOfTrailerSlides = 6;
?>


<section id="trailers">

    <div class="sectionTitle">
        <h1>TRAILERS</h1>
    </div>

    <div class="content">
       
        <button class="buttonDisable" id="trailersSliderLeftButton" onClick="trailersSliderLeftButton();">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="50px" height="50px" viewBox="0 0 451.847 451.847" style="enable-background:new 0 0 451.847 451.847;"
                 xml:space="preserve">
                <g>
                    <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"/>
                </g>
            </svg>
        </button>

        <div class="trailersSlider">
           
            <div class="trailersSliderWrapper">

                <div class="trailersSlide">
                    <img onClick="openVideoModal(6)" src="assets/images/trailers/trailer_6.jpg">
                </div>
                <input hidden id="video_trailer_6" value="assets/videos/trailer_6">

                <div class="trailersSlide">
                    <img onClick="openVideoModal(5)" src="assets/images/trailers/trailer_5.jpg">
                </div>
                <input hidden id="video_trailer_5" value="assets/videos/trailer_5">

                <div class="trailersSlide">
                    <img onClick="openVideoModal(4)" src="assets/images/trailers/trailer_4.jpg">
                </div>
                <input hidden id="video_trailer_4" value="assets/videos/trailer_4">

                <div class="trailersSlide">
                    <img onClick="openVideoModal(3)" src="assets/images/trailers/trailer_3.jpg">
                </div>
                <input hidden id="video_trailer_3" value="assets/videos/trailer_6">

                <div class="trailersSlide">
                    <img onClick="openVideoModal(2)" src="assets/images/trailers/trailer_2.jpg">
                </div>
                <input hidden id="video_trailer_2" value="assets/videos/trailer_6">

                <div class="trailersSlide">
                    <img onClick="openVideoModal(1)" src="assets/images/trailers/trailer_1.jpg">
                </div>
                <input hidden id="video_trailer_1" value="assets/videos/trailer_6">

            </div>
            
        </div>

        <button id="trailersSliderRightButton" class="<?php if($numberOfTrailerSlides <= 2) {echo "buttonDisable";}?>" onClick="trailersSliderRightButton();">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;" xml:space="preserve">
                <g>
                    <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744   L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284   c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"/>
                </g>
            </svg>
        </button>

        <?php 
        if($numberOfTrailerSlides > 2):
        ?>
        <div class="trailersDotsButtons">
            <?php
            for($i = 1; $i < $numberOfTrailerSlides ;$i++):
            ?>
            <button <?php if($i == 1) {echo "class=\"active\"";}?> id="trailersDotButton<?php echo $i;?>" onClick="trailersDotButton(<?php echo $i;?>);"></button>

            <?php endfor; ?>
        </div>
        <?php endif; ?>

        <!-- Modal -->
        <div id="myModal" class="modal">

            <div class="modal-content">
                <span class="close"><p>&times;</p></span>
                <video id="modalVideo" controls>
                    <source src="" type="video/mp4">
                    Votre navigateur ne supporte pas le tag "video".
                </video>
            </div>

        </div>

    </div>

</section>


<script src="assets/js/trailers.js"></script>
<?php require_once ("functions.php")?>