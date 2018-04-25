<form method="" action="">

    <input type="text" placeholder="Email" name="email"
           required><br>
    <input type="text" placeholder="Password" name="pwd"
           required><br>
    <input type="submit" value="Se connecter">

</form>

<?php

extract($params['GET']);
if(!empty($params['GET'])) {

    $bdd = new BaseSql();
    $requete = $bdd->pdo->prepare("SELECT * FROM user WHERE email = :email");
    $requete->bindValue(":email", $email, PDO::PARAM_STR);
    $requete->execute();

    if($reponse = $requete->fetch()) {
        if(password_verify($pwd, $reponse['pwd'])) {

            $_SESSION['connexionAdmin'] = true;
            $_SESSION['prenom'] = $reponse['first_name'];
            $_SESSION['nom'] = $reponse['last_name'];
            $_SESSION['email'] = $reponse['email'];

            //Redirection vers la page principale du backoffice
            echo "<br>Vous êtes connecté !";
            echo "<br>Bienvenue, ".$_SESSION['prenom']." ".$_SESSION['nom'];
            echo "Valeur de \$_SESSION['connexionAdmin'] : ".$_SESSION['connexionAdmin'];
            
            // Redirection vers la homepage du back
            header("Refresh:0");
            
        } else {
            echo "Mauvais login ou mdp.";
        }
    }
    else {
        // Redirection vers la meme page
        echo "<br>Mauvais login ou mdp.";
    }

}

?> 