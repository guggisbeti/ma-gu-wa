<?php
/**
 * ETML
 * Auteur: Jérôme Wassenberg
 * Date: 21.03.2017
 * Description: Page d'accueil du site
 */

session_start();
include 'include/head.php';
?>

<!DOCTYPE html>
<html lang="fr">

    <body>

        <?php include 'include/nav.php'; ?>

        <section>
            <div id="formLogin">
                <form>
                    Identifiant
                    <input type="text" class="inputForm col s3">

                    Mot de passe
                    <input type="password" class="inputForm col s3">

                    <a href="#">Mot de passe oublié ?</a>

                    <button type="submit">Connexion</button>
                </form>
            </div>
        </section>

        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="../../ressources/js/materialize.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    </body>
</html>

<?php
include 'include/footer.php';
?>