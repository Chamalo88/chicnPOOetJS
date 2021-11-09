<div class="formulaire">

    <form method="POST">
        <div class="form">
            <H1> ETES VOUS SUR<br>
                DE VOULOIR<br>
                SUPPRIMER CE<br>
                PRODUIT ?</h1>
        </div>
        <div class="form">
            <input name="confirmation" type="submit" value="Supprimer le produit" class="btn btn-danger">
        </div>
    </form>
    <div class="form">
        <a href="<?= Config::$baseUrl ?>/produit/afficherTout" class="btn btn-info">Annuler</a>
    </div>
</div>