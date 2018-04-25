<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="CMS Ad4Games">
        <meta name="author" content="MERAIHI Samy">

        <title>Ad4Games - BackOffice</title>

        <!-- Lien CSS -->
        <link href="<?php echo DIRNAME;?>public/css/styleBack.css" rel="stylesheet">

    </head>

    <body>  
        <header>

            <div class="logo" onclick="location.href = '<?php echo DIRNAME?>back';">
                <div class="square"></div>
                <h1>ESPACE ADMIN</h1>
            </div>
            <nav class="controllerMenu">          
                <li>
                    <a target="_blank" href="<?php echo DIRNAME;?>">Home FrontOffice</a>
                </li>
                <li>
                    <a href="<?php echo DIRNAME;?>user">Les utilisateurs</a>
                </li>

                <?php if( isset($_SESSION['connexionAdmin']) ):?>
                <li style="margin-left: auto">
                    <a href="<?php echo DIRNAME;?>back/logout">Se déconnecter</a>
                </li>
                <?php else: ?>

                <p>Vous n'etes pas connecté</p>
                <?php endif; ?>
            </nav>
        </header>

        <div id="mainContainer">
            <!-- Left Column -->
            <div id="leftPanel">

                <div class="mobile-menu-icon">
                    <i class="fa fa-bars"></i>
                </div>
                <nav class="actionMenu">     

                    <?php 
                    // Récupérer toutes les actions possibles de la classe active contenue dans $c (ex : UserController)
                    // Pour chacune d'entres elles, afficher la <li> associée.
                    if(file_exists("controllers/".$c.".class.php")){
                        if( class_exists($c) ){

                            $objC = new $c();

                            foreach(get_class_methods($objC) as $action => $key) {
                                if( !strstr($key, "index") && strstr($key, "Action")) {
                                    echo '
                                        <li>
                                            <a href="'.DIRNAME.strtolower(str_replace('Controller', '', $c)).'/'.strtolower(str_replace('Action', '', $key)).'">'.$key.'</a>
                                        </li>
                                    ';
                                }
                            }
                        }
                    }
                    ?>

                </nav>

            </div>

            <!-- Right Column -->
            <div id="rightPanel">
                <?php            
                include "views/".$this->v;
                ?>
            </div>
        </div>

        <footer class="text-center">
            <p>Copyright &copy; 2017-2018 Ad4Games</p>
        </footer>         

    </body>
</html>