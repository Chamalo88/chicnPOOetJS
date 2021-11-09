<div class="formulaire">

    <form method="POST">
        <div class="form">
            <H1> ETES VOUS SUR<br>
                DE VOULOIR<br>
                SUPPRIMER CET<br>
                EVENEMENT ?</h1>
        </div>
        <form method="POST">
            <input name="confirmation" type="submit" value="Supprimer" class="btn btn-danger">
        </form>
        <div class="form">
            <a href="<?= Config::$baseUrl ?>/planning/afficherTout" class="btn btn-info">Annuler</a>
        </div>
    </form>
</div>