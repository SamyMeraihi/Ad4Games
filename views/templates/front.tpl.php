<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="CMS Ad4Games">
        <meta name="author" content="Samy MERAIHI">

        <!-- Link CSS -->
        <link href="<?php echo DIRNAME;?>public/css/styleFront.css" rel="stylesheet">

        <!-- Javascript / Jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    </head>

    <body>
        <header>

            <nav class="navigation">

                <button type="button" onClick="navigationButtonScrollTo('accueil');"><p>Index</p></button>
                <button type="button" onClick="navigationButtonScrollTo('news');"><p>News</p></button>
                <button type="button" onClick="navigationButtonScrollTo('trailers');"><p>Trailers</p></button>
                <button type="button" onClick="navigationButtonScrollTo('introduction');"><p>Introduction</p></button>
                <button type="button" onClick="navigationButtonScrollTo('gameplays');"><p>Gameplays</p></button>

                <button type="button" onClick="redirectTo('pages/forum.php');"><p>Forum</p></button>
            </nav>

        </header>

        <div class="mainContentPanel">
            <?php include "views/".$this->v;?> 
        </div>

        <footer>


            <div class="socialMedias">
                <div class="text">
                    <p>Consultez ici les dernières informations</p>
                </div>
                <div class="icons">
                    <p>Médias sociaux</p>
                    <div class="iconsChart">
                        <svg width="45px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
                            <g>
                                <path id="Facebook__x28_alt_x29_" d="M90,15.001C90,7.119,82.884,0,75,0H15C7.116,0,0,7.119,0,15.001v59.998   C0,82.881,7.116,90,15.001,90H45V56H34V41h11v-5.844C45,25.077,52.568,16,61.875,16H74v15H61.875C60.548,31,59,32.611,59,35.024V41   h15v15H59v34h16c7.884,0,15-7.119,15-15.001V15.001z" fill="#FFFFFF"/>
                            </g>
                        </svg>

                        <svg width="45px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;" xml:space="preserve">
                            <g>
                                <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752   c17.455,0,31.656,14.201,31.656,31.655V122.407z" fill="#FFFFFF"/>
                                <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" fill="#FFFFFF"/>
                                <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78   C135.661,29.421,132.821,28.251,129.921,28.251z" fill="#FFFFFF"/>
                            </g>

                        </svg>

                        <svg width="45px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
                            <g>
                                <path id="YouTube__x28_alt_x29_" d="M90,26.958C90,19.525,83.979,13.5,76.55,13.5h-63.1C6.021,13.5,0,19.525,0,26.958v36.084   C0,70.475,6.021,76.5,13.45,76.5h63.1C83.979,76.5,90,70.475,90,63.042V26.958z M36,60.225V26.33l25.702,16.947L36,60.225z" fill="#FFFFFF"/>
                            </g>
                        </svg>

                        <svg width="45px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 430.117 430.117" style="enable-background:new 0 0 430.117 430.117;" xml:space="preserve">
                            <g>
                                <path id="Twitter__x28_alt_x29_" d="M381.384,198.639c24.157-1.993,40.543-12.975,46.849-27.876   c-8.714,5.353-35.764,11.189-50.703,5.631c-0.732-3.51-1.55-6.844-2.353-9.854c-11.383-41.798-50.357-75.472-91.194-71.404   c3.304-1.334,6.655-2.576,9.996-3.691c4.495-1.61,30.868-5.901,26.715-15.21c-3.5-8.188-35.722,6.188-41.789,8.067   c8.009-3.012,21.254-8.193,22.673-17.396c-12.27,1.683-24.315,7.484-33.622,15.919c3.36-3.617,5.909-8.025,6.45-12.769   C241.68,90.963,222.563,133.113,207.092,174c-12.148-11.773-22.915-21.044-32.574-26.192   c-27.097-14.531-59.496-29.692-110.355-48.572c-1.561,16.827,8.322,39.201,36.8,54.08c-6.17-0.826-17.453,1.017-26.477,3.178   c3.675,19.277,15.677,35.159,48.169,42.839c-14.849,0.98-22.523,4.359-29.478,11.642c6.763,13.407,23.266,29.186,52.953,25.947   c-33.006,14.226-13.458,40.571,13.399,36.642C113.713,320.887,41.479,317.409,0,277.828   c108.299,147.572,343.716,87.274,378.799-54.866c26.285,0.224,41.737-9.105,51.318-19.39   C414.973,206.142,393.023,203.486,381.384,198.639z" fill="#FFFFFF"/>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="infos">
                <div class="text1">
                    <p>Monster Hunter: World</p>
                    <br>
                    <p>Plateformes : Ps4 . Xbox One, PC (Printemps 2018, date exacte non-dévoilée)</p>
                    <br>
                    <p>Date de sortie : disponible !</p>
                </div>
                <div class="text2">
                    <p>1 (4 joueurs maximum pour le mode multijoueur en ligne)</p>
                    <br>
                    <p>Genre : Action / Jeu de rôle</p>
                </div>
                <div class="classification">
                    <img class="age" src="assets/images/pegi/pegi_16.png">
                    <img class="content" src="assets/images/pegi/pegi_scary.png">
                    <img class="content" src="assets/images/pegi/pegi_violence.png">
                </div>
            </div>

            <div class="trademarks">
                <img height="28" src="assets/images/platforms/psf_logo.png">
                <img height="17" src="assets/images/platforms/ps4_logo.png">
                <img height="27" src="assets/images/platforms/xboxone_logo.png">
            </div>


        </footer>
    </body>
</html>