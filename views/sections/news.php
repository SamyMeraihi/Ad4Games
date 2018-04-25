<!-- Génération automatique des "News" dans le Slider-->
<?php
// On enregistre le nombre de slides du slider
$numberOfNewsSlides = 5;
?>

<section id="news">

    <div class="sectionTitle">
        <h1>NEWS</h1>
    </div>

    <div class="content">
        <button id="newsSliderLeftButton" class="buttonDisable" onClick="newsSliderLeftButton();">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="50px" height="50px" viewBox="0 0 451.847 451.847" style="enable-background:new 0 0 451.847 451.847;"
                 xml:space="preserve">
                <g>
                    <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"/>
                </g>
            </svg>
        </button>

        <div class="newsSlider">
            <div class="newsSliderWrapper">

                <div class="newsSlide" onClick="redirectTo('pages/singleNews.php');">

                    <div class="newsImage">
                        <img src="assets/images/news/news_1.jpg">
                    </div>

                    <div class="newsText">
                        <p>5 millions de jeux vendus ! Cadeau de célébration : Pack d'objets "5 millions"</p>
                    </div>

                </div>

                <div class="newsSlide">

                    <div class="newsImage">
                        <img src="assets/images/news/news_2.jpg">
                    </div>

                    <div class="newsText">
                        <p>Evènement en collaboration avec Street Fighter V pour Monster Hunter: World sur Ps4 exclusivement !</p>
                    </div>

                </div>

                <div class="newsSlide">

                    <div class="newsImage">
                        <img src="assets/images/news/news_3.jpg">
                    </div>

                    <div class="newsText">
                        <p>MISE A JOUR GRATUITE - Le Devil Joh arrive !</p>
                    </div>

                </div>

                <div class="newsSlide">

                    <div class="newsImage">
                        <img src="assets/images/news/news_4.jpg">
                    </div>

                    <div class="newsText">
                        <p>Mega Man arrive dans Monster Hunter : World !</p>
                    </div>

                </div>

                <div class="newsSlide">

                    <div class="newsImage">
                        <img src="assets/images/news/news_5.jpg">
                    </div>

                    <div class="newsText">
                        <p>Retrouvez l'univers de Horizon Dawn dans Monster Hunter : World sur Ps4 !</p>
                    </div>

                </div>

            </div>
        </div>

        <button id="newsSliderRightButton" class="<?php if($numberOfNewsSlides <= 2) {echo "buttonDisable";}?>" onClick="newsSliderRightButton();">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;" xml:space="preserve">
                <g>
                    <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744   L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284   c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"/>
                </g>
            </svg>
        </button>

        <?php 
        if($numberOfNewsSlides > 2):
        ?>
        <div class="newsDotsButtons">
            <?php
            for($i = 1; $i < $numberOfNewsSlides ;$i++):
            ?>
            <button <?php if($i == 1) {echo "class=\"active\"";}?> id="newsDotButton<?php echo $i;?>" onClick="newsDotButton(<?php echo $i;?>);"></button>
            <?php endfor; ?>
        </div>
        <?php endif; ?>
    </div>

</section>


<script src="assets/js/news.js"></script>
<?php require_once ("functions.php")?>