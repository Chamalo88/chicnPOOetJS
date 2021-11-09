<div class="formulaire">

    <form method="POST" enctype="multipart/form_data">
        <div class="form">
            <h1>Ajouter un<br> évenement</h1>
        </div>
        <div>
            <label>Jour : </label>
            <input value="<?= $jour ?>" name="jour" type="text" class="form-control" placeholder="Jour">
        </div>
        <div>
            <label>Code postal : </label>
            <input value="<?= $cp ?>" name="cp" type="text" class="form-control" placeholder="Code Postal">
        </div>

        <div>
            <label>Ville : </label>
            <input value="<?= $ville ?>" name="ville" type="text" class="form-control" placeholder="Ville">
        </div>

        <div>
            <label>Détail emplacement : </label>
            <input value="<?= $detail_emplacement ?>" name="detail_emplacement" type="text" class="form-control" placeholder="Détail_emplacement">
        </div>

        <div>
            <label>Horaires : </label>
            <input value="<?= $horaires ?>" name="horaires" type="text" class="form-control" placeholder="Horaires">
        </div>


        <div>
            <label>Information: </label>
            <input value="<?= $information ?>" name="information" type="text" class="form-control" placeholder="information">
        </div>


        <div class="form">
            <input style="margin-top:20px" type="submit" class="btn btn-success" value="Ajouter" ?>
        </div>
    </form>
</div>