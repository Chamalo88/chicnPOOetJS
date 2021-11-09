<nav>
    <div class="navigation">
        <a class="E" href="<?= config::$baseUrl ?>/utilisateur/connexion"><i class="fas fa-key"></i></a>
        <?php
        if (isset($_SESSION["utilisateur"])) {
            $utilisateur = unserialize($_SESSION["utilisateur"]);
        ?>


            <a href="<?= config::$baseUrl ?>/utilisateur/deconnexion"><i class="fas fa-user-slash" title="DECONNEXION"></i></a>

            <a href="<?= config::$baseUrl ?>/utilisateur/inscription"><i class="fas fa-user" title="INSCRIPTION"></i></a>

        <?php } ?>


    </div>
</nav>


<section>



    <h1> La Rôtisserie autrement, les goûts d'antan.</h1>

    <img src="<?= config::$baseUrl ?>./assets/images/logo.jpg" alt="Logo The Chic'N Rôtisserie"></img>


    <div id="menu">


        <a id="a" href="<?= config::$baseUrl ?>/produit/afficherTout">Produits</a>



        <a id="b" href="<?= config::$baseUrl ?>/planning/afficherTout">Emplacements</a>

    </div>


    <div class="view_port">
        <div class="polling_message">

        </div>
        <div class="cylon_eye"></div>
    </div>


    <div id="footer">

        <div>
            <a href="..\chicn\mentionLeg.html"><i class="fas fa-file-contract"></i> Mentions Légales</a>
        </div>
        <div>
            <a href="..\chicn\Contacteznous.html"></i><i class="far fa-address-card"></i> Contactez-nous!</a>
        </div>

        <div>
            <a href="..\chicn\jeu\index.html"><i class="fas fa-gamepad"></i> Jeu PC Chic'N Croc </a>
        </div>

        <div>
            <a href="https://www.facebook.com/thechicn/"><i class="fab fa-facebook-f"></i> Suivez nous</a>
        </div>



    </div>


</section>